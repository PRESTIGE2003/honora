<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Throwable;

class EnquiryController extends Controller
{
    public const array SERVICES = ['Award ceremony', 'Employee & team recognition', 'Corporate or organisational event', 'Church & ministry recognition', 'Year-end or appreciation event', 'Corporate gifting', 'Custom awards & recognition', 'Event styling & production', 'Something else'];

    public function store(Request $request): RedirectResponse
    {
        if ($request->filled('website')) return back(); // honeypot: bots fill hidden fields

        $v = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:100'],
            'organisation' => ['nullable', 'string', 'max:120'],
            'phone' => ['nullable', 'string', 'max:30', 'regex:/^[0-9+()\-\s]{7,30}$/'],
            'email' => ['nullable', 'email', 'max:150'],
            'service' => ['required', Rule::in(self::SERVICES)],
            'date' => ['nullable', 'date', 'after_or_equal:today'],
            'quantity' => ['nullable', 'string', 'max:80'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $back = url()->previous() . '#contact';
        if ($v->fails()) return redirect($back)->withErrors($v)->withInput();

        $data = $v->validated();
        $enquiry = Enquiry::create($data);
        $text = $this->message($data);

        if ($this->sendViaApi($text)) {
            $enquiry->update(['whatsapp_sent' => true]);
            return redirect($back)->with('enquiry_sent', true);
        }

        // No API configured (or it failed): send the visitor to a pre-filled WhatsApp chat.
        return redirect()->away('https://wa.me/' . config('services.whatsapp.to') . '?text=' . rawurlencode($text));
    }

    private function message(array $d): string
    {
        $date = ! empty($d['date']) ? Carbon::parse($d['date'])->format('j F Y') : null;
        $rows = collect([
            'Name' => $d['name'] ?? null, 'Organisation' => $d['organisation'] ?? null, 'Phone' => $d['phone'] ?? null,
            'Email' => $d['email'] ?? null, 'Service' => $d['service'] ?? null, 'Event date' => $date, 'Guests / awards' => $d['quantity'] ?? null,
        ])->filter()->map(fn ($v, $k) => "*$k:* $v")->implode("\n");

        $text = "Hello Honoura, I'd like to make an enquiry.\n\n" . $rows;
        if (! empty($d['message'])) $text .= "\n\n*Message:*\n" . $d['message'];
        return $text;
    }

    private function sendViaApi(string $text): bool
    {
        $c = config('services.whatsapp');
        if (empty($c['token']) || empty($c['phone_id'])) return false;

        // Template parameters cannot contain newlines or long runs of spaces.
        $flat = Str::limit(preg_replace('/ {2,}/', ' ', preg_replace('/\s*\n+\s*/', ' | ', trim($text))), 1000, '');

        try {
            $r = Http::withToken($c['token'])->timeout(10)->post("https://graph.facebook.com/{$c['version']}/{$c['phone_id']}/messages", [
                'messaging_product' => 'whatsapp',
                'to' => $c['to'],
                'type' => 'template',
                'template' => ['name' => $c['template'], 'language' => ['code' => $c['lang']], 'components' => [['type' => 'body', 'parameters' => [['type' => 'text', 'text' => $flat]]]]],
            ]);
            if (! $r->successful()) Log::warning('WhatsApp API rejected enquiry', ['status' => $r->status(), 'body' => $r->body()]);
            return $r->successful();
        } catch (Throwable $e) {
            Log::error('WhatsApp API error: ' . $e->getMessage());
            return false;
        }
    }
}
