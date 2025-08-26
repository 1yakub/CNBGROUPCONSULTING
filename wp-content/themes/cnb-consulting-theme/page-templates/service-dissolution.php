<?php
/**
 * Template Name: Service - Dissolution
 * Description: Template for the Company Dissolution service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/company-dissolution/hero'); ?>
    
    <?php get_template_part('template-parts/company-dissolution/importance'); ?>
    
    <?php get_template_part('template-parts/company-dissolution/process'); ?>
    
    <?php get_template_part('template-parts/company-dissolution/pricing'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'company-dissolution',
        'title' => 'Company Dissolution FAQ',
        'subtitle' => 'Common questions about dissolving your business'
    )); ?>
    
    <?php get_template_part('template-parts/company-dissolution/cta'); ?>
</main>

<?php get_footer(); ?>