<form method="POST" action="{{ route('contact.store') }}" class="space-y-5 rounded-3xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) sm:p-8">
                @csrf
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="name" class="mb-2 block text-sm font-semibold text-(--ink)">Full name</label>
                        <input id="name" name="name" type="text" required class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10" />
                    </div>
                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-(--ink)">Email</label>
                        <input id="email" name="email" type="email" required class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10" />
                    </div>
                </div>

                <div>
                    <label for="company" class="mb-2 block text-sm font-semibold text-(--ink)">Company</label>
                    <input id="company" name="company" type="text" class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10" />
                </div>

                <div>
                    <label for="event_type" class="mb-2 block text-sm font-semibold text-(--ink)">Event type</label>
                    <select id="event_type" name="event_type" class="w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10">
                        <option value="">Select an option</option>
                        <option value="corporate-gala">Corporate award gala</option>
                        <option value="employee-recognition">Employee recognition night</option>
                        <option value="industry-awards">Industry / association awards</option>
                        <option value="virtual">Virtual or hybrid ceremony</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div>
                    <label for="message" class="mb-2 block text-sm font-semibold text-(--ink)">Tell us about your event</label>
                    <textarea id="message" name="message" rows="4" required class="w-full resize-y rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm leading-6 text-(--ink) outline-none transition focus:border-(--purple) focus:ring-4 focus:ring-(--purple)/10"></textarea>
                </div>

                <button type="submit" class="w-full rounded-xl bg-linear-to-r from-(--purple) via-(--crimson) to-(--gold-dark) px-6 py-3.5 text-sm font-bold text-white shadow-(--shadow-purple) transition hover:-translate-y-0.5">Send Enquiry</button>
            </form>