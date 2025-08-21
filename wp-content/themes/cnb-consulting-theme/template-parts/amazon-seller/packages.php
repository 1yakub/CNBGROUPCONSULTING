<?php
/**
 * Amazon Seller Service - Packages Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Packages Section -->
<section id="packages" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Amazon Seller Packages</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Choose your complete solution for Amazon FBA success</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <?php
            // Load package card components
            require_once get_template_directory() . '/template-parts/amazon-seller/package-cards/starter-package.php';
            require_once get_template_directory() . '/template-parts/amazon-seller/package-cards/growth-package.php';
            require_once get_template_directory() . '/template-parts/amazon-seller/package-cards/premium-package.php';
            ?>
        </div>

        <?php
        // Load launch banner component
        require_once get_template_directory() . '/template-parts/amazon-seller/package-launch-banner.php';
        ?>
    </div>
</section>