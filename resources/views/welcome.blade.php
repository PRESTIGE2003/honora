@extends('default-layout')

    @section('body')
        {{-- Nav --}}
        <x-navigation />

        {{-- Hero --}}
        <section class="relative overflow-hidden bg-(--navy-900)">
            <div class="pointer-events-none absolute -top-32 -left-20 h-96 w-96 rounded-full bg-(--gold)/15 blur-3xl"></div>
            <div class="pointer-events-none absolute -right-24 top-1/3 h-80 w-80 rounded-full bg-(--crimson)/25 blur-3xl"></div>

            <div class="relative mx-auto max-w-4xl px-6 py-24 text-center sm:py-32 lg:px-10">
                <span class="inline-flex items-center gap-2 rounded-full border border-(--gold)/30 bg-(--gold)/10 px-4 py-1.5 text-xs font-semibold tracking-[0.2em] text-(--gold) uppercase">AWARD EVENT & CORPORATE GIFTING SPECIALISTS</span>
                <h1 class="mt-6 font-display text-4xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">We make <span class="bg-linear-to-r from-(--gold) via-white to-(--gold) bg-clip-text text-transparent">recognition</span> worth remembering</h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-white/70">HONOURA designs and coordinates award ceremonies, recognition events and corporate gifting experiences for companies, churches and organisations.</p>

                <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="#contact" class="rounded-full bg-linear-to-r from-(--gold) to-(--gold) px-8 py-3.5 text-sm font-bold text-(--purple-950) shadow-(--shadow-gold)">Plan Your Event</a>
                    <a href="#portfolio" class="rounded-full border border-white/20 px-8 py-3.5 text-sm font-bold text-white transition hover:bg-white/10">See Our Work</a>
                </div>
            </div>
        </section>

        {{-- Statistics --}}
        <section class="bg-linear-to-b from-(--navy-900) to-(--purple-950) from-0% to-90% pt-5 pb-12 w-2/3 mx-auto rounded-b-4xl">
            <div class="mx-auto max-w-2xl text-center">
                <p class=" text-xl leading-7 text-(--white)">From the first concept to the final applause, we bring together the planning, production, styling and details that make people feel genuinely celebrated.</p>
            </div>

            <div class="relative">
                <div class="mx-auto grid max-w-6xl grid-cols-2 gap-6 px-6 py-10 text-center sm:grid-cols-4 lg:px-10">
                    <div><p class="font-display text-3xl font-bold text-(--gold)">10+</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Events produced</p></div>
                    <div><p class="font-display text-3xl font-bold text-(--gold)">14+</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Industries served</p></div>
                    <div><p class="font-display text-3xl font-bold text-(--gold)">6+</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Years of craft</p></div>
                    <div><p class="font-display text-3xl font-bold text-(--gold)">100%</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Client satisfaction</p></div>
                </div>
            </div>
        </section>

        {{-- Services --}}
        <section id="services" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
            <div class="mx-auto max-w-2xl text-center">
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--crimson) uppercase">What we do</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--purple-950) sm:text-4xl">recognition, thoughtfully produced.</h2>
                <p class="mt-4 text-base leading-7 text-(--ink-soft)">Whether you are celebrating five outstanding people or an entire organisation, we create experiences that make recognition feel intentional, personal and memorable.</p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                @php
                    $services = [
                        ['color' => 'purple', 'title' => 'Award Ceremonies', 'desc' => 'End-to-end planning and production for corporate, organisational and church award ceremonies.', 'icon' => '<rect x="2" y="6" width="14" height="12" rx="2" /><path d="M16 10.5 22 7v10l-6-3.5Z" />'],
                        ['color' => 'crimson', 'title' => 'Employee & Team Recognition', 'desc' => 'Thoughtfully designed experiences that celebrate employees, teams and outstanding contributions.', 'icon' => '<path d="M12 2 9 9l-7 1 5 5-1 7 6-3 6 3-1-7 5-5-7-1Z" />'],
                        ['color' => 'gold', 'title' => 'Corporate & Organisational Events', 'desc' => 'Professional coordination for milestone celebrations, appreciation events and special organisational occasions.', 'icon' => '<path d="M12 2 9 9l-7 1 5 5-1 7 6-3 6 3-1-7 5-5-7-1Z" />'],
                        ['color' => 'purple', 'title' => 'Church & Ministry Recognition', 'desc' => 'Award and appreciation experiences for workers, leaders, volunteers and other members of your ministry community.', 'icon' => '<path d="M12 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" /><path d="M8.5 14 7 22l5-3 5 3-1.5-8" />'],
                        ['color' => 'gold', 'title' => 'Year-End & Appreciation Events', 'desc' => 'From staff dinners to appreciation nights, we help organisations celebrate the people who made the year possible.', 'icon' => '<rect x="3" y="4" width="18" height="14" rx="2" /><path d="M8 21h8M12 18v3" />'],
                        ['color' => 'crimson', 'title' => 'Corporate Gifting', 'desc' => 'Curated gifts and recognition packages for employees, executives, clients, partners, volunteers and special guests.', 'icon' => '<path d="M4 20V10l8-6 8 6v10" /><path d="M9 20v-6h6v6" />'],
                        ['color' => 'gold', 'title' => 'Custom Awards & Recognition', 'desc' => 'Trophies, plaques, medals, certificates and bespoke recognition pieces designed around your occasion and brand.', 'icon' => '<path d="M8 21h8M12 17v4" /><path d="M7 4h10v4a5 5 0 0 1-10 0V4Z" /><path d="M7 6H4a3 3 0 0 0 3 5M17 6h3a3 3 0 0 1-3 5" />'],
                        ['color' => 'purple', 'title' => 'Event Styling & Production', 'desc' => 'Stage design, branding, décor, lighting, sound, entertainment and production brought together into one cohesive experience.', 'icon' => '<path d="M12 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" /><path d="M8.5 14 7 22l5-3 5 3-1.5-8" />'],
                    ];
                @endphp

                @foreach ($services as $s)
                    <div class="group rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) transition hover:-translate-y-1 hover:border-(--{{ $s['color'] }})/40">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-(--{{ $s['color'] }})/10 text-(--{{ $s['color'] }})">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">{!! $s['icon'] !!}</svg>
                        </div>
                        <h3 class="mt-5 font-display text-lg font-bold text-(--purple-950)">{{ $s['title'] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-(--ink-soft)">{{ $s['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Standout --}}
        <section class="relative isolate overflow-hidden bg-[#16000f] text-white">
            <!-- Ambient background -->
            <div class="pointer-events-none absolute inset-0">
                <div class="absolute -left-32 -top-32 h-105 w-105 rounded-full bg-[#A80F2A]/30 blur-[120px]"></div>
                <div class="absolute -bottom-40 -right-20 h-125 w-125 rounded-full bg-[#D4AF37]/10 blur-[140px]"></div>

                <!-- Fine radial glow -->
                <div class="absolute left-1/2 top-1/2 h-175 w-175 -translate-x-1/2 -translate-y-1/2 rounded-full bg-[radial-gradient(circle,rgba(168,15,42,.14)_0%,transparent_65%)]"></div>

                <!-- Decorative grid -->
                <div class="absolute inset-0 opacity-[0.035]"
                    style="background-image:linear-gradient(rgba(255,255,255,.8) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.8) 1px,transparent 1px);background-size:80px 80px;">
                </div>
            </div>

            <div class="relative mx-auto max-w-7xl px-6 py-24 sm:px-10 lg:px-16 lg:py-32">
                <!-- Section header -->
                <div class="">
                    <!-- Heading -->
                    <div class="max-w-4xl mx-auto">
                        <p class="w-full font-mono mx-auto text-center text-xs font-semibold uppercase tracking-[0.3em] text-[#D4AF37]"> Why Honoura? </p>

                        <h2 class="mt-5 max-w-4xl text-4xl text-center font-semibold leading-[1.05] text-white sm:text-6xl lg:text-5xl lg:px-10">
                            <span class="text-[#D4AF37] underline">Recognition</span>
                            should feel
                            <span class="text-[#D4AF37]"> personal.</span>
                        </h2>

                        <div class="mt-8 h-px w-full bg-gradient-to-r from-[#D4AF37]/50 via-white/10 to-transparent"></div>
                    </div>
                </div>

                <!-- Main content -->
                <div class="mt-20 grid gap-16 lg:grid-cols-[1fr_1.15fr] lg:items-center">
                    <!-- Copy -->
                    <div class="max-w-xl">
                        <p class="text-lg leading-relaxed text-white/65 sm:text-xl">
                            Your people, your organisation and your story are unique.
                            Your recognition should be too.
                        </p>

                        <p class="mt-6 text-base leading-8 text-white/45">
                            We design every experience around the occasion, the honourees
                            and the moments you want people to remember long after the
                            applause fades.
                        </p>

                        <!-- Signature details -->
                        <div class="mt-10 flex flex-wrap gap-x-8 gap-y-4 border-t border-white/10 pt-7">
                            <div>
                                <span class="block font-mono text-[10px] uppercase tracking-[0.2em] text-[#D4AF37]/70">
                                    Thoughtful
                                </span>
                                <span class="mt-1 block text-sm text-white/70">
                                    Considered by design
                                </span>
                            </div>

                            <div>
                                <span class="block font-mono text-[10px] uppercase tracking-[0.2em] text-[#D4AF37]/70">
                                    Personal
                                </span>
                                <span class="mt-1 block text-sm text-white/70">
                                    Made for the moment
                                </span>
                            </div>

                            <div>
                                <span class="block font-mono text-[10px] uppercase tracking-[0.2em] text-[#D4AF37]/70">
                                    Refined
                                </span>
                                <span class="mt-1 block text-sm text-white/70">
                                    Beautifully coordinated
                                </span>
                            </div>
                        </div>
                    </div>


                    <!-- Quote card -->
                    <div class="relative">

                        <!-- Decorative corner -->
                        <div class="absolute -right-3 -top-3 h-16 w-16 border-r border-t border-[#D4AF37]/50"></div>

                        <div class="relative overflow-hidden border border-white/10 bg-white/[0.035] p-8 backdrop-blur-xl sm:p-12">

                            <!-- Gold glow -->
                            <div class="pointer-events-none absolute -right-20 -top-20 h-52 w-52 rounded-full bg-[#D4AF37]/10 blur-[80px]"></div>

                            <div class="relative">
                                <div class="flex items-center gap-4">
                                    <span class="h-px w-10 bg-[#D4AF37]"></span>
                                    <span class="font-mono text-[10px] uppercase tracking-[0.3em] text-[#D4AF37]">
                                        A belief we live by
                                    </span>
                                </div>

                                <blockquote class="mt-8 font-display text-2xl font-medium leading-[1.3] tracking-[-0.02em] text-white sm:text-4xl">
                                    “We don’t believe every award event should look the same.
                                    <span class="text-white/45">
                                        It should feel thoughtful, professional and beautifully coordinated — made for the moment.
                                    </span>”
                                </blockquote>

                                <!-- Attribution -->
                                <div class="mt-10 flex items-center gap-4">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-[#D4AF37]/30 bg-[#D4AF37]/10">
                                        <span class="font-display text-sm font-semibold text-[#D4AF37]">
                                            JE
                                        </span>
                                    </div>

                                    <div>
                                        <p class="text-sm font-semibold tracking-wide text-white">
                                            Jannet Edemma
                                        </p>

                                        <p class="mt-1 font-mono text-[10px] uppercase tracking-[0.2em] text-[#D4AF37]/70">
                                            CEO & Founder
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom decorative line -->
                        <div class="ml-auto mt-5 flex w-2/3 items-center justify-end gap-3">
                            <span class="h-px flex-1 bg-gradient-to-r from-transparent to-white/10"></span>
                            <span class="h-1.5 w-1.5 rounded-full bg-[#D4AF37]"></span>
                            <span class="font-mono text-[9px] uppercase tracking-[0.25em] text-white/30">
                                Made to be remembered
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Process --}}
        <section id="process" class="bg-(--warm-white) py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-10">
                <div class="mx-auto max-w-2xl text-center">
                    <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--purple) uppercase">How it works</p>
                    <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--purple-950) sm:text-4xl">From first call to standing ovation</h2>
                </div>

                <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-5">
                    @php
                        $steps = [
                            ['n' => '01', 'title' => 'Discovery', 'desc' => 'We learn about your organisation, your event, your honorees and what you want the experience to achieve.'],
                            ['n' => '02', 'title' => 'Concept & Design', 'desc' => 'We develop the event concept, theme, programme, award structure, staging and visual direction around your brief.'],
                            ['n' => '03', 'title' => 'Planning & Production', 'desc' => 'We coordinate vendors, production elements, awards, branding, scripts, logistics and every detail behind the scenes.'],
                            ['n' => '04', 'title' => 'Rehearsal & Event Day', 'desc' => 'We manage the production and run-of-show so you can be fully present with your guests and honorees.'],
                            ['n' => '05', 'title' => ' Post-Event', 'desc' => 'We wrap up the details and, where applicable, coordinate event photography, video, content and post-event reporting.'],
                        ];
                    @endphp

                    @foreach ($steps as $step)
                        <div class="rounded-2xl border border-(--line) bg-(--white) p-6">
                            <span class="font-display text-3xl font-bold text-(--gold)">{{ $step['n'] }}</span>
                            <h3 class="mt-3 font-display text-base font-bold text-(--purple-950)">{{ $step['title'] }}</h3>
                            <p class="mt-2 text-sm leading-6 text-(--ink-soft)">{{ $step['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Entertainment --}}
        <section class="overflow-hidden w-full h-[80vh] grid place-items-center bg-cover bg-no-repeat relative after:w-full after:h-full after:absolute after:top-0 after:left-0 after:bg-(--navy-900)/60" style="background-image: url('{{ asset('images/Screenshot 2026-09-24 202613.png') }}')">
            <h2 class="text-(--white) font-bold text-5xl w-full capitalize leading-15 px-8 relative z-2">
                the 
                <span class="text-transparent [-webkit-text-stroke:2px_red]">Finest</span>, 
                <br> most refined 
                <br> Entertainment and Acts
            </h2>
        </section>

        {{-- Portfolio --}}
        <section id="portfolio" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
            <div class="mx-auto max-w-2xl text-center">
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">OUR WORK</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--purple-950) sm:text-4xl">Moments worth remembering.</h2>
            </div>

            <div class="mt-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 lg:grid-rows-4 h-auto lg:h-200 w-full">
                @php
                    $work = [
                        ['name' => 'Global Tech Excellence Awards', 'hex' => '800080', 'img' => asset('images/Screenshot 2026-09-24 212959.png')],
                        ['name' => 'Pinnacle Sales Leadership Gala', 'hex' => 'A80F2A', 'img' => asset('images/pexels-bertellifotografia-3321795(1).jpg')],
                        ['name' => 'Employee Recognition Night', 'hex' => 'D4AF37', 'img' => asset('images/pexels-cherubs-22669860(1).jpg')],
                        ['name' => 'Healthcare Heroes Awards', 'hex' => '42010D', 'img' => asset('images/pexels-n-voitkevich-6532364.jpg')],
                        ['name' => 'Fintech Innovation Summit', 'hex' => '5C0717', 'img' => asset('images/pexels-rdne-7005045.jpg')],
                        // ['name' => 'Retail Champions Gala', 'hex' => '35002F', 'img' => asset('images/pexels-this-and-no-internet-25-288559-35335992.jpg')],
                    ];
                @endphp

                @foreach ($work as $item)
                    <div class="overflow-hidden first:col-span-2 first:row-span-1 nth-[2]:col-span-1 nth-[2]:row-span-2 nth-[3]:col-span-2 nth-[3]:row-span-2 nth-[4]:col-span-2 nth-[4]:row-span-2 nth-[5]:col-span-3 nth-[5]:row-span-1">
                        <div class="group relative aspect-4/3 overflow-hidden w-full h-full">
                            <img src="{{ isset($item['img']) ? $item['img'] : 'https://placehold.co/640x480/' . $item['hex'] . '/ffffff?text=Houra' }}"  alt="{{ $item['name'] }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
                            
                            <div class="absolute inset-0 flex items-end bg-linear-to-t from-(--purple-950)/85 via-(--purple-950)/10 to-transparent p-5">
                                <p class="font-display text-base font-bold text-white">{{ $item['name'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Testimonials --}}
        <section id="testimonials" class="bg-(--navy-900) py-24">
            <div class="mx-auto max-w-4xl px-6 text-center lg:px-10">
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold) uppercase">Client stories</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">Trusted to deliver the moment</h2>

                <div class="relative mt-12">
                    @php
                        $quotes = [
                            ['q' => 'Honoura turned our annual sales awards into the talk of the entire company. Flawless production from start to finish.', 'n' => 'Amara Chukwu', 'r' => 'Head of People, Northline Group'],
                            ['q' => 'They understood our brand instantly and built a stage experience that matched it perfectly.', 'n' => 'David Okoro', 'r' => 'Marketing Director, Vantage Retail'],
                            ['q' => 'From lighting to trophy design, every element felt intentional. Our honorees still talk about that night.', 'n' => 'Priya Sharma', 'r' => 'CHRO, Meridian Health'],
                        ];
                    @endphp

                    <div id="testimonial-track" class="overflow-hidden">
                        <div id="testimonial-slide" class="flex transition-transform duration-500">
                            @foreach ($quotes as $t)
                            <div class="w-full shrink-0 px-4">
                                <p class="font-display text-xl leading-9 text-white sm:text-2xl">&ldquo;{{ $t['q'] }}&rdquo;</p>
                                <p class="mt-6 text-sm font-bold text-(--gold)">{{ $t['n'] }}</p>
                                <p class="text-xs text-white/60">{{ $t['r'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div id="testimonial-dots" class="mt-8 flex items-center justify-center gap-2">
                        @foreach ($quotes as $i => $t)
                        <button type="button" data-dot="{{ $i }}" class="h-2 w-2 rounded-full bg-white/30 transition {{ $i === 0 ? 'w-6 bg-(--gold)' : '' }}"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA banner --}}
        <section class="w-full overflow-hidden py-16 relative bg-linear-to-r from-(--purple) via-(--crimson) to-(--gold-dark)">
            <div>
                <div class="absolute rounded-full top-20 left-32 bg-(--gold) blur-lg p-5"></div>
                <div class="absolute rounded-full top-40 left-80 bg-(--gold) blur-lg p-5"></div>
                <div class="absolute rounded-full top-10 left-120 bg-(--gold) blur-lg p-5"></div>
                <div class="absolute rounded-full top-20 right-32 bg-(--gold) blur-lg p-5"></div>
                <div class="absolute rounded-full top-40 right-80 bg-(--gold) blur-lg p-5"></div>
                <div class="absolute rounded-full top-10 right-120 bg-(--gold) blur-lg p-5"></div>
            </div>

            <div class="mx-auto max-w-3xl px-6 text-center lg:px-10">
                <h2 class="font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">Ready to celebrate excellence?</h2>
                <p class="mt-3 text-base text-white/85">Let’s make your next recognition event memorable.</p>
                <p class="mt-3 text-base text-white/85">Tell us about your next ceremony and we'll put together a free production proposal.</p>
                <a href="#contact" class="mt-8 inline-flex rounded-full bg-white px-8 py-3.5 text-sm font-bold text-(--purple-950) transition hover:-translate-y-0.5">Make an Enquiry</a>
            </div>
        </section>

        {{-- Contact --}}
        <section id="contact" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <div>
                    <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--crimson) uppercase">Get in touch</p>
                    <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--purple-950) sm:text-4xl">Let's design your award night</h2>
                    <p class="mt-4 text-base leading-7 text-(--ink-soft)">Share a few details about your event and a member of our team will get back to you.</p>

                    <div class="mt-10 space-y-6">
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-(--purple)/10 text-(--purple)"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z" /><circle cx="12" cy="10" r="2.5" /></svg></span>
                            <div><p class="text-sm font-bold text-(--purple-950)">Studio</p><p class="text-sm text-(--ink-soft)">Central Business District, Abuja, Nigeria</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-(--crimson)/10 text-(--crimson)"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8 9.9a16 16 0 0 0 6 6l1.4-1.4a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.8 2Z" /></svg></span>
                            <div><p class="text-sm font-bold text-(--purple-950)">Phone</p><p class="text-sm text-(--ink-soft)">+234 800 000 0000</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-(--gold)/15 text-(--gold-dark)"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2" /><path d="m3 7 9 6 9-6" /></svg></span>
                            <div><p class="text-sm font-bold text-(--purple-950)">Email</p><p class="text-sm text-(--ink-soft)">hello@Honoura.com</p></div>
                        </div>
                    </div>
                </div>

                <x-contact-form />
            </div>
        </section>
@endsection