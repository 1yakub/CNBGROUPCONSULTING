<?php
/**
 * Call-to-Action Section Template Part
 * 
 * Final conversion section with strong CTA and contact options
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section class="relative py-20 lg:py-32 bg-gradient-to-br from-cnb-primary to-blue-900 text-white overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <?php include get_template_directory() . '/template-parts/homepage/cta-components/cta-header.php'; ?>
            <?php include get_template_directory() . '/template-parts/homepage/cta-components/cta-features.php'; ?>
            <?php include get_template_directory() . '/template-parts/homepage/cta-components/cta-buttons.php'; ?>
            <?php include get_template_directory() . '/template-parts/homepage/cta-components/cta-contact.php'; ?>
            <?php include get_template_directory() . '/template-parts/homepage/cta-components/cta-guarantee.php'; ?>
        </div>
    </div>
    <?php include get_template_directory() . '/template-parts/homepage/cta-components/cta-background.php'; ?>
</section>