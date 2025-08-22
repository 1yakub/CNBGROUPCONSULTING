<?php
/**
 * Posts Loop Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Posts Loop -->
<div class="grid gap-8 mb-8">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/blog/post-card'); ?>
    <?php endwhile; ?>
</div>