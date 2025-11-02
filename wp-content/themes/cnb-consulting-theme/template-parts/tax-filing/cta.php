<?php
/**
 * Tax Filing Service - CTA Section
 * 
 * @package CNB_Consulting_Theme
 */

// Get contact information
$contact_info = cnb_get_contact_info();
?>

<!-- CTA Section -->
<section id="contact" class="py-16 lg:py-20 bg-slate-950 text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-white/5 via-white/0 to-white/10 p-10 sm:p-12 text-center backdrop-blur">
            <div class="absolute -top-12 -left-12 h-40 w-40 rounded-full bg-cnb-secondary/20 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 h-48 w-48 rounded-full bg-blue-200/20 blur-3xl"></div>

            <p class="relative inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-white/70 mb-6">
                <span class="h-2 w-2 rounded-full bg-cnb-secondary"></span>
                <?php _e('Tax season handled', 'cnb-consulting-theme'); ?>
            </p>

            <h2 class="relative text-3xl md:text-4xl font-bold leading-tight mb-4">
                <?php _e('Book a tax strategy session with our CPA pod', 'cnb-consulting-theme'); ?>
            </h2>

            <p class="relative text-lg text-white/75 max-w-3xl mx-auto mb-10">
                <?php _e('Align on your entities, deadlines, and planning opportunities in one call. We will outline an exact preparation timeline and onboarding checklist.', 'cnb-consulting-theme'); ?>
            </p>

            <div class="relative flex flex-col sm:flex-row gap-4 justify-center mb-10">
                <a href="<?php echo esc_url(cnb_get_cta_link('schedule')); ?>" class="inline-flex items-center justify-center px-10 py-4 rounded-full bg-cnb-secondary text-slate-950 text-lg font-semibold hover:bg-cnb-secondary/90 transition">
                    <?php _e('Book a call', 'cnb-consulting-theme'); ?>
                </a>
            </div>

            <p class="relative text-sm text-white/60 mb-12">
                <?php printf(
                    /* translators: %s: contact email */
                    esc_html__('Prefer email first? Send your latest return to %s and we will pair you with a specialist in under one business day.', 'cnb-consulting-theme'),
                    '<span class="text-white">' . esc_html($contact_info['email']) . '</span>'
                ); ?>
            </p>

            <div class="relative grid gap-4 sm:grid-cols-3 text-left">
                <div class="rounded-2xl bg-white/5 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/50 mb-2"><?php _e('Team', 'cnb-consulting-theme'); ?></p>
                    <p class="text-xl font-semibold text-white"><?php _e('CPAs, EAs & tax attorneys', 'cnb-consulting-theme'); ?></p>
                </div>
                <div class="rounded-2xl bg-white/5 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/50 mb-2"><?php _e('Visibility', 'cnb-consulting-theme'); ?></p>
                    <p class="text-xl font-semibold text-white"><?php _e('Secure dashboard & timeline', 'cnb-consulting-theme'); ?></p>
                </div>
                <div class="rounded-2xl bg-white/5 p-5">
                    <p class="text-sm uppercase tracking-[0.3em] text-white/50 mb-2"><?php _e('Coverage', 'cnb-consulting-theme'); ?></p>
                    <p class="text-xl font-semibold text-white"><?php _e('Federal, state, & quarterly filings', 'cnb-consulting-theme'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>