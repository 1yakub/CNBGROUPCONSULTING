<?php
/**
 * Pricing Cards Component - EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
    <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/5 p-10">
        <div class="absolute -top-10 -left-10 h-32 w-32 rounded-full bg-white/10 blur-2xl"></div>
        <div class="relative space-y-6">
            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-blue-100">Do it yourself</span>
            <h3 class="text-2xl font-semibold">IRS submission on your own</h3>
            <p class="text-blue-100 text-sm leading-relaxed">Handle every detail independently using the IRS online or fax process.</p>
            <ul class="space-y-3 text-sm text-blue-100/90">
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-red-300">✕</span>
                    Interpret IRS terminology and complete SS-4 unaided
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-red-300">✕</span>
                    Wait on standard processing timelines with limited visibility
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-red-300">✕</span>
                    Resolve follow-up requests directly with IRS support queues
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-red-300">✕</span>
                    No strategic guidance on banking or compliance next steps
                </li>
            </ul>
            <a href="https://www.irs.gov/businesses/small-businesses-self-employed/apply-for-an-employer-identification-number-ein-online" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full border border-white/20 px-6 py-3 text-sm font-semibold text-blue-100 transition hover:bg-white/10">
                Visit IRS resources
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </div>

    <div class="relative overflow-hidden rounded-3xl border border-cnb-secondary/60 bg-white text-slate-950 p-10 shadow-xl">
        <div class="absolute -top-14 right-6 h-32 w-32 rounded-full bg-cnb-secondary/40 blur-2xl"></div>
        <div class="absolute top-6 left-6 flex items-center gap-2 rounded-full bg-cnb-secondary px-4 py-2 text-xs font-semibold uppercase tracking-widest text-slate-900">
            <span>Recommended</span>
        </div>
        <div class="relative pt-14 space-y-6">
            <h3 class="text-2xl font-semibold">Partner with CNB specialists</h3>
            <p class="text-sm text-slate-600 leading-relaxed">White-glove EIN filing with proactive compliance checks and real-time support.</p>
            <ul class="space-y-3 text-sm text-slate-700">
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-cnb-primary">✔</span>
                    Dedicated EIN strategist to prepare, review, and submit your SS-4
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-cnb-primary">✔</span>
                    Accelerated IRS processing with confirmation logs delivered to you
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-cnb-primary">✔</span>
                    Guidance on banking, payroll, and tax accounts right after approval
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 text-cnb-primary">✔</span>
                    Ongoing access to the team for compliance questions as you scale
                </li>
            </ul>
            <a href="<?php echo esc_url(cnb_get_cta_link('consultation')); ?>" class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-cnb-primary px-6 py-4 text-base font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:bg-blue-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-cnb-primary/60">
                Book a call with an EIN specialist
                <span aria-hidden="true">→</span>
            </a>
        </div>
    </div>
</div>