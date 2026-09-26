<?php

use App\Mail\NewEnquiryMail;
use App\Models\Enquiry;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->withoutMiddleware(PreventRequestForgery::class);
});

test('a valid contact form creates an enquiry and queues an email', function () {
    Mail::fake();

    $response = $this->post(route('contact.store'), [
        'name' => 'Ada Lovelace',
        'email' => 'ada@example.com',
        'company' => 'Analytical Engines Ltd',
        'event_type' => 'corporate-gala',
        'message' => 'We would like to discuss an award ceremony.',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('enquiries', [
        'name' => 'Ada Lovelace',
        'email' => 'ada@example.com',
        'company' => 'Analytical Engines Ltd',
        'event_type' => 'corporate-gala',
        'message' => 'We would like to discuss an award ceremony.',
    ]);

    Mail::assertQueued(NewEnquiryMail::class, function (NewEnquiryMail $mail) {
        return $mail->enquiry->email === 'ada@example.com'
            && $mail->queue === 'emails';
    });
});

test('an invalid contact form is rejected without saving or mailing', function () {
    Mail::fake();

    $response = $this->from(route('home'))->post(route('contact.store'), [
        'name' => '',
        'email' => 'not-an-email',
        'event_type' => 'unknown-event',
        'message' => '',
    ]);

    $response->assertRedirect(route('home'));
    $response->assertSessionHasErrors(['name', 'email', 'event_type', 'message']);
    expect(Enquiry::query()->count())->toBe(0);
    Mail::assertNothingQueued();
});
