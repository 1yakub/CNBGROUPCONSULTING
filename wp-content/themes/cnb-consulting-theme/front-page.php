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

<div>
    
    
    <!-- Hero Section -->
    <?php get_template_part('template-parts/homepage/hero-section'); ?>
    
    <!-- Services Overview -->
    <?php get_template_part('template-parts/homepage/services-overview'); ?>
    
    <!-- Rate Request Form -->
    <?php get_template_part('template-parts/homepage/rate-request-form'); ?>
    
    <!-- Company Statistics -->
    <?php get_template_part('template-parts/homepage/stats-section'); ?>
    
    <!-- Process Steps -->
    <?php get_template_part('template-parts/homepage/process-steps'); ?>
    
    <!-- Testimonials -->
    <?php get_template_part('template-parts/homepage/testimonials-section'); ?>
    
    <!-- FAQ Section -->
    <?php get_template_part('template-parts/homepage/faq-section'); ?>
    
    <!-- Final Call-to-Action -->
    <?php get_template_part('template-parts/homepage/cta-section'); ?>
    
</div><!-- .homepage-container -->

<?php get_footer(); ?>