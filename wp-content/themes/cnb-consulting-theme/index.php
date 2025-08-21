<?php
/**
 * The main template file
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<div class="container">
    <div class="content-area">
        
        <?php if (have_posts()) : ?>
            
            <?php get_template_part('template-parts/blog/header'); ?>
            <?php get_template_part('template-parts/blog/loop'); ?>
            <?php get_template_part('template-parts/blog/pagination'); ?>
            
        <?php else : ?>
            
            <?php get_template_part('template-parts/blog/no-posts'); ?>
            
        <?php endif; ?>
        
    </div><!-- .content-area -->
</div><!-- .container -->

<?php get_template_part('template-parts/blog/cta'); ?>

<?php get_footer(); ?>