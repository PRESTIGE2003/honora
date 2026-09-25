@extends('default-layout')

    @section('body')

        {{-- Nav --}}
        <nav class="sticky top-0 z-50 border-b border-(--line) bg-(--ivory)/90 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
                <a href="#" class="flex items-center gap-2">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-(--plum) font-display text-sm font-bold text-(--gold)">W</span>
                    <span class="font-display text-xl font-bold tracking-tight text-(--plum)">We<span class="text-(--gold-dark)">wards</span></span>
                </a>

                <div class="hidden items-center gap-8 md:flex">
                    <a href="#services" class="text-sm font-semibold text-(--charcoal-soft) transition hover:text-(--gold-dark)">Services</a>
                    <a href="#process" class="text-sm font-semibold text-(--charcoal-soft) transition hover:text-(--gold-dark)">Process</a>
                    <a href="#portfolio" class="text-sm font-semibold text-(--charcoal-soft) transition hover:text-(--gold-dark)">Portfolio</a>
                    <a href="#testimonials" class="text-sm font-semibold text-(--charcoal-soft) transition hover:text-(--gold-dark)">Testimonials</a>
                    <a href="{{ route('awards.index') }}" class="text-sm font-semibold text-(--charcoal-soft) transition hover:text-(--gold-dark)">Trouphy & Award Catelogoue</a>
                    <a href="#contact" class="rounded-full bg-(--plum) px-5 py-2.5 text-sm font-bold text-(--ivory) transition hover:bg-(--gold) hover:text-(--plum)">Book a Consultation</a>
                </div>

                <button id="menu-btn" type="button" class="flex h-10 w-10 items-center justify-center rounded-lg border border-(--line) text-(--plum) md:hidden" aria-label="Toggle menu">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>
            </div>

            <div id="mobile-menu" class="hidden flex-col gap-1 border-t border-(--line) bg-(--ivory) px-6 py-4 md:hidden">
                <a href="#services" class="rounded-lg px-3 py-2 text-sm font-semibold text-(--charcoal-soft) hover:bg-(--ivory-dark)">Services</a>
                <a href="#process" class="rounded-lg px-3 py-2 text-sm font-semibold text-(--charcoal-soft) hover:bg-(--ivory-dark)">Process</a>
                <a href="#portfolio" class="rounded-lg px-3 py-2 text-sm font-semibold text-(--charcoal-soft) hover:bg-(--ivory-dark)">Portfolio</a>
                <a href="#testimonials" class="rounded-lg px-3 py-2 text-sm font-semibold text-(--charcoal-soft) hover:bg-(--ivory-dark)">Testimonials</a>
                <a href="#contact" class="mt-2 rounded-full bg-(--plum) px-3 py-2 text-center text-sm font-bold text-(--ivory)">Book a Consultation</a>
            </div>
        </nav>

        {{-- Hero --}}
        <section class="relative overflow-hidden bg-(--plum)">
            <div class="pointer-events-none absolute -top-32 -left-20 h-96 w-96 rounded-full bg-(--gold)/15 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-24 top-1/3 h-80 w-80 rounded-full bg-(--mauve)/25 blur-3xl"></div>

            <div class="relative mx-auto max-w-4xl px-6 py-24 text-center sm:py-32 lg:px-10">
                <span class="inline-flex items-center gap-2 rounded-full border border-(--gold)/30 bg-(--gold)/10 px-4 py-1.5 text-xs font-semibold tracking-[0.2em] text-(--gold) uppercase">Award Event Specialists</span>
                <h1 class="mt-6 font-display text-4xl font-bold tracking-tight text-(--ivory) sm:text-6xl lg:text-7xl">Turn recognition into an <span class="bg-linear-to-r from-(--gold) via-(--mauve-light) to-(--gold) bg-clip-text text-transparent">unforgettable night</span></h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-(--mauve-light)">Wewards designs and produces award ceremonies, corporate galas and employee recognition events that make every honoree feel like a headliner.</p>

                <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="#contact" class="rounded-full bg-linear-to-r from-(--gold) to-(--gold-dark) px-8 py-3.5 text-sm font-bold text-(--plum-dark) shadow-lg transition hover:-translate-y-0.5">Plan Your Event</a>
                    <a href="#portfolio" class="rounded-full border border-(--ivory)/25 px-8 py-3.5 text-sm font-bold text-(--ivory) transition hover:bg-(--ivory)/10">See Our Work</a>
                </div>
            </div>

            <div class="relative border-t border-(--ivory)/10">
                <div class="mx-auto grid max-w-6xl grid-cols-2 gap-6 px-6 py-10 text-center sm:grid-cols-4 lg:px-10">
                    <div><p class="font-display text-3xl font-bold text-(--gold)">250+</p><p class="mt-1 text-xs font-semibold tracking-wider text-(--mauve-light) uppercase">Events produced</p></div>
                    <div><p class="font-display text-3xl font-bold text-(--gold)">40+</p><p class="mt-1 text-xs font-semibold tracking-wider text-(--mauve-light) uppercase">Industries served</p></div>
                    <div><p class="font-display text-3xl font-bold text-(--gold)">15</p><p class="mt-1 text-xs font-semibold tracking-wider text-(--mauve-light) uppercase">Years of craft</p></div>
                    <div><p class="font-display text-3xl font-bold text-(--gold)">98%</p><p class="mt-1 text-xs font-semibold tracking-wider text-(--mauve-light) uppercase">Client satisfaction</p></div>
                </div>
            </div>
        </section>

        {{-- Services --}}
        <section id="services" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
            <div class="mx-auto max-w-2xl text-center">
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">What we do</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--plum) sm:text-4xl">Every detail, perfectly produced</h2>
                <p class="mt-4 text-base leading-7 text-(--charcoal-soft)">From an intimate recognition breakfast to a thousand-seat industry gala, we handle the full production so you can focus on your honorees.</p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @php
                    $services = [
                        ['color' => 'plum', 'title' => 'Corporate Award Galas', 'desc' => 'End-to-end production for annual company award ceremonies, from concept to curtain call.', 'icon' => '<path d="M12 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" /><path d="M8.5 14 7 22l5-3 5 3-1.5-8" />'],
                        ['color' => 'mauve-dark', 'title' => 'Employee Recognition Nights', 'desc' => 'Celebrations built to make every team member feel seen, valued and genuinely honored.', 'icon' => '<path d="M12 2 9 9l-7 1 5 5-1 7 6-3 6 3-1-7 5-5-7-1Z" />'],
                        ['color' => 'gold-dark', 'title' => 'Industry & Association Awards', 'desc' => 'Large-scale ceremonies for associations, trade bodies and sector-wide recognition programs.', 'icon' => '<rect x="3" y="4" width="18" height="14" rx="2" /><path d="M8 21h8M12 18v3" />'],
                        ['color' => 'plum', 'title' => 'Hybrid & Virtual Ceremonies', 'desc' => 'Broadcast-quality streaming and hybrid staging that reach honorees wherever they are.', 'icon' => '<rect x="2" y="6" width="14" height="12" rx="2" /><path d="M16 10.5 22 7v10l-6-3.5Z" />'],
                        ['color' => 'mauve-dark', 'title' => 'Stage Design & Production', 'desc' => 'Lighting, staging, sound and show-calling handled by an experienced production crew.', 'icon' => '<path d="M4 20V10l8-6 8 6v10" /><path d="M9 20v-6h6v6" />'],
                        ['color' => 'gold-dark', 'title' => 'Trophies, Plaques & Custom Awards', 'desc' => 'Bespoke award design and fabrication that matches your brand and the night itself.', 'icon' => '<path d="M8 21h8M12 17v4" /><path d="M7 4h10v4a5 5 0 0 1-10 0V4Z" /><path d="M7 6H4a3 3 0 0 0 3 5M17 6h3a3 3 0 0 1-3 5" />'],
                    ];
                @endphp

                @foreach ($services as $s)
                <div class="group rounded-2xl border border-(--line) bg-(--white) p-6 shadow-sm transition hover:-translate-y-1 hover:border-(--{{ $s['color'] }})/40">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-(--{{ $s['color'] }})/10 text-(--{{ $s['color'] }})">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">{!! $s['icon'] !!}</svg>
                    </div>
                    <h3 class="mt-5 font-display text-lg font-bold text-(--plum)">{{ $s['title'] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-(--charcoal-soft)">{{ $s['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Process --}}
        <section id="process" class="bg-(--ivory-dark) py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-10">
                <div class="mx-auto max-w-2xl text-center">
                    <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">How it works</p>
                    <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--plum) sm:text-4xl">From first call to standing ovation</h2>
                </div>

                <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-5">
                    @php
                        $steps = [
                            ['n' => '01', 'title' => 'Discovery Call', 'desc' => 'We learn your goals, honorees and the story you want the night to tell.'],
                            ['n' => '02', 'title' => 'Concept & Design', 'desc' => 'Theme, staging, run-of-show and award design tailored to your brand.'],
                            ['n' => '03', 'title' => 'Production & Rehearsal', 'desc' => 'Vendors booked, script locked and every cue rehearsed in advance.'],
                            ['n' => '04', 'title' => 'Award Night', 'desc' => 'Our crew runs the room so your team can be fully present with guests.'],
                            ['n' => '05', 'title' => 'Post-Event Wrap-Up', 'desc' => 'Recap footage, photos and a debrief to carry into next year.'],
                        ];
                    @endphp

                    @foreach ($steps as $step)
                    <div class="rounded-2xl border border-(--line) bg-(--white) p-6">
                        <span class="font-display text-3xl font-bold text-(--gold)">{{ $step['n'] }}</span>
                        <h3 class="mt-3 font-display text-base font-bold text-(--plum)">{{ $step['title'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-(--charcoal-soft)">{{ $step['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Portfolio --}}
        <section id="portfolio" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
            <div class="mx-auto max-w-2xl text-center">
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">Recent work</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--plum) sm:text-4xl">Nights people are still talking about</h2>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @php
                    $work = [
                        ['name' => 'Global Tech Excellence Awards', 'hex' => '3B173D'],
                        ['name' => 'Pinnacle Sales Leadership Gala', 'hex' => 'C8A96B'],
                        ['name' => 'Employee Recognition Night', 'hex' => 'B99AAF'],
                        ['name' => 'Healthcare Heroes Awards', 'hex' => '250F27'],
                        ['name' => 'Fintech Innovation Summit', 'hex' => '5C2A5E'],
                        ['name' => 'Retail Champions Gala', 'hex' => '9B7B8F'],
                    ];
                @endphp

                @foreach ($work as $item)
                <div class="group relative aspect-4/3 overflow-hidden rounded-2xl">
                    <img src="https://placehold.co/640x480/{{ $item['hex'] }}/FAF7F1?text=Wewards" alt="{{ $item['name'] }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
                    <div class="absolute inset-0 flex items-end bg-linear-to-t from-(--plum)/85 via-(--plum)/10 to-transparent p-5">
                        <p class="font-display text-base font-bold text-(--ivory)">{{ $item['name'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Testimonials --}}
        <section id="testimonials" class="bg-(--plum) py-24">
            <div class="mx-auto max-w-4xl px-6 text-center lg:px-10">
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold) uppercase">Client stories</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--ivory) sm:text-4xl">Trusted to deliver the moment</h2>

                <div class="relative mt-12">
                    @php
                        $quotes = [
                            ['q' => 'Wewards turned our annual sales awards into the talk of the entire company. Flawless production from start to finish.', 'n' => 'Amara Chukwu', 'r' => 'Head of People, Northline Group'],
                            ['q' => 'They understood our brand instantly and built a stage experience that matched it perfectly.', 'n' => 'David Okoro', 'r' => 'Marketing Director, Vantage Retail'],
                            ['q' => 'From lighting to trophy design, every element felt intentional. Our honorees still talk about that night.', 'n' => 'Priya Sharma', 'r' => 'CHRO, Meridian Health'],
                        ];
                    @endphp

                    <div id="testimonial-track" class="overflow-hidden">
                        <div id="testimonial-slide" class="flex transition-transform duration-500">
                            @foreach ($quotes as $t)
                            <div class="w-full shrink-0 px-4">
                                <p class="font-display text-xl leading-9 text-(--ivory) sm:text-2xl">&ldquo;{{ $t['q'] }}&rdquo;</p>
                                <p class="mt-6 text-sm font-bold text-(--gold)">{{ $t['n'] }}</p>
                                <p class="text-xs text-(--mauve-light)">{{ $t['r'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div id="testimonial-dots" class="mt-8 flex items-center justify-center gap-2">
                        @foreach ($quotes as $i => $t)
                        <button type="button" data-dot="{{ $i }}" class="h-2 w-2 rounded-full bg-(--mauve)/40 transition {{ $i === 0 ? 'w-6 bg-(--gold)' : '' }}"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA banner --}}
        <section class="bg-linear-to-r from-(--plum) via-(--mauve-dark) to-(--gold-dark) py-16">
            <div class="mx-auto max-w-3xl px-6 text-center lg:px-10">
                <h2 class="font-display text-3xl font-bold tracking-tight text-(--ivory) sm:text-4xl">Ready to celebrate excellence?</h2>
                <p class="mt-3 text-base text-(--ivory)/85">Tell us about your next ceremony and we'll put together a free production proposal.</p>
                <a href="#contact" class="mt-8 inline-flex rounded-full bg-(--ivory) px-8 py-3.5 text-sm font-bold text-(--plum) transition hover:-translate-y-0.5">Get a Free Proposal</a>
            </div>
        </section>

        {{-- Contact --}}
        <section id="contact" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <div>
                    <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">Get in touch</p>
                    <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--plum) sm:text-4xl">Let's design your award night</h2>
                    <p class="mt-4 text-base leading-7 text-(--charcoal-soft)">Share a few details about your event and a member of our production team will respond within one business day.</p>

                    <div class="mt-10 space-y-6">
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-(--plum)/10 text-(--plum)"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z" /><circle cx="12" cy="10" r="2.5" /></svg></span>
                            <div><p class="text-sm font-bold text-(--plum)">Studio</p><p class="text-sm text-(--charcoal-soft)">Central Business District, Abuja, Nigeria</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-(--mauve)/15 text-(--mauve-dark)"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8 9.9a16 16 0 0 0 6 6l1.4-1.4a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.8 2Z" /></svg></span>
                            <div><p class="text-sm font-bold text-(--plum)">Phone</p><p class="text-sm text-(--charcoal-soft)">+234 800 000 0000</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-(--gold)/15 text-(--gold-dark)"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2" /><path d="m3 7 9 6 9-6" /></svg></span>
                            <div><p class="text-sm font-bold text-(--plum)">Email</p><p class="text-sm text-(--charcoal-soft)">hello@wewards.com</p></div>
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-5 rounded-3xl border border-(--line) bg-(--white) p-6 shadow-sm sm:p-8">
                    @csrf
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-semibold text-(--charcoal)">Full name</label>
                            <input id="name" name="name" type="text" required class="w-full rounded-xl border border-(--line-dark) bg-(--ivory-dark) px-4 py-3 text-sm text-(--charcoal) outline-none transition focus:border-(--plum) focus:ring-4 focus:ring-(--plum)/10" />
                        </div>
                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold text-(--charcoal)">Email</label>
                            <input id="email" name="email" type="email" required class="w-full rounded-xl border border-(--line-dark) bg-(--ivory-dark) px-4 py-3 text-sm text-(--charcoal) outline-none transition focus:border-(--plum) focus:ring-4 focus:ring-(--plum)/10" />
                        </div>
                    </div>

                    <div>
                        <label for="company" class="mb-2 block text-sm font-semibold text-(--charcoal)">Company</label>
                        <input id="company" name="company" type="text" class="w-full rounded-xl border border-(--line-dark) bg-(--ivory-dark) px-4 py-3 text-sm text-(--charcoal) outline-none transition focus:border-(--plum) focus:ring-4 focus:ring-(--plum)/10" />
                    </div>

                    <div>
                        <label for="event_type" class="mb-2 block text-sm font-semibold text-(--charcoal)">Event type</label>
                        <select id="event_type" name="event_type" class="w-full rounded-xl border border-(--line-dark) bg-(--ivory-dark) px-4 py-3 text-sm text-(--charcoal) outline-none transition focus:border-(--plum) focus:ring-4 focus:ring-(--plum)/10">
                            <option value="">Select an option</option>
                            <option value="corporate-gala">Corporate award gala</option>
                            <option value="employee-recognition">Employee recognition night</option>
                            <option value="industry-awards">Industry / association awards</option>
                            <option value="virtual">Virtual or hybrid ceremony</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="mb-2 block text-sm font-semibold text-(--charcoal)">Tell us about your event</label>
                        <textarea id="message" name="message" rows="4" required class="w-full resize-y rounded-xl border border-(--line-dark) bg-(--ivory-dark) px-4 py-3 text-sm leading-6 text-(--charcoal) outline-none transition focus:border-(--plum) focus:ring-4 focus:ring-(--plum)/10"></textarea>
                    </div>

                    <button type="submit" class="w-full rounded-xl bg-linear-to-r from-(--plum) via-(--mauve-dark) to-(--gold-dark) px-6 py-3.5 text-sm font-bold text-(--ivory) shadow-md transition hover:-translate-y-0.5">Send Enquiry</button>
                </form>
            </div>
        </section>
    @endsection