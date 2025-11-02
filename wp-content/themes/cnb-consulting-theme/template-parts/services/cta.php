<!-- CTA Section -->
<section class="py-16 lg:py-24 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="mt-16 rounded-3xl border border-white/10 bg-white/5 p-10 text-center text-white backdrop-blur relative overflow-hidden">
            <div class="absolute -top-12 -left-12 h-40 w-40 rounded-full bg-cnb-secondary/20 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 h-48 w-48 rounded-full bg-blue-200/20 blur-3xl"></div>

            <p class="relative inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-white/70 mb-6">
                <span class="h-2 w-2 rounded-full bg-cnb-secondary"></span>
                <?php _e('Let\'s team up', 'cnb-consulting-theme'); ?>
            </p>

            <h3 class="relative text-2xl font-semibold mb-4"><?php _e('Ready to get started?', 'cnb-consulting-theme'); ?></h3>
            <p class="relative text-white/70 mb-8 max-w-2xl mx-auto"><?php _e('Book a consultation and get a tailored roadmap for launching your US business in days, not months.', 'cnb-consulting-theme'); ?></p>
            <div class="relative flex flex-col sm:flex-row gap-4 justify-center">
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