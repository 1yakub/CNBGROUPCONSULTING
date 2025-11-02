<?php
/**
 * Template Name: Service - EIN
 * Description: Template for the EIN Service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/ein-service/hero'); ?>
    
    <?php get_template_part('template-parts/ein-service/explanation'); ?>
    
    <?php get_template_part('template-parts/ein-service/process'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'ein-service',
        'title' => 'Frequently Asked Questions',
        'subtitle' => 'Everything you need to know about getting an EIN',
        'variant' => 'dark',
        'label' => __('Support', 'cnb-consulting-theme')
    )); ?>
    
    <?php get_template_part('template-parts/ein-service/cta'); ?>
</main>

<?php get_footer(); ?>