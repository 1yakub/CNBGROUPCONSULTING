<?php
/**
 * Registered Agent Pricing Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pricing Section -->
<section id="pricing" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple, Transparent Pricing</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Professional registered agent service at an affordable annual rate</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <?php get_template_part('template-parts/registered-agent/pricing-cards/basic-service'); ?>
            <?php get_template_part('template-parts/registered-agent/pricing-cards/premium-service'); ?>
            <?php get_template_part('template-parts/registered-agent/pricing-cards/enterprise-service'); ?>
        </div>

        <?php get_template_part('template-parts/registered-agent/guarantee-banner'); ?>
    </div>
</section>