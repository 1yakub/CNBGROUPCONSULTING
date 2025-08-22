<!-- Pricing Section -->
<section id="pricing" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">E-commerce Registration Packages</h2>
            <p class="text-xl text-gray-600">Complete setup solutions for every business size</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php include get_template_directory() . '/template-parts/ecommerce-registration/pricing-cards/starter-package.php'; ?>
            <?php include get_template_directory() . '/template-parts/ecommerce-registration/pricing-cards/professional-package.php'; ?>
            <?php include get_template_directory() . '/template-parts/ecommerce-registration/pricing-cards/enterprise-package.php'; ?>
        </div>

        <?php include get_template_directory() . '/template-parts/ecommerce-registration/ready-banner.php'; ?>
    </div>
</section>