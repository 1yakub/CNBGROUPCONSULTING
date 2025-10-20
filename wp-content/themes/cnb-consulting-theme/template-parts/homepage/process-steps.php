<?php
/**
 * Process Steps Template Part
 * 
 * Displays the 4-step business formation process
 * 
 * @package CNB_Consulting_Theme
 */

$process_steps = cnb_get_process_steps();
?>

<section class="py-16 lg:py-24 bg-slate-950">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="text-center max-w-3xl mx-auto mb-16 text-white">
            <p class="text-sm uppercase tracking-[0.35em] text-white/50 mb-4">
                <?php _e('Our Process', 'cnb-consulting-theme'); ?>
            </p>
            <h2 class="text-3xl md:text-4xl font-bold">
                <?php _e('How We Work', 'cnb-consulting-theme'); ?>
            </h2>
        </header>

        <div class="relative">
            <div class="absolute inset-0 hidden lg:block">
                <div class="flex h-full items-center justify-between px-6">
                    <?php for ($i = 0; $i < count($process_steps) - 1; $i++) : ?>
                        <div class="h-[2px] flex-1 bg-gradient-to-r from-white/20 to-white/5 mx-4"></div>
                    <?php endfor; ?>
                </div>
            </div>

            <div class="flex flex-col gap-6 md:gap-8 lg:flex-row lg:items-start lg:justify-between">
                <?php foreach ($process_steps as $step) : ?>
                    <article class="relative flex-1 bg-white/5 border border-white/10 rounded-3xl backdrop-blur-sm text-white p-8">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="h-12 w-12 rounded-full bg-cnb-secondary text-slate-950 font-semibold flex items-center justify-center">
                                <?php echo esc_html($step['number']); ?>
                            </div>
                            <h3 class="text-xl font-semibold">
                                <?php echo esc_html($step['title']); ?>
                            </h3>
                        </div>

                        <p class="text-white/70 leading-relaxed">
                            <?php echo esc_html($step['description']); ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-16 rounded-3xl border border-white/10 bg-white/5 p-10 text-center text-white backdrop-blur">
            <h3 class="text-2xl font-semibold mb-4"><?php _e('Ready to get started?', 'cnb-consulting-theme'); ?></h3>
            <p class="text-white/70 mb-8 max-w-2xl mx-auto"><?php _e('Book a consultation and get a tailored roadmap for launching your US business in days, not months.', 'cnb-consulting-theme'); ?></p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(cnb_get_cta_link('schedule')); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center px-10 py-4 rounded-full bg-cnb-secondary text-slate-950 text-lg font-semibold hover:bg-cnb-secondary/90 transition">
                    <?php _e('Schedule free consultation', 'cnb-consulting-theme'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center justify-center px-10 py-4 rounded-full border border-white/30 text-white text-lg font-semibold hover:border-white/60 transition">
                    <?php _e('View all services', 'cnb-consulting-theme'); ?>
                </a>
            </div>
        </div>

    </div>
</section>