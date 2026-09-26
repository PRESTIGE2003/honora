<?php

namespace App\Http\Controllers;

use App\Mail\NewEnquiryMail;
use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email:rfc', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'event_type' => ['nullable', 'string', 'in:corporate-gala,employee-recognition,industry-awards,virtual,other'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $enquiry = Enquiry::create($validated);

        Mail::mailer('smtp')
            ->to(config('mail.personal_email'))
            ->queue(new NewEnquiryMail($enquiry));

        return back()->with('success', 'Thank you. Your enquiry has been sent successfully.');
    }
}
