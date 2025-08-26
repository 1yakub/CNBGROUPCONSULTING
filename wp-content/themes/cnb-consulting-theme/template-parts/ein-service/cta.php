<?php
/**
 * CTA Section for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */

// Get contact information
$contact_info = cnb_get_contact_info();
?>

<!-- CTA Section -->
<section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Get Your EIN Today</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Don't wait weeks for the IRS. Get your Federal Tax ID Number processed professionally in hours.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                Email Us
            </a>
            <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                Email: <?php echo esc_html($contact_info['email']); ?>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">⚡</div>
                <div class="font-semibold text-sm">Same Day Processing</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">🛡️</div>
                <div class="font-semibold text-sm">100% Guarantee</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">💰</div>
                <div class="font-semibold text-sm">Fixed $99 Fee</div>
            </div>
        </div>
    </div>
</section>

