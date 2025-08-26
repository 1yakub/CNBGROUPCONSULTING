<?php
/**
 * Template for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/ein-service/hero'); ?>
    
    <?php get_template_part('template-parts/ein-service/explanation'); ?>
    
    <?php get_template_part('template-parts/ein-service/process'); ?>
    
    <?php get_template_part('template-parts/ein-service/pricing'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'ein-service',
        'title' => 'Frequently Asked Questions',
        'subtitle' => 'Everything you need to know about getting an EIN'
    )); ?>
    
    <?php get_template_part('template-parts/ein-service/cta'); ?>
</main>

<?php get_footer(); ?>