<?php
/**
 * Template for ITIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/itin-service/hero'); ?>
    
    <?php get_template_part('template-parts/itin-service/explanation'); ?>
    
    <?php get_template_part('template-parts/itin-service/process'); ?>
    
    <?php get_template_part('template-parts/itin-service/pricing'); ?>
    
    <?php get_template_part('template-parts/itin-service/requirements'); ?>
    
    <?php get_template_part('template-parts/itin-service/faq'); ?>
    
    <?php get_template_part('template-parts/itin-service/cta'); ?>
</main>

<?php get_footer(); ?>