<?php
/**
 * Template for DUNS Number Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/duns-number/hero'); ?>
    
    <?php get_template_part('template-parts/duns-number/explanation'); ?>
    
    <?php get_template_part('template-parts/duns-number/benefits'); ?>
    
    <?php get_template_part('template-parts/duns-number/process'); ?>
    
    <?php get_template_part('template-parts/duns-number/pricing'); ?>
    
    <?php get_template_part('template-parts/duns-number/cta'); ?>
</main>

<?php get_footer(); ?>