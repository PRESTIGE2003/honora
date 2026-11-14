<x-layouts.default-layout>
    <main
        class="funnel-background relative font-instrument-sans min-h-screen text-slate-100 flex flex-col justify-between selection:bg-[var(--brand)] selection:text-white">
        <title>Honoura Awards Funnel</title>

        {{-- Accessible Header --}}
        <header class="w-full max-w-5xl mx-auto flex items-center justify-between px-4 sm:px-6 py-4">
            <x-application-logo aria-label="Honoura Home"/>
        </header>

        <a href="https://wa.me/2348107157800"
           target="_blank"
           rel="noopener"
           class="btn ghost wa fixed top-8 right-5 md:left-[70%] rounded-full w-fit px-5 py-2.5 flex whitespace-nowrap items-center gap-3 bg-(--brand) text-(--brand-fg) font-semibold shadow-md hover:opacity-95 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-navy-900 transition-all">
            <x-selfhst-whatsapp class="size-5 shrink-0" aria-hidden="true"/>
            <span>Chat Now</span>
        </a>

        {{-- Main Container --}}
        <div class="w-full max-w-4xl mx-auto px-4 sm:px-6 py-6 flex-1 flex flex-col justify-center">

            {{-- Hero Banner --}}
            <section
                class="rounded-3xl w-full h-64 sm:h-80 overflow-hidden shadow-xl bg-slate-800 border border-white/10 mb-6">
                <img alt="Corporate excellence award presentation setup by Honoura"
                     src="{{ asset('images/corporate-excellence-award-presentation.png') }}"
                     class="w-full h-full object-cover">
            </section>

            {{-- Categories List --}}
            <ul class="flex items-center gap-3 flex-wrap list-disc py-2 px-1 list-inside font-semibold font-montserrat text-xs sm:text-sm uppercase tracking-wider text-[var(--brass)]"
                aria-label="Event categories">
                <li>Awards &amp; Trophies</li>
                <li>Corporate Events</li>
                <li>School &amp; Institution Events</li>
            </ul>

            {{-- Value Proposition Heading --}}
            <h1 class="text-2xl sm:text-4xl py-3 font-bold font-footlight text-white leading-tight">
                From initial planning to event day, Honoura handles every detail to deliver a seamless client and guest
                experience.
            </h1>

            <p class="text-sm sm:text-base py-2 text-white/80 font-montserrat max-w-3xl leading-relaxed">
                Employee recognition, school galas, institution ceremonies, corporate events, and award nights. From
                planning and logistics to custom award plaques, Honoura brings everything to life.
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

            {{-- Features Grid --}}
            <section class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10 text-white" aria-label="What Honoura does">
                <div class="border-t border-white/20 pt-4">
                    <h3 class="text-lg sm:text-xl font-bold">Event, Program &amp; Ceremony</h3>
                    <p class="text-sm text-white/70 mt-1">Podium backdrops, stage lighting cues, and professional
                        display tables arranged to match your brand identity.</p>
                </div>

                <div class="border-t border-white/20 pt-4">
                    <h3 class="text-lg sm:text-xl font-bold">Trophies &amp; Plaques</h3>
                    <p class="text-sm text-white/70 mt-1">Custom-designed awards in glass, metal, wood, and acrylic,
                        precisely engraved with your winners' names.</p>
                </div>
            </section>

            {{-- Interactive Quote Wizard Section --}}
            <section class="quote mt-12 shadow-2xl" id="quote" aria-labelledby="quote-heading">
                <div class="head flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-6">
                    <div>
                        <p class="eyebrow">Free Quote</p>
                        <h2 id="quote-heading" class="text-xl sm:text-2xl font-bold text-white mt-1">Tell us about your
                            event</h2>
                    </div>
                    <p class="text-xs sm:text-sm text-white/70">Three quick taps. Your answers go straight into a
                        WhatsApp message to our team.</p>
                </div>

                <div class="bar" aria-hidden="true">
                    <span></span><span></span><span></span><span></span>
                </div>

                <div id="step" aria-live="polite"></div>
            </section>

            {{-- Booking Window / Deadline Banner --}}
            <section
                class="deadline my-12 p-6 sm:p-8 rounded-3xl bg-white text-slate-900 shadow-xl grid grid-cols-1 md:grid-cols-[1fr_auto] gap-6 items-center"
                aria-labelledby="dlTitle">
                <div>
                    <p class="eyebrow text-amber-700 font-semibold" id="dlLabel">Booking Window</p>
                    <h2 id="dlTitle" class="text-xl sm:text-2xl font-bold mt-1 text-slate-900">Free design mockup for
                        every booking confirmed this month</h2>
                    <p class="text-sm text-slate-600 mt-2">Message us before the window closes and we will sketch your
                        trophy design at no cost, whether or not you proceed.</p>
                </div>

                <div class="cd flex gap-2 justify-start md:justify-end" role="timer"
                     aria-label="Time left in booking window">
                    <div class="bg-slate-100 p-3 rounded-xl min-w-[70px] text-center border border-slate-200">
                        <b id="d" class="text-xl sm:text-2xl font-bold text-slate-900">0</b>
                        <span
                            class="block text-[10px] tracking-wider uppercase text-slate-500 font-medium mt-0.5">Days</span>
                    </div>
                    <div class="bg-slate-100 p-3 rounded-xl min-w-[70px] text-center border border-slate-200">
                        <b id="h" class="text-xl sm:text-2xl font-bold text-slate-900">0</b>
                        <span
                            class="block text-[10px] tracking-wider uppercase text-slate-500 font-medium mt-0.5">Hrs</span>
                    </div>
                    <div class="bg-slate-100 p-3 rounded-xl min-w-[70px] text-center border border-slate-200">
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
