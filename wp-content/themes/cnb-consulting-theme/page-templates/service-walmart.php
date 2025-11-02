<?php
/**
 * Template Name: Service - Walmart
 * Description: Template for the Walmart Seller service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/walmart-seller/hero'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/benefits'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/services'); ?>
    
    <?php get_template_part('template-parts/walmart-seller/packages'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'walmart-seller',
        'title' => 'Walmart Marketplace FAQ',
        'subtitle' => 'Common questions about selling on Walmart',
        'variant' => 'dark',
        'label' => __('Support', 'cnb-consulting-theme')
    )); ?>
    
    <?php get_template_part('template-parts/walmart-seller/cta'); ?>
</main>

<?php get_footer(); ?>