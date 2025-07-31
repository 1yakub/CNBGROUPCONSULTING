<?php
/**
 * The homepage template
 * 
 * This template displays the homepage with all business-focused sections
 * optimized for CNB Group Consulting's drop shipping consultancy services.
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<div class="homepage-container">
    
    <!-- Hero Section -->
    <?php get_template_part('template-parts/hero-section'); ?>
    
    <!-- Services Overview -->
    <?php get_template_part('template-parts/services-overview'); ?>
    
    <!-- Company Statistics -->
    <?php get_template_part('template-parts/stats-section'); ?>
    
    <!-- Process Steps -->
    <?php get_template_part('template-parts/process-steps'); ?>
    
    <!-- Testimonials -->
    <?php get_template_part('template-parts/testimonials-section'); ?>
    
    <!-- FAQ Section -->
    <?php get_template_part('template-parts/faq-section'); ?>
    
    <!-- Final Call-to-Action -->
    <?php get_template_part('template-parts/cta-section'); ?>
    
</div><!-- .homepage-container -->

<?php get_footer(); ?>