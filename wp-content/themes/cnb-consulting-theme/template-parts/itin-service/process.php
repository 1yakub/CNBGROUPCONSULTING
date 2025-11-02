<?php
/**
 * ITIN Service Process Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section id="itin-process" class="relative bg-slate-950 py-20 lg:py-24 text-white" x-data="{ activeStep: 0 }">
    <div class="absolute inset-0">
        <div class="absolute left-1/2 top-10 h-72 w-72 -translate-x-1/2 rounded-full bg-cnb-secondary/25 blur-[180px]"></div>
        <div class="absolute right-10 bottom-0 h-80 w-80 rounded-full bg-cnb-primary/25 blur-[180px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-6 text-center">
            <p class="text-sm uppercase tracking-[0.35em] text-white/60">How it works</p>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold">ITIN approval in four concierge-led milestones</h2>
            <p class="mx-auto max-w-3xl text-base text-white/70">
                Every step is supervised by certified acceptance agents. Hover or tap to see what we deliver and the actions we guide you through.
            </p>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-[minmax(0,0.35fr)_minmax(0,1fr)] lg:gap-16">
            <div class="flex flex-col items-center justify-start gap-4">
                <?php
                $steps = array(
                    array(
                        'title' => __('Identity intake & eligibility', 'cnb-consulting-theme'),
                        'description' => __('Meet your ITIN concierge, review visa status, and secure a tailored checklist for identity and tax purpose documentation.', 'cnb-consulting-theme'),
                        'cta' => __('Complete secure intake', 'cnb-consulting-theme')
                    ),
                    array(
                        'title' => __('W-7 & tax package prep', 'cnb-consulting-theme'),
                        'description' => __('We assemble Form W-7, supporting tax returns, translations, and exception letters with IRS-ready formatting.', 'cnb-consulting-theme'),
                        'cta' => __('Approve filing package', 'cnb-consulting-theme')
                    ),
                    array(
                        'title' => __('Document authentication session', 'cnb-consulting-theme'),
                        'description' => __('Certified acceptance agents verify passports and identity documents so nothing is mailed or lost in transit.', 'cnb-consulting-theme'),
                        'cta' => __('Authenticate identity in person or remote', 'cnb-consulting-theme')
                    ),
                    array(
                        'title' => __('IRS submission & follow-through', 'cnb-consulting-theme'),
                        'description' => __('Your application enters the IRS queue with receipt confirmation, status monitoring, and delivery of your ITIN notice.', 'cnb-consulting-theme'),
                        'cta' => __('Receive ITIN activation kit', 'cnb-consulting-theme')
                    ),
                );
                ?>

                <?php foreach ($steps as $index => $step) : ?>
                    <button type="button"
                        class="flex w-full items-center justify-between rounded-full border border-white/20 px-5 py-3 text-sm font-semibold transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-cnb-secondary/80"
                        :class="activeStep === <?php echo esc_js($index); ?> ? 'bg-white text-slate-900 shadow-[0_28px_60px_-40px_rgba(226,232,240,0.85)]' : 'bg-white/5 text-white/70 hover:bg-white/10'"
                        @mouseenter="activeStep = <?php echo esc_js($index); ?>"
                        @focus="activeStep = <?php echo esc_js($index); ?>">
                        <span class="flex items-center gap-3">
                            <span class="flex h-8 w-8 items-center justify-center rounded-full border border-current text-xs font-semibold">
                                <?php echo esc_html($index + 1); ?>
                            </span>
                            <?php echo esc_html($step['title']); ?>
                        </span>
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="relative overflow-hidden rounded-[32px] border border-white/15 bg-white/5 p-10 backdrop-blur">
                <?php foreach ($steps as $index => $step) : ?>
                    <div x-show="activeStep === <?php echo esc_js($index); ?>" x-transition.opacity.duration.400ms>
                        <div class="flex items-center gap-4 text-white/70">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full bg-cnb-secondary/20 text-sm font-semibold text-cnb-secondary">
                                <?php echo esc_html($index + 1); ?>
                            </span>
                            <p class="text-xs uppercase tracking-[0.3em] text-white/60"><?php echo esc_html__('Milestone', 'cnb-consulting-theme'); ?> <?php echo esc_html($index + 1); ?></p>
                        </div>
                        <h3 class="mt-6 text-3xl font-semibold text-white">
                            <?php echo esc_html($step['title']); ?>
                        </h3>
                        <p class="mt-4 text-base text-white/70">
                            <?php echo esc_html($step['description']); ?>
                        </p>
                        <div class="mt-8 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-6 py-3 text-sm font-semibold text-white/80">
                            <span><?php echo esc_html($step['cta']); ?></span>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="pointer-events-none absolute inset-y-0 left-0 my-auto hidden h-40 w-40 -translate-x-1/2 rounded-full bg-cnb-secondary/15 blur-2xl lg:block"></div>
                <div class="pointer-events-none absolute inset-y-0 right-0 my-auto hidden h-40 w-40 translate-x-1/2 rounded-full bg-cnb-primary/20 blur-2xl lg:block"></div>
            </div>
        </div>
    </div>
</section>