<?php
/**
 * Template for ITIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/itin-service/hero'); ?>
    
    <?php get_template_part('template-parts/itin-service/explanation'); ?>
    
    <?php get_template_part('template-parts/itin-service/process'); ?>
    
    <?php get_template_part('template-parts/itin-service/pricing'); ?>
    
    <?php get_template_part('template-parts/itin-service/requirements'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'itin-service',
        'title' => 'ITIN Service FAQ',
        'subtitle' => 'Common questions about getting an ITIN'
    )); ?>
    
    <?php get_template_part('template-parts/itin-service/cta'); ?>
</main>

<?php get_footer(); ?>