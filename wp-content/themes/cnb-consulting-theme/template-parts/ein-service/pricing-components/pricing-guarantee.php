<?php
/**
 * Pricing Guarantee Component - EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="mt-16">
    <div class="flex flex-col gap-6 rounded-3xl border border-white/15 bg-white/10 p-8 text-left shadow-lg sm:flex-row sm:items-center sm:justify-between">
        <div class="flex items-center gap-4 text-left">
            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cnb-secondary text-slate-900 text-3xl">🛡️</div>
            <div>
                <p class="text-base font-semibold">Your EIN is delivered with guidance, not just a document.</p>
                <p class="text-sm text-blue-100">We stay on the call until you know exactly what happens after approval.</p>
            </div>
        </div>
        <a href="<?php echo esc_url(cnb_get_cta_link('consultation')); ?>" class="inline-flex items-center justify-center gap-2 rounded-full border border-white/30 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
            Book a call →
        </a>
    </div>
</div>