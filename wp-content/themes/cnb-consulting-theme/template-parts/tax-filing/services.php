<?php
/**
 * Tax Filing Service - Services Overview Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Services Overview -->
<section id="services" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php include get_template_directory() . '/template-parts/tax-filing/services-components/section-header.php'; ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php include get_template_directory() . '/template-parts/tax-filing/services-components/service-cards/personal-tax.php'; ?>
            <?php include get_template_directory() . '/template-parts/tax-filing/services-components/service-cards/business-tax.php'; ?>
            <?php include get_template_directory() . '/template-parts/tax-filing/services-components/service-cards/tax-planning.php'; ?>
            <?php include get_template_directory() . '/template-parts/tax-filing/services-components/service-cards/tax-amendments.php'; ?>
            <?php include get_template_directory() . '/template-parts/tax-filing/services-components/service-cards/irs-audit-support.php'; ?>
            <?php include get_template_directory() . '/template-parts/tax-filing/services-components/service-cards/bookkeeping-payroll.php'; ?>
        </div>
    </div>
</section>