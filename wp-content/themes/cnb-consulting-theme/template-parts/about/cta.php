<?php
/**
 * About Page CTA Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Ready to Start Your Business?</h2>
        <p class="text-xl text-gray-600 mb-8">
            Join hundreds of successful entrepreneurs who chose CNB Group Consulting for their business formation needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(cnb_get_cta_link('get-started')); ?>" class="bg-cnb-primary hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                Get Started Today
            </a>
            <a href="<?php echo esc_url(cnb_get_cta_link('view-services')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                View Our Services
            </a>
        </div>
    </div>
</section>