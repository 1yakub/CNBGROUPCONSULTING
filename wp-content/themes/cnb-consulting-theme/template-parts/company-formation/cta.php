<?php
/**
 * CTA Section for Company Formation Page
 * 
 * @package CNB_Consulting_Theme
 */

// Get contact information once for use throughout the template
$contact_info = cnb_get_contact_info();
?>

<!-- Final CTA Section -->
<section id="contact" class="py-16 lg:py-20 bg-slate-950 text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-white/10 bg-gradient-to-br from-white/5 via-white/0 to-white/10 p-10 sm:p-12 text-center backdrop-blur">
            <p class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-white/70 mb-6">
                <span class="h-2 w-2 rounded-full bg-cnb-secondary"></span>
                <?php _e('Launch in days', 'cnb-consulting-theme'); ?>
            </p>

            <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-4">
                <?php _e('Ready to start your business?', 'cnb-consulting-theme'); ?>
            </h2>

            <p class="text-lg text-white/75 max-w-3xl mx-auto mb-10">
                <?php _e('Join hundreds of founders who trusted CNB Group for compliant formation, automated systems, and a revenue-ready launch plan.', 'cnb-consulting-theme'); ?>
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="<?php echo esc_url(cnb_get_cta_link('schedule')); ?>" class="inline-flex items-center justify-center px-10 py-4 rounded-full bg-cnb-secondary text-slate-950 text-lg font-semibold hover:bg-cnb-secondary/90 transition">
                    <?php _e('Book a strategy call', 'cnb-consulting-theme'); ?>
                </a>
                <a href="mailto:<?php echo esc_attr($contact_info['email']); ?>" class="inline-flex items-center justify-center px-10 py-4 rounded-full border border-white/30 text-white text-lg font-semibold hover:border-white/60 transition">
                    <?php echo esc_html($contact_info['email']); ?>
                </a>
            </div>

            <div class="grid gap-4 sm:grid-cols-3 text-left">
                <div class="rounded-2xl bg-white/5 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/50 mb-2"><?php _e('Turnaround', 'cnb-consulting-theme'); ?></p>
                    <p class="text-xl font-semibold text-white"><?php _e('24-hour filing window', 'cnb-consulting-theme'); ?></p>
                </div>
                <div class="rounded-2xl bg-white/5 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/50 mb-2"><?php _e('Support', 'cnb-consulting-theme'); ?></p>
                    <p class="text-xl font-semibold text-white"><?php _e('Dedicated launch team', 'cnb-consulting-theme'); ?></p>
                </div>
                <div class="rounded-2xl bg-white/5 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/50 mb-2"><?php _e('Guarantee', 'cnb-consulting-theme'); ?></p>
                    <p class="text-xl font-semibold text-white"><?php _e('Compliant from day one', 'cnb-consulting-theme'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>