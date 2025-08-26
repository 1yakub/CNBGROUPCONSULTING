<?php
/**
 * Template Name: Service - DUNS
 * Description: Template for the DUNS Number service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/duns-number/hero'); ?>
    
    <?php get_template_part('template-parts/duns-number/explanation'); ?>
    
    <?php get_template_part('template-parts/duns-number/benefits'); ?>
    
    <?php get_template_part('template-parts/duns-number/process'); ?>
    
    <?php get_template_part('template-parts/duns-number/pricing'); ?>
    
    <?php get_template_part('template-parts/duns-number/cta'); ?>
</main>

<?php get_footer(); ?>