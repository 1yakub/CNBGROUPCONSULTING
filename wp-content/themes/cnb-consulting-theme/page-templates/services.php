<?php
/**
 * Template Name: Services Page
 * Description: Template for displaying the services overview page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/services/hero'); ?>
    
    <?php get_template_part('template-parts/services/intro'); ?>
        
        <?php get_template_part('template-parts/services/formation-services'); ?>
        
    <?php get_template_part('template-parts/services/outro'); ?>
    
    <?php get_template_part('template-parts/services/cta'); ?>
</main>

<?php get_footer(); ?>