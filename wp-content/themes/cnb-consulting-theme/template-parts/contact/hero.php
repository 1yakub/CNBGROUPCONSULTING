<?php
/**
 * Contact Page Hero Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Contact Hero -->
<section class="relative overflow-hidden bg-slate-950 py-20 lg:py-28 text-white">
    <div class="absolute inset-0">
        <div class="absolute -top-24 -left-16 h-72 w-72 rounded-full bg-cnb-secondary/25 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-cnb-primary/25 blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(148,163,184,0.18),_transparent_65%)]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,0.95fr)]">
            <div class="space-y-9">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-white/70">
                    Talk with our operator pod
                </span>
                <div class="space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight">
                        Align your compliance, tax, and launch strategy in one call.
                    </h1>
                    <p class="text-lg md:text-xl text-white/70 max-w-2xl">
                        Schedule a consultation to review your roadmap, document checklist, and go-live milestones. We tailor every engagement around your state, market, and business model.
                    </p>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url(cnb_get_cta_link('schedule')); ?>" class="inline-flex items-center justify-center rounded-full bg-cnb-secondary px-8 py-4 text-base font-semibold text-slate-950 shadow-lg shadow-cnb-secondary/40 transition hover:bg-cnb-secondary/90 hover:shadow-xl hover:shadow-cnb-secondary/30">
                        <?php _e('Book a call', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php echo esc_url(cnb_get_cta_link('whatsapp')); ?>" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/5 px-8 py-4 text-base font-semibold text-white/80 transition hover:border-white/40 hover:bg-white/10">
                        <?php _e('Chat on WhatsApp', 'cnb-consulting-theme'); ?>
                    </a>
                </div>

                <div class="grid gap-4 sm:grid-cols-3 text-white/65">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
                        <p class="text-2xl font-semibold text-white">24h</p>
                        <p class="text-xs uppercase tracking-[0.3em]">intake turnaround</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
                        <p class="text-2xl font-semibold text-white">50</p>
                        <p class="text-xs uppercase tracking-[0.3em]">states supported</p>
                    </div>
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
                        <p class="text-2xl font-semibold text-white">365</p>
                        <p class="text-xs uppercase tracking-[0.3em]">day support</p>
                    </div>
                </div>
            </div>

            <div class="relative" aria-hidden="true">
                <div class="absolute -top-8 -left-10 hidden h-24 w-24 rounded-full bg-cnb-secondary/20 blur-2xl lg:block"></div>
                <div class="absolute -bottom-10 -right-12 hidden h-40 w-40 rounded-full bg-cnb-primary/25 blur-3xl lg:block"></div>

                <div class="relative mx-auto w-full max-w-md">
                    <div class="relative rounded-3xl bg-white/5 p-4 backdrop-blur shadow-[0_32px_90px_-45px_rgba(15,23,42,0.85)]">
                        <div class="grid gap-4">
                            <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/tax-preparation.jpg" alt="CNB support specialist on a client call" class="h-56 w-full object-cover" loading="lazy" />
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/resale-certificate.jpg" alt="Clients collaborating with CNB advisor" class="h-32 w-full object-cover" loading="lazy" />
                                </div>
                                <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/business-incorporation.jpg" alt="Compliance documents review" class="h-32 w-full object-cover" loading="lazy" />
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 left-1/2 hidden w-72 -translate-x-1/2 rounded-3xl border border-white/10 bg-slate-900/85 p-5 shadow-lg shadow-black/30 backdrop-blur lg:block" x-data="{ highlights: ['Single intake covers formation, tax, and marketplace tracks', 'You receive a battle-tested roadmap for your next 90 days', 'Dedicated pod lead coordinates every filing and vendor approval'], active: 0 }" x-init="setInterval(() => { active = (active + 1) % highlights.length }, 4200)">
                            <div class="flex items-start gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>
                                <p class="text-sm font-semibold text-white" x-text="highlights[active]"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>