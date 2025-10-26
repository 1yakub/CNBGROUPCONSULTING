<?php
$steps = array(
    array(
        'title' => 'Choose your service mix',
        'description' => 'Tell us where you are and what you need. We align the deliverables, timeline, and compliance checkpoints.',
        'cta' => 'Explore services'
    ),
    array(
        'title' => 'Strategy and onboarding call',
        'description' => 'Meet your concierge, confirm entity details, upload documents, and walk through your personalized launch plan.',
        'cta' => 'Schedule kickoff'
    ),
    array(
        'title' => 'Execution with live tracking',
        'description' => 'Filings, approvals, and IRS correspondence handled for you with real-time status, reminders, and document vault access.',
        'cta' => 'View live tracker'
    ),
    array(
        'title' => 'Ongoing compliance partnership',
        'description' => 'Stay supported with renewals, marketplace updates, and annual obligations managed by the same team.',
        'cta' => 'Book quarterly review'
    )
);
?>

<section class="relative bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 py-24 text-white" x-data="{ activeStep: 0 }">
    <div class="absolute inset-0">
        <div class="absolute left-1/2 top-10 h-72 w-72 -translate-x-1/2 rounded-full bg-cnb-secondary/20 blur-[180px]"></div>
        <div class="absolute right-12 bottom-0 h-80 w-80 rounded-full bg-cnb-primary/25 blur-[180px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-6 text-center">
            <p class="text-sm uppercase tracking-[0.35em] text-white/60">How it works</p>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold">A guided process built for speed and certainty</h2>
            <p class="mx-auto max-w-3xl text-base text-white/70">
                Every engagement follows a proven four-step roadmap. Hover or tap each stage to see how we keep your business moving forward.
            </p>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-[minmax(0,0.35fr)_minmax(0,1fr)] lg:gap-16">
            <div class="flex flex-col items-center justify-start gap-6">
                <?php foreach ($steps as $index => $step) : ?>
                    <button type="button"
                        @mouseenter="activeStep = <?php echo esc_js($index); ?>"
                        @focus="activeStep = <?php echo esc_js($index); ?>"
                        class="flex w-full items-center justify-between rounded-full border border-white/20 px-5 py-3 text-sm font-semibold transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-cnb-secondary/80"
                        :class="activeStep === <?php echo esc_js($index); ?> ? 'bg-white text-slate-900 shadow-[0_28px_60px_-40px_rgba(226,232,240,0.75)]' : 'bg-white/5 text-white/70 hover:bg-white/10'">
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
                            <p class="text-xs uppercase tracking-[0.3em] text-white/60">Step <?php echo esc_html($index + 1); ?></p>
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