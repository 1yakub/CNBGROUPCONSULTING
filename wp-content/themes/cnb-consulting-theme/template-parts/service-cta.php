<?php
/**
 * Service CTA Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$primary_cta_text = get_post_meta(get_the_ID(), '_cnb_primary_cta_text', true) ?: 'Get Started Now';
$primary_cta_link = get_post_meta(get_the_ID(), '_cnb_primary_cta_link', true) ?: '#contact';
$secondary_cta_text = get_post_meta(get_the_ID(), '_cnb_secondary_cta_text', true) ?: 'Free Consultation';
$secondary_cta_link = get_post_meta(get_the_ID(), '_cnb_secondary_cta_link', true) ?: '#contact';
$contact_phone = get_post_meta(get_the_ID(), '_cnb_contact_phone', true);
$whatsapp_number = get_post_meta(get_the_ID(), '_cnb_whatsapp_number', true);

// Get company contact info from customizer as fallback
if (!$contact_phone) {
    $contact_phone = cnb_get_contact_info('phone');
}
if (!$whatsapp_number) {
    $whatsapp_number = cnb_get_contact_info('whatsapp');
}
?>

<section id="contact" class="bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-16">
            <div class="space-y-8">
                <div class="text-center lg:text-left">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Get Started?</h2>
                    <p class="text-xl text-blue-100 leading-relaxed mb-8">Join hundreds of satisfied clients who chose our <?php echo strtolower(get_the_title()); ?> service</p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="<?php echo esc_url($primary_cta_link); ?>" class="bg-cnb-secondary text-gray-900 px-8 py-4 rounded-lg text-lg font-bold hover:bg-yellow-400 transition transform hover:scale-105 text-center">
                        <?php echo esc_html($primary_cta_text); ?>
                    </a>
                    <a href="<?php echo esc_url($secondary_cta_link); ?>" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-bold hover:bg-opacity-20 transition text-center">
                        <?php echo esc_html($secondary_cta_text); ?>
                    </a>
                </div>
                
                <div class="mt-8 text-center lg:text-left">
                    <p class="text-blue-200 mb-4">Or contact us directly:</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <?php if ($contact_phone) : ?>
                            <a href="tel:<?php echo esc_attr($contact_phone); ?>" class="flex items-center justify-center space-x-3 bg-white bg-opacity-10 hover:bg-opacity-20 px-6 py-3 rounded-lg transition text-white no-underline">
                                <span class="text-xl">📞</span>
                                <span class="font-medium"><?php echo esc_html($contact_phone); ?></span>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($whatsapp_number) : ?>
                            <a href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', $whatsapp_number)); ?>" class="flex items-center justify-center space-x-3 bg-white bg-opacity-10 hover:bg-opacity-20 px-6 py-3 rounded-lg transition text-white no-underline" target="_blank">
                                <span class="text-xl">💬</span>
                                <span class="font-medium">WhatsApp</span>
                            </a>
                        <?php endif; ?>
                        
                        <a href="mailto:<?php echo esc_attr(cnb_get_contact_info('email')); ?>" class="flex items-center justify-center space-x-3 bg-white bg-opacity-10 hover:bg-opacity-20 px-6 py-3 rounded-lg transition text-white no-underline">
                            <span class="text-xl">✉️</span>
                            <span class="font-medium">Email Us</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="bg-white bg-opacity-10 rounded-lg p-8 border-l-4 border-cnb-secondary">
                <div class="text-center mb-6">
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-2xl font-bold mb-6">Our Guarantee</h3>
                </div>
                <ul class="space-y-3 text-blue-100">
                    <li class="flex items-center space-x-3">
                        <span class="text-green-400">✅</span>
                        <span>100% Money-Back Guarantee</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="text-green-400">✅</span>
                        <span>Expert Professional Service</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="text-green-400">✅</span>
                        <span>Fast Processing Times</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="text-green-400">✅</span>
                        <span>Dedicated Support Team</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 p-8 bg-white bg-opacity-10 rounded-lg">
            <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-cnb-secondary mb-2">500+</span>
                <span class="text-sm text-blue-200">Clients Served</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-cnb-secondary mb-2">99%</span>
                <span class="text-sm text-blue-200">Success Rate</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-cnb-secondary mb-2">4.9★</span>
                <span class="text-sm text-blue-200">Client Rating</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-cnb-secondary mb-2">24/7</span>
                <span class="text-sm text-blue-200">Support</span>
            </div>
        </div>
    </div>
</section>