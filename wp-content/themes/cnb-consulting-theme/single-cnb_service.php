<?php
/**
 * Template for displaying single service pages
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main service-page">
    <?php while (have_posts()) : the_post(); ?>
        
        <?php get_template_part('template-parts/service-hero'); ?>
        
        <?php get_template_part('template-parts/service-benefits'); ?>
        
        <?php get_template_part('template-parts/service-process'); ?>
        
        <?php get_template_part('template-parts/service-pricing'); ?>
        
        <?php get_template_part('template-parts/service-faq'); ?>
        
        <?php get_template_part('template-parts/service-cta'); ?>
        
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>