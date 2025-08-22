<?php
/**
 * Pricing Section for Company Formation Page
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Pricing Section -->
<section id="pricing" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Choose Your Formation Package</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to start your business, at transparent pricing</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <?php include get_template_directory() . '/template-parts/company-formation/pricing-cards/basic-package.php'; ?>
            <?php include get_template_directory() . '/template-parts/company-formation/pricing-cards/complete-package.php'; ?>
            <?php include get_template_directory() . '/template-parts/company-formation/pricing-cards/premium-package.php'; ?>
        </div>

        <?php include get_template_directory() . '/template-parts/company-formation/pricing-guarantee-banner.php'; ?>
    </div>
</section>