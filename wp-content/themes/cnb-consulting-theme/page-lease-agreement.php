<?php
/**
 * Template for US Lease Agreement Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/lease-agreement/hero'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/types'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/importance'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/provisions'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/pricing'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/faq'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/cta'); ?>
</main>

<?php get_footer(); ?>