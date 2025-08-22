<!-- Packages Section -->
<section id="packages" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Walmart Seller Packages</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Complete solutions for Walmart Marketplace success</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <?php include get_template_directory() . '/template-parts/walmart-seller/package-cards/starter-package.php'; ?>
            <?php include get_template_directory() . '/template-parts/walmart-seller/package-cards/professional-package.php'; ?>
            <?php include get_template_directory() . '/template-parts/walmart-seller/package-cards/enterprise-package.php'; ?>
        </div>

        <?php include get_template_directory() . '/template-parts/walmart-seller/invitation-banner.php'; ?>
    </div>
</section>