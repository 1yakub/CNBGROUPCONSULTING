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
    <div>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Get In Touch</h2>
        <p class="text-lg text-gray-600 leading-relaxed">
            Ready to start your business or need help with existing compliance? Our expert team is here to provide personalized guidance and professional service.
        </p>
    </div>

    <!-- Contact Methods -->
    <div class="space-y-6">
        <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-white text-xl">📧</span>
            </div>
            <div>
                <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                <p class="text-gray-600">Send us a message for immediate assistance</p>
                <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="text-cnb-primary font-semibold hover:underline">
                    <?php echo esc_html($contact_info['email']); ?>
                </a>
            </div>
        </div>

        <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-white text-xl">📍</span>
            </div>
            <div>
                <h3 class="font-semibold text-gray-900 mb-1">Address</h3>
                <p class="text-gray-600">Visit us at our office</p>
                <p class="text-cnb-primary font-semibold">
                    <?php echo nl2br(esc_html($contact_info['address'])); ?>
                </p>
            </div>
        </div>

        <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-white text-xl">💬</span>
            </div>
            <div>
                <h3 class="font-semibold text-gray-900 mb-1">WhatsApp</h3>
                <p class="text-gray-600">Quick questions and support</p>
                <a href="<?php echo esc_url(cnb_get_cta_link('whatsapp')); ?>" class="text-cnb-primary font-semibold hover:underline" target="_blank">
                    Chat with us on WhatsApp
                </a>
            </div>
        </div>

        <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                <span class="text-white text-xl">🕒</span>
            </div>
            <div>
                <h3 class="font-semibold text-gray-900 mb-1">Business Hours</h3>
                <div class="text-gray-600 space-y-1">
                    <p><?php echo esc_html($contact_info['business_hours']); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Guarantee Badge -->
    <div class="bg-gradient-to-r from-cnb-secondary to-yellow-400 rounded-lg p-6 text-center">
        <div class="text-4xl mb-4">🛡️</div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">100% Satisfaction Guarantee</h3>
        <p class="text-gray-700">
            We stand behind our work with a complete money-back guarantee. Your success is our commitment.
        </p>
    </div>
</div>