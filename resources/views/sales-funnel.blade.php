<x-layouts.default-layout>
    <div class="funnel-background relative font-instrument-sans">
        <title>Honoura Awards Funnel</title>

        <header class="flex items-center justify-between px-4 py-4">
            {{-- Logo --}}
            <x-application-logo/>

            {{-- CTA --}}
            <a href="https://wa.me/2340000000000" target="_blank" rel="noopener"
               class="rounded-full px-4 py-2 flex items-center gap-4 bg-[var(--brand)] text-[var(--brand-fg)]">
                <x-selfhst-whatsapp class="size-5"/>
                <span class="font-semibold">chat now</span>
            </a>
        </header>

        <div class="min-h-[90vh] px-2 pt-4">
            <section class="rounded-3xl w-full h-70 overflow-hidden aspect-video">
                <img alt="Corporate excellence award presentation"
                     src="{{ asset('images/corporate-excellence-award-presentation.png') }}"
                     class="w-full h-full object-cover">
            </section>

            <ul class="flex items-center gap-3 flex-wrap list-disc py-2 px-1 list-inside font-semibold font-montserrat text-sm uppercase text-[var(--brass)]">
                <li>Awards & Trophies</li>
                <li>Corporate events</li>
                <li>School or Institution events</li>
            </ul>

            <h2 class="text-3xl py-3 px-3 font-bold font-footlight text-white">
                From initial planning to event day, Honoura handles every detail to deliver a seamless client and guest
                experience.
            </h2>

            <p class="text-base py-3 px-3 font-montserrat text-white/50">
                Employee recognition, School party, Institution Events, Corporate Events, Award Events. From planning to
                logistics to Award Plaques, Honoura brings it all to life.
            </p>

            <div class="cta-row">
                <a class="btn" href="#quote">Get my quote in 3 taps</a>
                <a class="btn ghost wa" href="#" target="_blank" rel="noopener">Chat on WhatsApp</a>
            </div>

            <p class="micro">Reply on WhatsApp the same day. No forms, no waiting for email.</p>

            <section class="text-white mt-10" aria-label="What Honoura does">
                <div class="border-t border-white/20 p-4">
                    <h3 class="text-xl font-bold">Event / Program / Ceremony</h3>
                    <p class="text-white/50">Podium, backdrop, lighting cues and display tables arranged to match your
                        brand.</p>
                </div>

                <div class="border-t border-white/20 p-4">
                    <h3 class="text-xl font-bold">Trophies &amp; plaques</h3>
                    <p class="text-white/50">Custom-designed awards in glass, metal, wood and acrylic, engraved with
                        your winners' names.</p>
                </div>
            </section>

            <section class="quote mt-10" id="quote">
                <div class="head">
                    <div>
                        <p class="eyebrow">Free quote</p>
                        <h2 style="margin-top:8px">Tell us about your event</h2>
                    </div>
                    <p>Three quick taps. Your answers go straight into a WhatsApp message to our team.</p>
                </div>
                <div class="bar" aria-hidden="true"><span></span><span></span><span></span><span></span></div>
                <div id="step"></div>
            </section>

            <section class="deadline">
                <div>
                    <p class="eyebrow" id="dlLabel">Booking window</p>
                    <h2 id="dlTitle" style="margin-top:8px">Free design mockup for every booking confirmed this
                        month</h2>
                    <p>Message us before the window closes and we sketch your trophy design at no cost, whether or not
                        you go ahead.</p>
                </div>
                <div class="cd" role="timer" aria-label="Time left">
                    <div><b id="d">0</b><span>days</span></div>
                    <div><b id="h">0</b><span>hrs</span></div>
                    <div><b id="m">0</b><span>min</span></div>
                </div>
            </section>
        </div>
    </div>
</x-layouts.default-layout>
