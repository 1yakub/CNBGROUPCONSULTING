<?php
/**
 * Template for Registered Agent Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/registered-agent/hero'); ?>
    
    <?php get_template_part('template-parts/registered-agent/explanation'); ?>
    
    <?php get_template_part('template-parts/registered-agent/features'); ?>
    
    <?php get_template_part('template-parts/registered-agent/pricing'); ?>
    
    <?php get_template_part('template-parts/registered-agent/benefits'); ?>
    
    <?php get_template_part('template-parts/registered-agent/cta'); ?>
</main>

<?php get_footer(); ?>