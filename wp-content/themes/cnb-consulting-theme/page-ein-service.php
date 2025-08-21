<?php
/**
 * Template for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/ein-service/hero'); ?>
    
    <?php get_template_part('template-parts/ein-service/explanation'); ?>
    
    <?php get_template_part('template-parts/ein-service/process'); ?>
    
    <?php get_template_part('template-parts/ein-service/pricing'); ?>
    
    <?php get_template_part('template-parts/ein-service/faq'); ?>
    
    <?php get_template_part('template-parts/ein-service/cta'); ?>
</main>

<?php get_footer(); ?>