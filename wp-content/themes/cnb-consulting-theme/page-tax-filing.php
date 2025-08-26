<?php
/**
 * Template for Tax Filing Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/tax-filing/hero'); ?>
    
    <?php get_template_part('template-parts/tax-filing/services'); ?>
    
    <?php get_template_part('template-parts/tax-filing/calculator'); ?>
    
    <?php get_template_part('template-parts/tax-filing/benefits'); ?>
    
    <?php get_template_part('template-parts/tax-filing/cta'); ?>
</main>

<?php get_footer(); ?>