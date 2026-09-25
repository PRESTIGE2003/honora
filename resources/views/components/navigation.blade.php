<nav class="sticky top-0 z-50 border-b border-(--line) bg-(--white)/90 backdrop-blur transition-all">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
            <a href="#" class="flex items-center gap-2">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-linear-to-br from-(--purple) via-(--crimson) to-(--gold) font-display text-sm font-bold text-white">H</span>
                <span class="font-display text-xl font-bold tracking-tight text-(--purple-950)">Ho<span class="text-(--crimson)">nora</span></span>
            </a>

            {{-- Desktop --}}
            <div class="hidden items-center gap-8 md:flex">
                <a href="#services" class="text-sm font-semibold text-(--ink-soft) transition hover:text-(--crimson)">Services</a>
                <a href="#process" class="text-sm font-semibold text-(--ink-soft) transition hover:text-(--crimson)">Process</a>
                <a href="#portfolio" class="text-sm font-semibold text-(--ink-soft) transition hover:text-(--crimson)">Portfolio</a>
                <a href="#testimonials" class="text-sm font-semibold text-(--ink-soft) transition hover:text-(--crimson)">Testimonials</a>
                <a href="#contact" class="rounded-full bg-(--purple-950) px-5 py-2.5 text-sm font-bold text-white transition hover:bg-(--crimson)">Book a Consultation</a>
            </div>

            <button id="menu-btn" type="button" class="flex h-10 w-10 items-center justify-center rounded-lg border border-(--line) text-(--purple-950) md:hidden" aria-label="Toggle menu">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </div>

        {{-- Mobile --}}
        <div id="mobile-menu" class="h-screen flex-col space-y-3 border-t border-(--line) bg-(--white) px-6 py-10 md:hidden">
            <a href="#services" class="mobileLink last:mt-4 block rounded-lg px-3 py-2 text-sm font-semibold text-(--ink-soft) hover:bg-(--warm-white)">Services</a>
            <a href="#process" class="mobileLink last:mt-4 block rounded-lg px-3 py-2 text-sm font-semibold text-(--ink-soft) hover:bg-(--warm-white)">Process</a>
            <a href="#portfolio" class="mobileLink last:mt-4 block rounded-lg px-3 py-2 text-sm font-semibold text-(--ink-soft) hover:bg-(--warm-white)">Portfolio</a>
            <a href="#testimonials" class="mobileLink last:mt-4 block rounded-lg px-3 py-2 text-sm font-semibold text-(--ink-soft) hover:bg-(--warm-white)">Testimonials</a>
            <a href="#contact" class="mobileLink last:mt-4 block mt-2 rounded-full bg-(--purple-950) px-3 py-2 text-center text-sm font-bold text-white">Book a Consultation</a>
        </div>
    </nav>