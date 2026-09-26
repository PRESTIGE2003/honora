@if (session('success'))
    <div class="mb-5 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800" role="status">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="mb-5 rounded-xl border border-(--crimson)/30 bg-red-50 px-4 py-3 text-sm text-(--crimson)" role="alert">
        <p class="font-bold">Please correct the highlighted information.</p>
        <ul class="mt-2 list-inside list-disc">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('contact.store') }}" class="space-y-5 rounded-3xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) sm:p-8">
                @csrf
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="name" class="mb-2 block text-sm font-semibold text-(--ink)">Full name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10" />
                    </div>
                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-(--ink)">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10" />
                    </div>
                </div>

                <div>
                    <label for="company" class="mb-2 block text-sm font-semibold text-(--ink)">Company</label>
                    <input id="company" name="company" type="text" value="{{ old('company') }}" class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10" />
                </div>

                <div>
                    <label for="event_type" class="mb-2 block text-sm font-semibold text-(--ink)">Event type</label>
                    <select id="event_type" name="event_type" class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10">
                        <option value="">Select an option</option>
                        <option value="corporate-gala" @selected(old('event_type') === 'corporate-gala')>Corporate award gala</option>
                        <option value="employee-recognition" @selected(old('event_type') === 'employee-recognition')>Employee recognition night</option>
                        <option value="industry-awards" @selected(old('event_type') === 'industry-awards')>Industry / association awards</option>
                        <option value="virtual" @selected(old('event_type') === 'virtual')>Virtual or hybrid ceremony</option>
                        <option value="other" @selected(old('event_type') === 'other')>Other</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="mb-2 block text-sm font-semibold text-(--ink)">Tell us about your event</label>
                    <textarea id="message" name="message" rows="4" required class="w-full resize-y rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm leading-6 text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="w-full rounded-xl bg-linear-to-r from-(--purple) via-(--crimson) to-(--gold-dark) px-6 py-3.5 text-sm font-bold text-white shadow-(--shadow-purple) transition hover:-translate-y-0.5">Send Enquiry</button>
            </form>