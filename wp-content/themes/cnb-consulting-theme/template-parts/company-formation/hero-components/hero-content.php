<?php
/**
 * Company Formation - Hero Content Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="space-y-8">
    <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-white/70">
        Formation specialists
    </span>

    <div class="space-y-4">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight">
            Start your U.S. company with a dedicated launch team.
        </h1>
        <p class="text-lg md:text-xl text-white/70 max-w-2xl">
            We orchestrate filings, EIN, registered agent, and operating agreements in one guided workflow so your business is compliant from day one.
        </p>
    </div>

    <ul class="grid gap-4 sm:grid-cols-2" role="list">
        <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </span>
            <div>
                <p class="font-semibold">State filings in 24 hours</p>
                <p class="text-sm text-white/60">Expedited entity formation with live status tracking.</p>
            </div>
        </li>
        <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0z"></path>
                    <path d="M12 2v2"></path>
                    <path d="M12 20v2"></path>
                    <path d="M4.93 4.93l1.41 1.41"></path>
                    <path d="M17.66 17.66l1.41 1.41"></path>
                    <path d="M2 12h2"></path>
                    <path d="M20 12h2"></path>
                    <path d="M6.34 17.66l-1.41 1.41"></path>
                    <path d="M19.07 4.93l-1.41 1.41"></path>
                </svg>
            </span>
            <div>
                <p class="font-semibold">IRS EIN handled for you</p>
                <p class="text-sm text-white/60">Certified specialists manage IRS correspondence end-to-end.</p>
            </div>
        </li>
        <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
            </span>
            <div>
                <p class="font-semibold">Compliance without guesswork</p>
                <p class="text-sm text-white/60">Registered agent, operating agreement, and timelines delivered.</p>
            </div>
        </li>
        <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M10 7h4"></path>
                    <path d="M12 5v4"></path>
                    <rect x="3" y="3" width="7" height="7" rx="2"></rect>
                    <rect x="14" y="3" width="7" height="7" rx="2"></rect>
                    <rect x="14" y="14" width="7" height="7" rx="2"></rect>
                    <rect x="3" y="14" width="7" height="7" rx="2"></rect>
                </svg>
            </span>
            <div>
                <p class="font-semibold">Tailored entity structure</p>
                <p class="text-sm text-white/60">LLC, C Corp, or S Corp formed around your ownership goals.</p>
            </div>
        </li>
    </ul>

    <div class="flex flex-wrap gap-4">
        <a href="<?php echo esc_url(cnb_get_cta_link('schedule')); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center rounded-full bg-cnb-secondary px-8 py-4 text-base font-semibold text-slate-950 shadow-lg shadow-cnb-secondary/40 transition hover:bg-cnb-secondary/90 hover:shadow-xl hover:shadow-cnb-secondary/30">
            Book a call
        </a>
    </div>

    <div class="grid gap-4 sm:grid-cols-3 text-white/65">
        <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
            <p class="text-2xl font-semibold text-white">24h</p>
            <p class="text-xs uppercase tracking-[0.3em]">filing window</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
            <p class="text-2xl font-semibold text-white">50</p>
            <p class="text-xs uppercase tracking-[0.3em]">states covered</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
            <p class="text-2xl font-semibold text-white">500+</p>
            <p class="text-xs uppercase tracking-[0.3em]">founders launched</p>
        </div>
    </div>
</div>