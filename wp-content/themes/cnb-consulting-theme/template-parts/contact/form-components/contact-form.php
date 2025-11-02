<?php
/**
 * Contact Form Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="rounded-[40px] border border-slate-200 bg-white/90 p-10 sm:p-12 shadow-[0_36px_120px_-60px_rgba(15,23,42,0.45)]">
    <div class="grid gap-12 lg:grid-cols-[minmax(0,0.95fr)_minmax(0,1.05fr)] lg:items-start">
        <div class="space-y-10">
            <?php get_template_part('template-parts/contact/info'); ?>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-5">
                    <p class="text-xs uppercase tracking-[0.35em] text-slate-500 mb-2"><?php _e('Support hours', 'cnb-consulting-theme'); ?></p>
                    <p class="text-sm text-slate-600"><?php echo esc_html(cnb_get_contact_info()['business_hours']); ?></p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-white p-5">
                    <p class="text-xs uppercase tracking-[0.35em] text-slate-500 mb-2"><?php _e('Document vault', 'cnb-consulting-theme'); ?></p>
                    <p class="text-sm text-slate-600"><?php _e('Secure uploads for IDs, operating agreements, and filings ahead of your call.', 'cnb-consulting-theme'); ?></p>
                </div>
            </div>
        </div>

        <div class="rounded-[32px] border border-slate-200 bg-white p-8 shadow-[0_32px_90px_-55px_rgba(15,23,42,0.35)]">
            <h2 class="text-2xl md:text-3xl font-semibold text-slate-950 mb-6"><?php _e('Send us a message', 'cnb-consulting-theme'); ?></h2>
            <form id="contact-form" class="space-y-6" action="#" method="POST">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="mb-2 block text-sm font-semibold text-slate-600"><?php _e('First name *', 'cnb-consulting-theme'); ?></label>
                        <input type="text" id="first_name" name="first_name" required
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30">
                    </div>
                    <div>
                        <label for="last_name" class="mb-2 block text-sm font-semibold text-slate-600"><?php _e('Last name *', 'cnb-consulting-theme'); ?></label>
                        <input type="text" id="last_name" name="last_name" required
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30">
                    </div>
                </div>

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-600"><?php _e('Email address *', 'cnb-consulting-theme'); ?></label>
                    <input type="email" id="email" name="email" required
                        class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30">
                </div>

                <div>
                    <label for="phone" class="mb-2 block text-sm font-semibold text-slate-600"><?php _e('Phone number', 'cnb-consulting-theme'); ?></label>
                    <input type="tel" id="phone" name="phone"
                        class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="business_type" class="mb-2 block text-sm font-semibold text-slate-600"><?php _e('Business type', 'cnb-consulting-theme'); ?></label>
                        <select id="business_type" name="business_type"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30">
                            <option value=""><?php _e('Select business type', 'cnb-consulting-theme'); ?></option>
                            <option value="llc"><?php _e('LLC formation', 'cnb-consulting-theme'); ?></option>
                            <option value="corporation"><?php _e('Corporation formation', 'cnb-consulting-theme'); ?></option>
                            <option value="partnership"><?php _e('Partnership formation', 'cnb-consulting-theme'); ?></option>
                            <option value="existing"><?php _e('Existing business services', 'cnb-consulting-theme'); ?></option>
                            <option value="other"><?php _e('Other', 'cnb-consulting-theme'); ?></option>
                        </select>
                    </div>
                    <div>
                        <label for="service_interest" class="mb-2 block text-sm font-semibold text-slate-600"><?php _e('Service interest', 'cnb-consulting-theme'); ?></label>
                        <select id="service_interest" name="service_interest"
                            class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30">
                            <option value=""><?php _e('Select service', 'cnb-consulting-theme'); ?></option>
                            <option value="business-formation"><?php _e('Business formation', 'cnb-consulting-theme'); ?></option>
                            <option value="registered-agent"><?php _e('Registered agent', 'cnb-consulting-theme'); ?></option>
                            <option value="ein-number"><?php _e('EIN number', 'cnb-consulting-theme'); ?></option>
                            <option value="consultation"><?php _e('Consultation', 'cnb-consulting-theme'); ?></option>
                            <option value="other"><?php _e('Other', 'cnb-consulting-theme'); ?></option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="message" class="mb-2 block text-sm font-semibold text-slate-600"><?php _e('Message *', 'cnb-consulting-theme'); ?></label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30"
                        placeholder="<?php echo esc_attr__('Tell us about your business goals and how we can help...', 'cnb-consulting-theme'); ?>"></textarea>
                </div>

                <div class="flex items-start gap-3">
                    <input type="checkbox" id="privacy_agree" name="privacy_agree" required
                        class="mt-1 h-4 w-4 rounded border-slate-300 text-cnb-primary focus:ring-cnb-primary">
                    <label for="privacy_agree" class="text-sm text-slate-600">
                        <?php _e('I consent to being contacted about CNB Group Consulting services. *', 'cnb-consulting-theme'); ?>
                    </label>
                </div>

                <button type="submit"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-slate-900 px-8 py-4 text-base font-semibold text-white transition hover:bg-slate-800">
                    <span><?php _e('Send message', 'cnb-consulting-theme'); ?></span>
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>