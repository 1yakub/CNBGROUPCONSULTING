<?php
/**
 * Template for Contact Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/contact/hero'); ?>
    
    <?php get_template_part('template-parts/contact/form'); ?>
    
    <?php get_template_part('template-parts/contact/faq'); ?>
</main>

<?php get_footer(); ?>