<?php
/**
 * Template Name: Service - E-Commerce
 * Description: Template for the E-commerce Registration service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/ecommerce-registration/hero'); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/platforms'); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/pricing'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'ecommerce-registration',
        'title' => 'E-commerce Registration FAQ',
        'subtitle' => 'Common questions about e-commerce business registration'
    )); ?>
    
    <?php get_template_part('template-parts/ecommerce-registration/cta'); ?>
</main>

<?php get_footer(); ?>