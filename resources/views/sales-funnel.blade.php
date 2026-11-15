<x-layouts.default-layout title="Honoura — Awards, Corporate Gifting & Event Production" description="Custom awards and trophies, corporate gifts and professionally produced ceremonies. Get a free quote and design mockup on WhatsApp." :footer="false">
    @php
        $wa = '2348107157800';
        $waHref = "https://wa.me/{$wa}";
        $services = [
            ['n' => '01', 'tag' => 'Recognition', 'title' => 'Awards, Trophies & Plaques', 'line' => 'Every achievement deserves meaningful recognition.', 'cta' => 'Quote my awards',
             'items' => ['Corporate and employee recognition awards', 'Leadership and excellence awards', 'Long-service and retirement awards', 'Academic and sports trophies and medals', 'Plaques and commemorative awards', 'Custom trophies in glass, crystal, metal, wood and acrylic']],
            ['n' => '02', 'tag' => 'Appreciation', 'title' => 'Corporate Gifting', 'line' => 'Make every gesture count.', 'cta' => 'Quote my gifts',
             'items' => ['Executive and corporate gifts', 'Employee and client appreciation packages', 'Branded promotional merchandise', 'Conference and event souvenirs', 'Retirement and farewell gifts', 'Festive gift boxes and hampers']],
            ['n' => '03', 'tag' => 'Execution', 'title' => 'Event Planning & Production', 'line' => 'We bring occasions to life.', 'cta' => 'Quote my event',
             'items' => ['Award nights and recognition ceremonies', 'Annual dinners and corporate galas', 'Conferences, summits and conventions', 'School award and graduation ceremonies', 'Church and institutional celebrations', 'Product launches and end-of-year parties']],
        ];
        $why = [
            ['Convenience', 'Awards, gifts and event services through one coordinating partner.'],
            ['Customisation', 'Designs tailored to your organisation, occasion and brand identity.'],
            ['Attention to detail', 'From the wording on a plaque to the final event presentation.'],
            ['Professional coordination', 'Planning, logistics, production and execution working as one.'],
            ['Meaningful experiences', 'Recognition is not just handing over an award. It is making people feel valued.'],
        ];
        $steps = [
            ['Tell us what you need', 'Share your requirements, event details, award specifications or gifting needs.'],
            ['Get a tailored proposal', 'We build a solution around your objectives, quantities and budget.'],
            ['Approve the design & plan', 'Review designs, arrangements and deliverables before production begins.'],
            ['We bring it to life', 'We handle production, coordination, delivery and event execution.'],
        ];
        $serve = ['Corporate organisations', 'Banks & financial institutions', 'Hospitals & healthcare', 'Schools, colleges & universities', 'Churches & religious bodies', 'Professional associations', 'NGOs & development organisations', 'Government & private institutions'];
        $faqs = [
        ['What happens after I send my request?', 'Your answers arrive as a WhatsApp message to our team. We reply the same day, then prepare a tailored proposal based on your quantities, preferences and budget.'],
        ['Is the free design mockup really free?', 'Yes. Message us during the booking window and we will sketch your trophy design at no cost, whether or not you proceed.'],
        ['Can I get awards, gifts and an event from one team?', 'Yes. That is the point of Honoura. One coordinating partner can handle the awards, the gifts and the ceremony itself.'],
        ['What materials can my trophies be made from?', 'We design custom trophies in glass, crystal, metal, wood and acrylic, with engraving and delivery included in the process.'],
        ['Do I have to approve anything before production?', 'Always. You review the proposed designs, event arrangements and deliverables before production begins.'],
        ];
    @endphp

    {{-- Header: fully transparent, 2xl blur --}}
    <section class="sticky top-0 z-50 w-full bg-white!">
        <div class="mx-auto flex max-w-6xl items-center justify-between gap-3 px-4 py-3 sm:px-6">
            <x-application-logo aria-label="Honoura Home"/>

            <div class="flex items-center gap-2">
                <a class="btn sm wa ring-1 ring-white/40" href="{{ $waHref }}" target="_blank" rel="noopener" aria-label="Chat with Honoura on WhatsApp"><x-selfhst-whatsapp class="size-4 shrink-0" aria-hidden="true"/><span class="sm:hidden">Chat</span><span class="hidden sm:inline">Chat now</span></a>
                <a class="btn light sm hidden shadow-sm ring-1 ring-ink/15 min-[420px]:inline-flex" href="#quote">Get my quote</a>
            </div>
        </div>

        <hr class="mx-auto -mt-1 w-2/5 rounded-full bg-red-jelly p-[0.05rem]">
    </section>

    <main id="main">
        {{-- Hero: WHITE --}}
        <section class="bg-white px-4 pb-10 pt-8 sm:px-6 lg:flex lg:min-h-[calc(100svh-4rem)] lg:items-center lg:py-14" aria-labelledby="hero-title"><div class="mx-auto w-full max-w-6xl">
                <div class="grid gap-10 lg:grid-cols-[1.4fr_1fr] lg:items-center lg:gap-14">
                    <div class="reveal">
                        <p class="eyebrow">Awards · Corporate Gifting · Events</p>
                        <h1 id="hero-title" class="mt-4 font-footlight text-5xl font-bold leading-[1.02] text-ink sm:text-6xl lg:text-7xl">Recognition people <em class="text-red-jelly">remember.</em></h1>
                        <p class="mt-6 max-w-xl text-base leading-relaxed text-muted sm:text-lg">From customised awards and thoughtful corporate gifts to fully produced ceremonies, HONOURA brings every detail together for businesses, schools, churches and institutions.</p>
                        <ul class="mt-8 grid gap-3 text-sm font-medium text-ink">
                            @foreach (['Free design mockup for bookings this month', 'Same-day reply on WhatsApp', 'No long forms. Three taps and you are done'] as $b)
                                <li class="flex items-center gap-3"><span class="grid size-5 shrink-0 place-items-center rounded-full bg-red-jelly text-[11px] font-bold text-white" aria-hidden="true">✓</span>{{ $b }}</li>
                            @endforeach
                        </ul>
                        <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                            <a class="btn wa" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>Chat on WhatsApp</a>
                            <a class="btn ghost" href="#quote">Get my free quote</a>
                        </div>
                    </div>
                    <div class="reveal h-64 overflow-hidden rounded-[28px] border border-line bg-paper sm:h-96 lg:h-[34rem]">
                        <img src="{{ asset('images/corporate-excellence-award-presentation.png') }}" alt="Corporate excellence award presentation setup by Honoura" width="1200" height="640" class="h-full w-full object-cover" fetchpriority="high">
                    </div>
                </div>
                <hr class="mx-auto mt-12 w-4/5 rounded-full bg-red-jelly p-[0.05rem]">
            </div>
        </section>

        {{-- Services: PLUM --}}
        <section class="on-dark bg-plum px-4 py-20 text-white sm:px-6" aria-labelledby="services-title"><div class="mx-auto max-w-6xl">
                <div class="reveal max-w-2xl">
                    <p class="eyebrow eyebrow-light">What we do</p>
                    <h2 id="services-title" class="mt-3 font-footlight text-4xl font-bold text-white sm:text-5xl">Awards, gifts and events. One partner.</h2>
                </div>
                <div class="mt-12 grid gap-6 lg:grid-cols-3">
                    @foreach ($services as $s)
                        <article class="card reveal flex flex-col justify-between p-6 text-ink sm:p-7">
                            <div>
                                <p class="font-footlight text-4xl font-bold text-plum-500">{{ $s['n'] }}</p>
                                <p class="eyebrow mt-3 !text-plum-500">{{ $s['tag'] }}</p>
                                <h3 class="mt-1 text-lg font-bold text-ink sm:text-xl">{{ $s['title'] }}</h3>
                                <p class="mt-2 font-footlight text-xl text-plum">{{ $s['line'] }}</p>
                                <ul class="mt-6 space-y-3 border-t border-line pt-6 text-sm text-plum">
                                    @foreach ($s['items'] as $i)<li class="flex gap-3"><span class="mt-2 h-px w-3 shrink-0 bg-red-jelly" aria-hidden="true"></span><span>{{ $i }}.</span></li>@endforeach
                                </ul>
                            </div>
                            <a class="btn wa mt-8 w-full" href="#quote">{{ $s['cta'] }}</a>
                        </article>
                    @endforeach
                </div>
                <div class="reveal mt-10 flex justify-center"><a class="btn light wa" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>Not sure? Chat with us on WhatsApp</a></div>
            </div>
        </section>

        {{-- Quote + who we serve: WHITE --}}
        <section id="quote" class="scroll-mt-20 bg-white px-4 pb-10 pt-20 sm:px-6 lg:pt-28" data-wa="{{ $wa }}" aria-label="Free quote"><div class="mx-auto max-w-6xl">
                <div class="grid gap-12 lg:grid-cols-[1fr_1.4fr] lg:items-start">
                    <div>
                        <div class="wiz reveal" aria-labelledby="quote-heading">
                            <p class="eyebrow">Free quote</p>
                            <h2 id="quote-heading" class="mt-1 text-xl font-bold text-ink sm:text-2xl">Tell us about your event</h2>
                            <p class="mb-5 mt-1 text-sm text-muted">Three quick taps, then your name. Your answers go straight into a WhatsApp message to our team.</p>
                            <div class="bar" aria-hidden="true"><span></span><span></span><span></span><span></span></div>
                            <div id="step" aria-live="polite">
                                <noscript><a class="btn" href="{{ $waHref }}" target="_blank" rel="noopener">Request a quote on WhatsApp</a></noscript>
                            </div>
                        </div>
                        <p class="mt-5 text-center text-sm text-muted">Prefer to chat? <a class="wa inline-flex min-h-11 items-center gap-1.5 font-semibold text-ink underline" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-4" aria-hidden="true"/>Message us on WhatsApp</a></p>
                    </div>

                    <div class="reveal lg:pt-4" aria-labelledby="serve-title">
                        <p class="eyebrow">Who we serve</p>
                        <h2 id="serve-title" class="mt-3 max-w-3xl font-footlight text-4xl font-bold text-ink sm:text-5xl">For organisations that value excellence, appreciation and meaningful celebrations.</h2>

                        <ul class="mt-10 flex flex-wrap gap-3">
                            @foreach ($serve as $w)<li class="rounded-full border border-line bg-white px-4 py-2.5 text-sm font-medium text-ink sm:px-5">{{ $w }}</li>@endforeach
                        </ul>
                    </div>
                </div>
                <hr class="mx-auto mt-16 w-4/5 rounded-full bg-red-jelly p-[0.05rem]">
            </div>
        </section>

        {{-- Why Honoura: INK --}}
        <section class="on-dark bg-ink text-white" aria-labelledby="why-title"><div class="mx-auto max-w-6xl px-4 py-20 sm:px-6">
                <div class="reveal">
                    <p class="eyebrow eyebrow-light">Why Honoura</p>
                    <h2 id="why-title" class="mt-3 max-w-2xl font-footlight text-4xl font-bold text-white sm:text-5xl">More than awards. Complete recognition solutions.</h2>
                </div>
                <div class="mt-12 grid gap-x-10 gap-y-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($why as [$t, $d])
                        <div class="reveal border-t border-white/25 pt-5">
                            <h3 class="text-base font-bold text-white">{{ $t }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-white/70">{{ $d }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- How it works: WHITE --}}
        <section class="bg-white" aria-labelledby="how-title"><div class="mx-auto max-w-6xl px-4 pb-10 pt-20 sm:px-6">
                <div class="reveal">
                    <p class="eyebrow">How it works</p>
                    <h2 id="how-title" class="mt-3 max-w-2xl font-footlight text-4xl font-bold text-ink sm:text-5xl">From your idea to a memorable experience.</h2>
                </div>
                <ol class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($steps as [$t, $d])
                        <li class="reveal">
                            <span class="font-footlight text-5xl font-bold text-red-jelly/70">0{{ $loop->iteration }}</span>
                            <h3 class="mt-3 text-base font-bold text-ink">{{ $t }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-muted">{{ $d }}</p>
                        </li>
                    @endforeach
                </ol>
                <div class="reveal mt-12 flex flex-col gap-3 sm:flex-row">
                    <a class="btn" href="#quote">Start step 1 now</a>
                    <a class="btn ghost wa" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>Chat on WhatsApp</a>
                </div>
                <hr class="mx-auto mt-16 w-4/5 rounded-full bg-red-jelly p-[0.05rem]">
            </div>
        </section>

        {{-- Offer + countdown: PLUM-500 --}}
        <section class="on-dark bg-plum-500 px-4 py-20 text-white sm:px-6" aria-labelledby="dlTitle"><div class="reveal mx-auto grid max-w-6xl items-center gap-8 md:grid-cols-[1fr_auto]">
                <div>
                    <p id="dlLabel" class="eyebrow eyebrow-light">Booking window</p>
                    <h2 id="dlTitle" class="mt-3 font-footlight text-3xl font-bold leading-tight sm:text-4xl">Free design mockup for every booking confirmed this month</h2>
                    <p class="mt-3 max-w-xl text-sm leading-relaxed text-white/75">Message us before the window closes and we will sketch your trophy design at no cost, whether or not you proceed.</p>
                    <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                        <a class="btn light" href="#quote">Claim my free mockup</a>
                        <a class="btn line wa" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>Chat on WhatsApp</a>
                    </div>
                </div>
                <div class="cd" role="timer" aria-label="Time left in this month's booking window">
                    <div><b id="d">0</b><span>Days</span></div><div><b id="h">0</b><span>Hrs</span></div><div><b id="m">0</b><span>Min</span></div>
                </div>
            </div>
        </section>

        {{-- FAQ: WHITE --}}
        <section class="bg-white" aria-labelledby="faq-title"><div class="mx-auto max-w-3xl px-4 pb-10 pt-20 sm:px-6">
                <div class="reveal">
                    <p class="eyebrow">Questions</p>
                    <h2 id="faq-title" class="mt-3 font-footlight text-4xl font-bold text-ink sm:text-5xl">Before you ask.</h2>
                </div>
                <div class="mt-10 border-t border-line">
                    @foreach ($faqs as [$q, $a])
                        <details class="faq reveal"><summary>{{ $q }}</summary><p class="pb-5 text-sm leading-relaxed text-muted">{{ $a }}</p></details>
                    @endforeach
                </div>
                <p class="mt-8 text-center text-sm text-muted">Still have a question? <a class="wa inline-flex min-h-11 items-center gap-1.5 font-semibold text-ink underline" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-4" aria-hidden="true"/>Ask us on WhatsApp</a></p>
                <hr class="mx-auto mt-10 w-4/5 rounded-full bg-red-jelly p-[0.05rem]">
            </div>
        </section>

        {{-- Final CTA: PLUM --}}
        <section class="on-dark bg-plum px-4 py-24 text-center text-white sm:px-6" aria-labelledby="final-title">
            <div class="reveal mx-auto max-w-3xl">
                <h2 id="final-title" class="font-footlight text-4xl font-bold leading-tight sm:text-6xl">Ready to make someone feel valued?</h2>
                <p class="mx-auto mt-5 max-w-xl text-white/75">Get your quote and free design mockup. We reply on WhatsApp the same day.</p>
                <div class="mt-9 flex flex-col items-stretch justify-center gap-3 sm:flex-row sm:items-center">
                    <a class="btn light" href="#quote">Get my quote in 3 taps</a>
                    <a class="btn line wa" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>Chat on WhatsApp</a>
                </div>
            </div>
        </section>
    </main>

    <p class="bg-plum px-4 pb-28 text-center text-xs text-white/60 md:pb-8">&copy; {{ date('Y') }} Honoura. All rights reserved.</p>

    {{-- Mobile: always-visible WhatsApp. The quote button hides while the form is on screen. --}}
    <div class="fixed inset-x-0 bottom-0 z-40 flex gap-2 border-t border-line bg-white/90 px-3 pt-3 pb-[max(0.75rem,env(safe-area-inset-bottom))] backdrop-blur-2xl md:hidden">
        <a class="btn wa flex-1 !px-4" href="{{ $waHref }}" target="_blank" rel="noopener"><x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>WhatsApp</a>
        <a class="btn ghost flex-1 !px-4" href="#quote" data-hide-on-quote>Free quote</a>
    </div>

    {{-- Tablet and desktop: floating WhatsApp button --}}
    <a class="btn wa fixed bottom-6 right-6 z-40 hidden shadow-xl ring-1 ring-white/40 md:inline-flex" href="{{ $waHref }}" target="_blank" rel="noopener" aria-label="Chat with Honoura on WhatsApp"><x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>Chat on WhatsApp</a>

</x-layouts.default-layout>
