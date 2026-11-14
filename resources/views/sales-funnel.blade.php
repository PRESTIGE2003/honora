<x-layouts.default-layout>
    <main
        class="funnel-background relative font-instrument-sans min-h-screen text-slate-100 flex flex-col justify-between selection:bg-[var(--brand)] selection:text-white">
        <title>Honoura Awards Funnel</title>

        {{-- Accessible Header --}}
        <header class="w-full max-w-5xl mx-auto flex items-center justify-between px-4 sm:px-6 py-4">
            <x-application-logo aria-label="Honoura Home"/>
        </header>

        {{-- Floating WhatsApp CTA --}}
        <a href="https://wa.me/2348107157800"
           target="_blank"
           rel="noopener"
           class="btn ghost wa fixed top-6 right-4 sm:right-8 z-50 rounded-full w-fit px-5 py-2.5 flex whitespace-nowrap items-center gap-2.5 bg-(--brand) text-(--brand-fg) font-semibold shadow-lg hover:opacity-95 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#0B0F19] transition-all">
            <x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>
            <span>Chat Now</span>
        </a>

        {{-- Main Container --}}
        <div class="w-full max-w-5xl mx-auto px-4 sm:px-6 py-6 flex-1 flex flex-col justify-center">

            {{-- 1. HERO SECTION --}}
            <section aria-label="Introduction">
                <div
                    class="rounded-3xl w-full h-64 sm:h-96 overflow-hidden shadow-2xl bg-slate-800 border border-white/10 mb-8">
                    <img alt="Corporate excellence award presentation setup by Honoura"
                         src="{{ asset('images/corporate-excellence-award-presentation.png') }}"
                         class="w-full h-full object-cover">
                </div>

                {{-- Categories List --}}
                <ul class="flex items-center gap-x-4 gap-y-2 flex-wrap py-2 font-semibold font-montserrat text-xs sm:text-sm uppercase tracking-widest text-(--brass)"
                    aria-label="Event categories">
                    <li class="flex items-center gap-2">
                        <span class="size-1.5 rounded-full bg-(--brass)" aria-hidden="true"></span>
                        Awards &amp; Trophies
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="size-1.5 rounded-full bg-(--brass)" aria-hidden="true"></span>
                        Corporate Gifting
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="size-1.5 rounded-full bg-(--brass)" aria-hidden="true"></span>
                        Event Planning &amp; Production
                    </li>
                </ul>

                {{-- Value Proposition Heading --}}
                <h1 class="text-2xl sm:text-4xl lg:text-[2.65rem] py-3 font-bold font-footlight text-white leading-tight max-w-4xl">
                    From recognising outstanding achievements to celebrating milestones and creating memorable corporate
                    experiences, HONOURA brings every detail together.
                </h1>

                <p class="text-sm sm:text-base py-2 text-white/80 font-montserrat max-w-3xl leading-relaxed">
                    We help businesses, schools, churches, professional associations and institutions celebrate people,
                    recognise excellence and make important occasions memorable.
                </p>

                <p class="text-sm sm:text-base py-2 text-(--brass) font-montserrat max-w-3xl leading-relaxed">
                    Whether you need customised awards, thoughtful corporate gifts, a professionally organised ceremony
                    or a
                    complete event production partner, HONOURA delivers with creativity, precision and attention to
                    detail.
                </p>

                {{-- Primary Action Row --}}
                <div class="cta-row flex flex-wrap gap-3 mt-6">
                    <a class="btn focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#0B0F19]"
                       href="#quote">
                        Get my quote in 3 taps
                    </a>

                    <a class="btn ghost wa focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-[#0B0F19]"
                       href="https://wa.me/2348107157800" target="_blank" rel="noopener">
                        <x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>
                        Chat on WhatsApp
                    </a>
                </div>

                <p class="micro text-xs sm:text-sm text-white/70 mt-3">
                    Replies on WhatsApp the same day. No long forms, no waiting for email.
                </p>
            </section>

            {{-- 2. CORE SERVICES GRID --}}
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-14 text-white" aria-label="What Honoura does">
                {{-- Pillar 1: Awards --}}
                <article class="rounded-2xl bg-white/[0.03] border border-white/10 p-6 flex flex-col justify-between">
                    <div>
                        <p class="text-xs font-montserrat uppercase tracking-widest text-(--brass) font-semibold">01 /
                            Recognition</p>
                        <h2 class="text-lg sm:text-xl font-bold mt-1">AWARDS, TROPHIES &amp; PLAQUES</h2>
                        <p class="text-base sm:text-lg font-normal tracking-wide font-footlight text-white/95 mt-2">
                            Every achievement deserves meaningful recognition.
                        </p>
                        <p class="text-sm text-white/70 mt-2 leading-relaxed">
                            We design, customise and supply awards that celebrate excellence, honour contributions and
                            preserve important milestones.
                        </p>

                        <p class="mt-5 text-xs uppercase tracking-wider font-semibold text-white/60">Our offerings
                            include:</p>
                        <ul class="mt-2.5 space-y-2 text-sm text-white/85">
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Corporate achievement awards.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Employee recognition awards.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Leadership and excellence awards.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Long-service and retirement awards.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Academic and student achievement awards.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Sports trophies and medals.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Appreciation plaques and commemorative awards.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Custom-designed trophies in glass, crystal, metal, wood and acrylic.</span>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-6 pt-4 border-t border-white/10 text-sm sm:text-base font-normal tracking-wide font-footlight text-(--brass)">
                        From concept and design to engraving and delivery, we help you create awards worth keeping.
                    </p>
                </article>

                {{-- Pillar 2: Gifting --}}
                <article class="rounded-2xl bg-white/[0.03] border border-white/10 p-6 flex flex-col justify-between">
                    <div>
                        <p class="text-xs font-montserrat uppercase tracking-widest text-(--brass) font-semibold">02 /
                            Appreciation</p>
                        <h2 class="text-lg sm:text-xl font-bold mt-1">CORPORATE GIFTING &amp; APPRECIATION</h2>
                        <p class="text-base sm:text-lg font-normal tracking-wide font-footlight text-white/95 mt-2">
                            Make every gesture count.
                        </p>
                        <p class="text-sm text-white/70 mt-2 leading-relaxed">
                            HONOURA provides customised gifting solutions for organisations that want to appreciate
                            employees, reward clients, celebrate partnerships and strengthen professional relationships.
                        </p>

                        <p class="mt-5 text-xs uppercase tracking-wider font-semibold text-white/60">Our offerings
                            include:</p>
                        <ul class="mt-2.5 space-y-2 text-sm text-white/85">
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Executive and corporate gifts.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Employee appreciation packages.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Client and customer appreciation gifts.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Branded promotional merchandise.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Conference and event souvenirs.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Retirement and farewell gifts.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Festive and seasonal gift packages.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Customised gift boxes and hampers.</span>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-6 pt-4 border-t border-white/10 text-sm sm:text-base font-normal tracking-wide font-footlight text-(--brass)">
                        Whether you are celebrating one person or appreciating an entire workforce, we help you make the
                        gesture memorable.
                    </p>
                </article>

                {{-- Pillar 3: Events --}}
                <article class="rounded-2xl bg-white/[0.03] border border-white/10 p-6 flex flex-col justify-between">
                    <div>
                        <p class="text-xs font-montserrat uppercase tracking-widest text-(--brass) font-semibold">03 /
                            Execution</p>
                        <h2 class="text-lg sm:text-xl font-bold mt-1">EVENT PLANNING &amp; PRODUCTION</h2>
                        <p class="text-base sm:text-lg font-normal tracking-wide font-footlight text-white/95 mt-2">
                            We bring occasions to life.
                        </p>
                        <p class="text-sm text-white/70 mt-2 leading-relaxed">
                            From initial planning to final execution, HONOURA provides event planning, coordination and
                            production services for organisations that want their events professionally delivered.
                        </p>

                        <p class="mt-5 text-xs uppercase tracking-wider font-semibold text-white/60">Our event services
                            include:</p>
                        <ul class="mt-2.5 space-y-2 text-sm text-white/85">
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Corporate award nights and recognition ceremonies.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Annual dinners and corporate galas.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Conferences, summits and conventions.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>School award ceremonies and graduation events.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Institutional celebrations and anniversaries.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Church anniversaries and appreciation ceremonies.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Product launches and special corporate occasions.</span>
                            </li>
                            <li class="flex items-start gap-2"><span class="text-(--brass) font-bold">*</span><span>Staff appreciation and end-of-year celebrations.</span>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-6 pt-4 border-t border-white/10 text-sm sm:text-base font-normal tracking-wide font-footlight text-(--brass)">
                        We coordinate the details that make an event work—planning, logistics, venue arrangements, stage
                        design, lighting, backdrops, presentation areas and event-day execution.
                    </p>
                </article>
            </section>

            {{-- 3. WHY HONOURA SECTION (NEW) --}}
            <section class="mt-16 pt-12 border-t border-white/10" aria-labelledby="why-honoura-heading">
                <div class="max-w-2xl">
                    <p class="font-montserrat text-xs sm:text-sm uppercase tracking-widest text-(--brass) font-semibold">
                        Why Honoura?
                    </p>
                    <h2 id="why-honoura-heading" class="text-2xl sm:text-3xl font-bold font-footlight text-white mt-2">
                        More Than Awards. Complete Recognition Solutions.
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-8">
                    <div class="p-5 rounded-2xl bg-white/[0.04] border border-white/10">
                        <h3 class="text-base sm:text-lg font-bold text-(--brass)">Convenience</h3>
                        <p class="text-sm text-white/80 mt-2 leading-relaxed">
                            Access awards, corporate gifts and event services through one coordinating partner.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/[0.04] border border-white/10">
                        <h3 class="text-base sm:text-lg font-bold text-(--brass)">Customisation</h3>
                        <p class="text-sm text-white/80 mt-2 leading-relaxed">
                            Designs and solutions tailored to your organisation, occasion and brand identity.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/[0.04] border border-white/10">
                        <h3 class="text-base sm:text-lg font-bold text-(--brass)">Attention to Detail</h3>
                        <p class="text-sm text-white/80 mt-2 leading-relaxed">
                            From the wording on an award plaque to the final event presentation, we care about the
                            details.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/[0.04] border border-white/10">
                        <h3 class="text-base sm:text-lg font-bold text-(--brass)">Professional Coordination</h3>
                        <p class="text-sm text-white/80 mt-2 leading-relaxed">
                            We bring planning, logistics, production and execution together to deliver a cohesive
                            experience.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl bg-white/[0.04] border border-white/10 sm:col-span-2 lg:col-span-2">
                        <h3 class="text-base sm:text-lg font-bold text-(--brass)">Meaningful Experiences</h3>
                        <p class="text-sm text-white/80 mt-2 leading-relaxed">
                            We understand that recognition is not just about handing someone an award. It is about
                            making people feel valued.
                        </p>
                    </div>
                </div>
            </section>

            {{-- 4. HOW IT WORKS SECTION (NEW) --}}
            <section class="mt-16 pt-12 border-t border-white/10" aria-labelledby="how-it-works-heading">
                <div class="max-w-2xl">
                    <p class="font-montserrat text-xs sm:text-sm uppercase tracking-widest text-(--brass) font-semibold">
                        How It Works
                    </p>
                    <h2 id="how-it-works-heading" class="text-2xl sm:text-3xl font-bold font-footlight text-white mt-2">
                        From Your Idea to a Memorable Experience.
                    </h2>
                </div>

                <ol class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-8">
                    <li class="relative p-5 rounded-2xl bg-white/[0.03] border border-white/10">
                        <span
                            class="inline-block font-montserrat text-xs font-bold tracking-widest text-(--brass) bg-white/5 border border-white/10 px-2.5 py-1 rounded-md">
                            01
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-white mt-3">Tell Us What You Need</h3>
                        <p class="text-sm text-white/75 mt-2 leading-relaxed">
                            Contact us with your requirements, event details, award specifications or gifting needs.
                        </p>
                    </li>

                    <li class="relative p-5 rounded-2xl bg-white/[0.03] border border-white/10">
                        <span
                            class="inline-block font-montserrat text-xs font-bold tracking-widest text-(--brass) bg-white/5 border border-white/10 px-2.5 py-1 rounded-md">
                            02
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-white mt-3">Get a Tailored Proposal</h3>
                        <p class="text-sm text-white/75 mt-2 leading-relaxed">
                            We develop a solution based on your objectives, preferences, quantities and budget.
                        </p>
                    </li>

                    <li class="relative p-5 rounded-2xl bg-white/[0.03] border border-white/10">
                        <span
                            class="inline-block font-montserrat text-xs font-bold tracking-widest text-(--brass) bg-white/5 border border-white/10 px-2.5 py-1 rounded-md">
                            03
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-white mt-3">Approve the Design &amp; Plan</h3>
                        <p class="text-sm text-white/75 mt-2 leading-relaxed">
                            Review your proposed designs, event arrangements and deliverables before production begins.
                        </p>
                    </li>

                    <li class="relative p-5 rounded-2xl bg-white/[0.03] border border-white/10">
                        <span
                            class="inline-block font-montserrat text-xs font-bold tracking-widest text-(--brass) bg-white/5 border border-white/10 px-2.5 py-1 rounded-md">
                            04
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-white mt-3">We Bring It to Life</h3>
                        <p class="text-sm text-white/75 mt-2 leading-relaxed">
                            We handle the agreed production, coordination, delivery and event execution.
                        </p>
                    </li>
                </ol>
            </section>

            {{-- 5. INTERACTIVE QUOTE WIZARD SECTION --}}
            <section class="quote mt-16 shadow-2xl" id="quote" aria-labelledby="quote-heading">
                <div class="head flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-6">
                    <div>
                        <p class="eyebrow">Free Quote</p>
                        <h2 id="quote-heading" class="text-xl sm:text-2xl font-bold text-white mt-1">
                            Tell us about your event
                        </h2>
                    </div>
                    <p class="text-xs sm:text-sm text-white/70">
                        Three quick taps. Your answers go straight into a WhatsApp message to our team.
                    </p>
                </div>

                <div class="bar" aria-hidden="true">
                    <span></span><span></span><span></span><span></span>
                </div>

                <div id="step" aria-live="polite"></div>
            </section>

            {{-- 6. WHO WE SERVE SECTION --}}
            <section class="mt-14 p-6 sm:p-8 rounded-3xl bg-white text-slate-900 shadow-xl"
                     aria-labelledby="who-we-serve-heading">
                <p class="eyebrow text-amber-700 font-semibold uppercase tracking-wider text-xs">Who We Serve</p>

                <h2 id="who-we-serve-heading" class="text-xl sm:text-2xl font-bold mt-1.5 text-slate-900 max-w-3xl">
                    HONOURA works with organisations and institutions that value excellence, appreciation and meaningful
                    celebrations.
                </h2>

                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 mt-5 text-sm sm:text-base text-slate-800">
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>Corporate organisations and businesses.</span>
                    </li>
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>Banks and financial institutions.</span>
                    </li>
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>Hospitals and healthcare organisations.</span>
                    </li>
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>Schools, colleges and universities.</span>
                    </li>
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>Churches and religious organisations.</span>
                    </li>
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>Professional associations and industry bodies.</span>
                    </li>
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>NGOs and development organisations.</span>
                    </li>
                    <li class="flex items-start gap-2.5"><span class="text-amber-700 font-bold">*</span><span>Government and private institutions.</span>
                    </li>
                </ul>

                <p class="text-amber-800 font-medium text-sm mt-6 pt-4 border-t border-slate-200">
                    Whether you are recognising your employees, celebrating your institution or organising an
                    industry-wide awards event, HONOURA is ready to help.
                </p>
            </section>

            {{-- 7. BOOKING WINDOW / DEADLINE BANNER --}}
            <section
                class="deadline my-12 p-6 sm:p-8 rounded-3xl bg-white text-slate-900 shadow-xl grid grid-cols-1 md:grid-cols-[1fr_auto] gap-6 items-center"
                aria-labelledby="dlTitle">
                <div>
                    <p class="eyebrow text-amber-700 font-semibold uppercase tracking-wider text-xs" id="dlLabel">
                        Booking Window</p>
                    <h2 id="dlTitle" class="text-xl sm:text-2xl font-bold mt-1 text-slate-900">
                        Free design mockup for every booking confirmed this month
                    </h2>
                    <p class="text-sm text-slate-600 mt-2">
                        Message us before the window closes and we will sketch your trophy design at no cost, whether or
                        not you proceed.
                    </p>
                </div>

                <div class="cd flex gap-2.5 justify-start md:justify-end" role="timer"
                     aria-label="Time left in booking window">
                    <div class="bg-slate-100 p-3 rounded-xl min-w-17.5 text-center border border-slate-200">
                        <b id="d" class="text-xl sm:text-2xl font-bold text-slate-900">0</b>
                        <span
                            class="block text-[10px] tracking-wider uppercase text-slate-500 font-medium mt-0.5">Days</span>
                    </div>
                    <div class="bg-slate-100 p-3 rounded-xl min-w-17.5 text-center border border-slate-200">
                        <b id="h" class="text-xl sm:text-2xl font-bold text-slate-900">0</b>
                        <span
                            class="block text-[10px] tracking-wider uppercase text-slate-500 font-medium mt-0.5">Hrs</span>
                    </div>
                    <div class="bg-slate-100 p-3 rounded-xl min-w-17.5 text-center border border-slate-200">
                        <b id="m" class="text-xl sm:text-2xl font-bold text-slate-900">0</b>
                        <span
                            class="block text-[10px] tracking-wider uppercase text-slate-500 font-medium mt-0.5">Min</span>
                    </div>
                </div>
            </section>
        </div>

        {{-- Accessible Footer --}}
        <footer class="w-full text-center py-6 text-xs sm:text-sm text-white/60 border-t border-white/10 mt-auto">
            <p>&copy; <span id="yr">2026</span> Honoura. All rights reserved.</p>
        </footer>
    </main>

    {{-- Script Integration --}}
    <script src="{{ asset('js/funnel.js') }}"></script>
</x-layouts.default-layout>
