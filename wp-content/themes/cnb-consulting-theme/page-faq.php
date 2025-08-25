<?php
/**
 * Template for FAQ Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/faq/hero'); ?>



    <?php get_template_part('template-parts/faq/questions'); ?>

    <?php get_template_part('template-parts/faq/cta'); ?>
</main>

<?php get_footer(); ?>