<?php
/**
 * Template Name: FAQ
 * Description: Template for the Frequently Asked Questions page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/faq/hero'); ?>



    <?php get_template_part('template-parts/faq/questions'); ?>

    <?php get_template_part('template-parts/faq/cta'); ?>
</main>

<?php get_footer(); ?>