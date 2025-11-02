<?php
/**
 * ITIN Service Hero Content Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="space-y-8">
    <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-white/70">
        ITIN specialists
    </span>

    <div class="space-y-4">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight">
            Secure your ITIN with certified acceptance agents.
        </h1>
        <p class="text-lg md:text-xl text-white/70 max-w-2xl">
            We manage every detail of the ITIN process—from ID authentication to IRS submission—so you can open bank accounts, invest, and stay compliant in the United States.
        </p>
    </div>

    <ul class="grid gap-4 sm:grid-cols-2" role="list">
        <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
            </span>
            <div>
                <p class="font-semibold">Certified acceptance agents</p>
                <p class="text-sm text-white/60">We verify identity in-house so you avoid mailing original documents to the IRS.</p>
            </div>
        </li>
        <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M3 3h7v7H3z"></path>
                    <path d="M14 3h7v7h-7z"></path>
                    <path d="M14 14h7v7h-7z"></path>
                    <path d="M3 14h7v7H3z"></path>
                </svg>
            </span>
            <div>
                <p class="font-semibold">Document preparation & translation</p>
                <p class="text-sm text-white/60">Passport, birth certificate, and tax return support with compliant translations.</p>
            </div>
        </li>
        <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M8 6h13"></path>
                    <path d="M8 12h13"></path>
                    <path d="M8 18h13"></path>
                    <path d="M3 6h.01"></path>
                    <path d="M3 12h.01"></path>
                    <path d="M3 18h.01"></path>
                </svg>
            </span>
            <div>
                <p class="font-semibold">IRS-ready filings</p>
                <p class="text-sm text-white/60">SS-4, W-7, and supporting tax returns prepared for immediate submission.</p>
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
                <p class="font-semibold">Global founder coverage</p>
                <p class="text-sm text-white/60">Remote intake for 40+ countries with bilingual support and local guidance.</p>
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
            <p class="text-2xl font-semibold text-white">2k+</p>
            <p class="text-xs uppercase tracking-[0.3em]">itin approvals</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
            <p class="text-2xl font-semibold text-white">6-8wk</p>
            <p class="text-xs uppercase tracking-[0.3em]">irs turnaround</p>
        </div>
        <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
            <p class="text-2xl font-semibold text-white">40</p>
            <p class="text-xs uppercase tracking-[0.3em]">countries served</p>
        </div>
    </div>
</div>