<?php
/**
 * Tax Filing Service - Tax Savings Calculator Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Tax Savings Calculator -->
<section id="calculator" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php include get_template_directory() . '/template-parts/tax-filing/calculator-components/calculator-header.php'; ?>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php include get_template_directory() . '/template-parts/tax-filing/calculator-components/calculator-form.php'; ?>
                <?php include get_template_directory() . '/template-parts/tax-filing/calculator-components/calculator-results.php'; ?>
            </div>
        </div>
    </div>
</section>