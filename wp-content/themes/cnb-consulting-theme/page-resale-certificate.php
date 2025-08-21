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
    
    <?php get_template_part('template-parts/resale-certificate/faq'); ?>
    
    <?php get_template_part('template-parts/resale-certificate/cta'); ?>
</main>

<?php get_footer(); ?>