<?php
/**
 * Template for About Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/about/hero'); ?>
    
    <?php get_template_part('template-parts/about/story'); ?>
    
    <?php get_template_part('template-parts/about/values'); ?>
    
    <?php get_template_part('template-parts/about/team'); ?>
    
    <?php get_template_part('template-parts/about/why-choose'); ?>
    
    <?php get_template_part('template-parts/about/cta'); ?>
</main>

<?php get_footer(); ?>