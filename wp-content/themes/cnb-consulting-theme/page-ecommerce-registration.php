<?php
/**
 * Template for E-commerce Registration Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/ecommerce-registration/hero'); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/form'); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/platforms'); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/pricing'); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/faq'); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/cta'); ?>
</main>

<?php get_footer(); ?>