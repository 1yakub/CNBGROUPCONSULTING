<?php
/**
 * Template for US Resale Certificate Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/resale-certificate/hero'); ?>
    
    <?php get_template_part('template-parts/resale-certificate/explanation'); ?>
    
    <?php get_template_part('template-parts/resale-certificate/benefits'); ?>
    
    <?php get_template_part('template-parts/resale-certificate/calculator'); ?>
    
    <?php get_template_part('template-parts/resale-certificate/process'); ?>
    
    <?php get_template_part('template-parts/resale-certificate/pricing'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'resale-certificate',
        'title' => 'Resale Certificate FAQ',
        'subtitle' => 'Common questions about resale certificates'
    )); ?>
    
    <?php get_template_part('template-parts/resale-certificate/cta'); ?>
</main>

<?php get_footer(); ?>