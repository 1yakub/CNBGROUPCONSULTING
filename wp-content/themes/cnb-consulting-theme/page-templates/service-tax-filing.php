<?php
/**
 * Template Name: Service - Tax Filing
 * Description: Template for the Tax Filing service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/tax-filing/hero'); ?>
    
    <?php get_template_part('template-parts/tax-filing/services'); ?>
    
    <?php get_template_part('template-parts/tax-filing/benefits'); ?>

    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'tax-filing',
        'title' => 'Tax Filing FAQ',
        'subtitle' => 'Answers to common questions about our tax preparation services',
        'variant' => 'dark',
        'label' => __('Support', 'cnb-consulting-theme')
    )); ?>
    
    <?php get_template_part('template-parts/tax-filing/cta'); ?>
</main>

<?php get_footer(); ?>