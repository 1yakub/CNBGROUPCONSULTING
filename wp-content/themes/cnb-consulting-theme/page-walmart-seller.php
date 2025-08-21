<?php
/**
 * Template for Walmart Seller Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/walmart-seller/hero'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/benefits'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/services'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/packages'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/faq'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/cta'); ?>
</main>

<?php get_footer(); ?>