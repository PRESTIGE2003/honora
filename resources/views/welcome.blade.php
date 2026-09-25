<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Honoura — Award Event Specialists</title>
    <meta name="description" content="Honoura designs and produces corporate award ceremonies, employee recognition galas and industry award shows from concept to curtain call." />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-(--white) text-(--ink) antialiased font-montserrat">
    {{-- Nav --}}
    <x-navigation />

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-(--navy-900)">
        <div class="pointer-events-none absolute -top-32 -left-20 h-96 w-96 rounded-full bg-(--gold)/15 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-24 top-1/3 h-80 w-80 rounded-full bg-(--crimson)/25 blur-3xl"></div>

        <div class="relative mx-auto max-w-4xl px-6 py-24 text-center sm:py-32 lg:px-10">
            <span class="inline-flex items-center gap-2 rounded-full border border-(--gold)/30 bg-(--gold)/10 px-4 py-1.5 text-xs font-semibold tracking-[0.2em] text-(--gold) uppercase">Award Event Specialists</span>
            <h1 class="mt-6 font-display text-4xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">Turn recognition into an <span class="bg-linear-to-r from-(--gold) via-white to-(--gold) bg-clip-text text-transparent">unforgettable night</span></h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-white/70">Hooura designs and produces award ceremonies, corporate galas and employee recognition events that make every honoree feel like a headliner.</p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a href="#contact" class="rounded-full bg-linear-to-r from-(--gold) to-(--gold) px-8 py-3.5 text-sm font-bold text-(--purple-950) shadow-(--shadow-gold)">Plan Your Event</a>
                <a href="#portfolio" class="rounded-full border border-white/20 px-8 py-3.5 text-sm font-bold text-white transition hover:bg-white/10">See Our Work</a>
            </div>
        </div>

        <div class="relative border-t border-white/10">
            <div class="mx-auto grid max-w-6xl grid-cols-2 gap-6 px-6 py-10 text-center sm:grid-cols-4 lg:px-10">
                <div><p class="font-display text-3xl font-bold text-(--gold)">10+</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Events produced</p></div>
                <div><p class="font-display text-3xl font-bold text-(--gold)">14+</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Industries served</p></div>
                <div><p class="font-display text-3xl font-bold text-(--gold)">6</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Years of craft</p></div>
                <div><p class="font-display text-3xl font-bold text-(--gold)">100%</p><p class="mt-1 text-xs font-semibold tracking-wider text-white/60 uppercase">Client satisfaction</p></div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section id="services" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-2xl text-center">
            <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--crimson) uppercase">What we do</p>
            <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--purple-950) sm:text-4xl">Every detail, perfectly produced</h2>
            <p class="mt-4 text-base leading-7 text-(--ink-soft)">From an intimate recognition breakfast to a thousand-seat industry gala, we handle the full production so you can focus on your honorees.</p>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @php
                $services = [
                    ['color' => 'purple', 'title' => 'Corporate Award Galas', 'desc' => 'End-to-end production for annual company award ceremonies, from concept to curtain call.', 'icon' => '<path d="M12 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" /><path d="M8.5 14 7 22l5-3 5 3-1.5-8" />'],
                    ['color' => 'crimson', 'title' => 'Employee Recognition Nights', 'desc' => 'Celebrations built to make every team member feel seen, valued and genuinely honored.', 'icon' => '<path d="M12 2 9 9l-7 1 5 5-1 7 6-3 6 3-1-7 5-5-7-1Z" />'],
                    ['color' => 'gold', 'title' => 'Industry & Association Awards', 'desc' => 'Large-scale ceremonies for associations, trade bodies and sector-wide recognition programs.', 'icon' => '<rect x="3" y="4" width="18" height="14" rx="2" /><path d="M8 21h8M12 18v3" />'],
                    ['color' => 'purple', 'title' => 'Hybrid & Virtual Ceremonies', 'desc' => 'Broadcast-quality streaming and hybrid staging that reach honorees wherever they are.', 'icon' => '<rect x="2" y="6" width="14" height="12" rx="2" /><path d="M16 10.5 22 7v10l-6-3.5Z" />'],
                    ['color' => 'crimson', 'title' => 'Stage Design & Production', 'desc' => 'Lighting, staging, sound and show-calling handled by an experienced production crew.', 'icon' => '<path d="M4 20V10l8-6 8 6v10" /><path d="M9 20v-6h6v6" />'],
                    ['color' => 'gold', 'title' => 'Trophies, Plaques & Custom Awards', 'desc' => 'Bespoke award design and fabrication that matches your brand and the night itself.', 'icon' => '<path d="M8 21h8M12 17v4" /><path d="M7 4h10v4a5 5 0 0 1-10 0V4Z" /><path d="M7 6H4a3 3 0 0 0 3 5M17 6h3a3 3 0 0 1-3 5" />'],
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
                    <h3 class="mt-3 font-display text-base font-bold text-(--purple-950)">{{ $step['title'] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-(--ink-soft)">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Entertainment --}}
    <section class="w-full h-[80vh] grid place-items-center bg-cover bg-no-repeat relative after:w-full after:h-full after:absolute after:top-0 after:left-0 after:bg-(--navy-900)/60" style="background-image: url('{{ asset('images/Screenshot 2026-09-24 202613.png') }}')">
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
            <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">Recent work</p>
            <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--purple-950) sm:text-4xl">Nights people are still talking about</h2>
        </div>

        <div class="mt-14 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $work = [
                    ['name' => 'Global Tech Excellence Awards', 'hex' => '800080', 'img' => asset('images/Screenshot 2026-09-24 212959.png')],
                    ['name' => 'Pinnacle Sales Leadership Gala', 'hex' => 'A80F2A', 'img' => asset('images/pexels-bertellifotografia-3321795(1).jpg')],
                    ['name' => 'Employee Recognition Night', 'hex' => 'D4AF37', 'img' => asset('images/pexels-cherubs-22669860(1).jpg')],
                    ['name' => 'Healthcare Heroes Awards', 'hex' => '42010D', 'img' => asset('images/pexels-n-voitkevich-6532364.jpg')],
                    ['name' => 'Fintech Innovation Summit', 'hex' => '5C0717', 'img' => asset('images/pexels-rdne-7005045.jpg')],
                    ['name' => 'Retail Champions Gala', 'hex' => '35002F', 'img' => asset('images/pexels-this-and-no-internet-25-288559-35335992.jpg')],
                ];
            @endphp

            @foreach ($work as $item)
                <div class="group relative aspect-4/3 overflow-hidden rounded-2xl">
                    <img src="{{ isset($item['img']) ? $item['img'] : 'https://placehold.co/640x480/' . $item['hex'] . '/ffffff?text=Houra' }}"  alt="{{ $item['name'] }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
                    
                    <div class="absolute inset-0 flex items-end bg-linear-to-t from-(--purple-950)/85 via-(--purple-950)/10 to-transparent p-5">
                        <p class="font-display text-base font-bold text-white">{{ $item['name'] }}</p>
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
    <section class="py-16 relative bg-linear-to-r from-(--purple) via-(--crimson) to-(--gold-dark)">
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
            <p class="mt-3 text-base text-white/85">Tell us about your next ceremony and we'll put together a free production proposal.</p>
            <a href="#contact" class="mt-8 inline-flex rounded-full bg-white px-8 py-3.5 text-sm font-bold text-(--purple-950) transition hover:-translate-y-0.5">Make an Enquiry and we'll reach back</a>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
            <div>
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--crimson) uppercase">Get in touch</p>
                <h2 class="mt-3 font-display text-3xl font-bold tracking-tight text-(--purple-950) sm:text-4xl">Let's design your award night</h2>
                <p class="mt-4 text-base leading-7 text-(--ink-soft)">Share a few details about your event and a member of our production team will respond within one business day.</p>

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

    {{-- Footer --}}
    <x-footer />

    <script>
        window.gie=window.gie||function(c){(gie.q=gie.q||[]).push(c)};gie(function(){gie.widgets.load({id:'9c0_ekdkSI1E9YhDAXZ9Ew',sig:'PFLxT7exkpbRMuskw4q-zfMpTfDXFE0eCKvvn3eVHMs=',w:'509px',h:'339px',items:'2217726470',caption: true ,tld:'com',is360: false })});
    </script>
    <script src='//embed-cdn.gettyimages.com/widgets.js' charset='utf-8' async></script>
</body>
</html>