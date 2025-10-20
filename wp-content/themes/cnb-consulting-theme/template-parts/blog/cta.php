<?php
/**
 * Blog CTA Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Call to Action Section for Blog/Archive Pages -->
<?php if (is_home() || is_archive()) : ?>
    <section class="py-14 sm:py-16 bg-slate-950 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-white/5 via-white/0 to-white/10 p-10 sm:p-12 text-center backdrop-blur">
                <p class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-1 text-[11px] font-semibold uppercase tracking-[0.3em] text-white/70 mb-5">
                    <span class="h-2 w-2 rounded-full bg-cnb-secondary"></span>
                    <?php _e('Launch insights', 'cnb-consulting-theme'); ?>
                </p>

                <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-4">
                    <?php _e('Ready to start your US business?', 'cnb-consulting-theme'); ?>
                </h2>

                <p class="text-lg text-white/75 max-w-3xl mx-auto mb-10">
                    <?php _e('Move from ideas to enrollment faster with CNB Group. Get a custom launch plan, systems, and support tailored to your growth stage.', 'cnb-consulting-theme'); ?>
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="inline-flex items-center justify-center px-10 py-4 rounded-full bg-cnb-secondary text-slate-950 text-base font-semibold hover:bg-cnb-secondary/90 transition">
                        <?php _e('View services', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center justify-center px-10 py-4 rounded-full border border-white/30 text-white text-base font-semibold hover:border-white/60 transition">
                        <?php _e('Book a free consultation', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>