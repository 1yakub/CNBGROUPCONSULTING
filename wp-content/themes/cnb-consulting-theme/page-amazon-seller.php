<?php
/**
 * Template for Amazon Seller Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php
    // Hero Section with Contact Form
    get_template_part('template-parts/amazon-seller/hero');
    
    // Services Overview Section
    get_template_part('template-parts/amazon-seller/services');
    
    // Packages/Pricing Section
    get_template_part('template-parts/amazon-seller/packages');
    
    // Success Stories Section
    get_template_part('template-parts/amazon-seller/benefits');
    
    // FAQ Section
    get_template_part('template-parts/amazon-seller/faq');
    
    // CTA Section with JavaScript
    get_template_part('template-parts/amazon-seller/cta');
    ?>
</main>

<?php get_footer(); ?>