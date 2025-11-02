<?php
/**
 * Template Name: Service - ITIN
 * Description: Template for the ITIN Service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/itin-service/hero'); ?>
    
    <?php get_template_part('template-parts/itin-service/explanation'); ?>
    
    <?php get_template_part('template-parts/itin-service/process'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'itin-service',
        'title' => 'ITIN Service FAQ',
        'subtitle' => 'Common questions about getting an ITIN',
        'variant' => 'dark',
        'label' => __('Support', 'cnb-consulting-theme')
    )); ?>
    
    <?php get_template_part('template-parts/itin-service/cta'); ?>
</main>

<?php get_footer(); ?>