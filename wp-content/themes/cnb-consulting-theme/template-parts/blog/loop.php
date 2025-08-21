<?php
/**
 * Posts Loop Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Posts Loop -->
<div class="posts-container">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/blog/post-card'); ?>
    <?php endwhile; ?>
</div><!-- .posts-container -->