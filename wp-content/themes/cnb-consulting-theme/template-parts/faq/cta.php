<?php
/**
 * FAQ CTA Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Still Have Questions?</h2>
        <p class="text-xl text-gray-600 mb-8">
            Our business experts are here to help with personalized answers and recommendations.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(cnb_get_cta_link('contact-us')); ?>" class="bg-cnb-primary hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                Contact Us Today
            </a>
            <a href="mailto:cnbgroupconsultingllc@gmail.com" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                Email Us
            </a>
        </div>
    </div>
</section>