<?php
/**
 * Contact Page Information Section
 * 
 * @package CNB_Consulting_Theme
 */

// Get contact information
$contact_info = cnb_get_contact_info();
?>

<!-- Contact Information -->
<div class="space-y-8">
    <div class="space-y-4">
        <h2 class="text-2xl md:text-3xl font-semibold text-slate-950"><?php _e('Get in touch', 'cnb-consulting-theme'); ?></h2>
        <p class="text-base text-slate-600 md:text-lg">
            <?php _e('Our specialists align your launch, compliance, and tax roadmap. Share your goals and we’ll craft a tailored approach before the call.', 'cnb-consulting-theme'); ?>
        </p>
    </div>

    <div class="space-y-4">
        <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-xl">📧</span>
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-slate-500"><?php _e('Email', 'cnb-consulting-theme'); ?></p>
                <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="text-base font-semibold text-slate-900 hover:text-cnb-primary">
                    <?php echo esc_html($contact_info['email']); ?>
                </a>
            </div>
        </div>

        <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-xl">💬</span>
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-slate-500"><?php _e('WhatsApp', 'cnb-consulting-theme'); ?></p>
                <a href="<?php echo esc_url(cnb_get_cta_link('whatsapp')); ?>" target="_blank" rel="noopener" class="text-base font-semibold text-slate-900 hover:text-cnb-primary">
                    <?php _e('Chat with us instantly', 'cnb-consulting-theme'); ?>
                </a>
            </div>
        </div>

        <div class="flex items-center gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-xl">📍</span>
            <div>
                <p class="text-xs uppercase tracking-[0.3em] text-slate-500"><?php _e('HQ', 'cnb-consulting-theme'); ?></p>
                <p class="text-base font-semibold text-slate-900">
                    <?php echo nl2br(esc_html($contact_info['address'])); ?>
                </p>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-[0_24px_60px_-45px_rgba(15,23,42,0.35)]">
        <div class="absolute -top-10 -right-6 h-24 w-24 rounded-full bg-cnb-secondary/15 blur-2xl"></div>
        <div class="relative space-y-2">
            <p class="text-xs uppercase tracking-[0.3em] text-slate-500"><?php _e('Guarantee', 'cnb-consulting-theme'); ?></p>
            <p class="text-base font-semibold text-slate-900"><?php _e('100% satisfaction or your fee refunded—no questions asked.', 'cnb-consulting-theme'); ?></p>
            <p class="text-sm text-slate-600"><?php _e('We document every milestone and keep you informed so you always know the status of filings, approvals, and next actions.', 'cnb-consulting-theme'); ?></p>
        </div>
    </div>
</div>