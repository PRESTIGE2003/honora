@php
    $input = 'mt-1.5 w-full rounded-xl border border-(--line) bg-(--white) px-4 py-3 text-sm text-(--navy-900) placeholder:text-(--ink-soft)/60 focus:border-(--crimson) focus:outline-none focus:ring-2 focus:ring-(--crimson)/20';
    $label = 'block text-xs font-semibold tracking-wide text-(--purple-950) uppercase';
    $services = \App\Http\Controllers\EnquiryController::SERVICES;
@endphp

<form method="POST" action="{{ route('contact.store') }}" class="rounded-2xl border border-(--line) bg-(--warm-white) p-6 shadow-(--shadow-soft) sm:p-8" aria-labelledby="wa-contact-title">
    @csrf

    <h3 id="wa-contact-title" class="font-display text-xl font-bold text-(--purple-950)">Send us your details</h3>

    <p class="mt-1 text-sm text-(--ink-soft)">Your enquiry goes straight to our team on WhatsApp.</p>

    @if (session('enquiry_sent'))
        <div class="mt-5 rounded-xl border border-(--crimson)/30 bg-(--crimson)/5 p-4 text-sm font-medium text-(--purple-950)" role="status">Thank you. Your enquiry has been sent to our team on WhatsApp and we will reply shortly.</div>
    @endif

    @if ($errors->any())
        <div class="mt-5 rounded-xl border border-(--crimson)/40 bg-(--crimson)/5 p-4 text-sm text-(--crimson)" role="alert">Please fix the highlighted fields and try again.</div>
    @endif

    <input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true">

    <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2">
        <div><label for="wc-name" class="{{ $label }}">Full name *</label><input id="wc-name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" class="{{ $input }}" placeholder="e.g. Ada Okafor">@error('name')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror</div>

        <div><label for="wc-org" class="{{ $label }}">Organisation</label><input id="wc-org" name="organisation" type="text" autocomplete="organization" value="{{ old('organisation') }}" class="{{ $input }}" placeholder="Company, church or school">@error('organisation')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror</div>

        <div><label for="wc-phone" class="{{ $label }}">Phone</label><input id="wc-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" value="{{ old('phone') }}" class="{{ $input }}" placeholder="0801 234 5678">@error('phone')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror</div>

        <div><label for="wc-email" class="{{ $label }}">Email</label><input id="wc-email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" class="{{ $input }}" placeholder="you@company.com">@error('email')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror</div>

        <div class="sm:col-span-2">
            <label for="wc-service" class="{{ $label }}">What do you need? *</label>
            <select id="wc-service" name="service" required class="{{ $input }}">
                <option value="" disabled @selected(! old('service'))>Select one</option>
                @foreach ($services as $o)
                    <option value="{{ $o }}" @selected(old('service') === $o)>{{ $o }}
                    </option>
                @endforeach
            </select>

            @error('service')
                <p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>
            @enderror</div>

        <div>
            <label for="wc-date" class="{{ $label }}">
                Event date
            </label>

            <input id="wc-date" name="date" type="date" min="{{ now()->toDateString() }}" value="{{ old('date') }}" class="{{ $input }}">
            @error('date')
                <p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="wc-qty" class="{{ $label }}">
                Guests or awards
            </label>
            <input id="wc-qty" name="quantity" type="text" value="{{ old('quantity') }}" class="{{ $input }}" placeholder="e.g. 150 guests, 20 awards">
            @error('quantity')
                <p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>
            @enderror
        </div>

        <div class="sm:col-span-2">
            <label for="wc-msg" class="{{ $label }}">Tell us more</label>
            <textarea id="wc-msg" name="message" rows="4" class="{{ $input }}" placeholder="Theme, venue, budget, anything we should know">{{ old('message') }}</textarea>
            @error('message')
                <p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>
            @enderror</div>
    </div>

    <button type="submit" class="mt-6 inline-flex w-full items-center justify-center gap-2.5 rounded-full bg-(--crimson) px-8 py-3.5 text-sm font-bold text-white shadow-(--shadow-red) transition hover:-translate-y-0.5 hover:brightness-110 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-(--crimson)">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 .1 5.3.1 11.9c0 2.1.6 4.2 1.6 6L0 24l6.3-1.7a12 12 0 0 0 5.7 1.5c6.6 0 11.9-5.3 11.9-11.9 0-3.2-1.2-6.2-3.4-8.4ZM12 21.8a9.9 9.9 0 0 1-5-1.4l-.4-.2-3.7 1 1-3.6-.2-.4a9.9 9.9 0 1 1 8.3 4.6Zm5.4-7.4c-.3-.1-1.8-.9-2-1s-.5-.1-.7.1l-.9 1.1c-.2.2-.3.2-.6.1a8.1 8.1 0 0 1-4-3.5c-.3-.5.3-.5.9-1.6.1-.2 0-.4 0-.5l-1-2.3c-.2-.6-.5-.5-.7-.5h-.6a1.1 1.1 0 0 0-.8.4 3.4 3.4 0 0 0-1 2.5 5.9 5.9 0 0 0 1.2 3.1 13.5 13.5 0 0 0 5.2 4.6c1.9.8 2.6.9 3.5.7a3 3 0 0 0 2-1.4 2.4 2.4 0 0 0 .2-1.4c-.1-.1-.3-.2-.6-.3Z"/></svg>
        Send via WhatsApp
    </button>
</form>
