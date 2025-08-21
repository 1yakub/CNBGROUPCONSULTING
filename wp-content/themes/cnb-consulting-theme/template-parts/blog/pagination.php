<?php
/**
 * Pagination Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pagination -->
<nav class="pagination-nav" aria-label="<?php _e('Posts navigation', 'cnb-consulting-theme'); ?>">
    <?php
    the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => __('&larr; Previous', 'cnb-consulting-theme'),
        'next_text' => __('Next &rarr;', 'cnb-consulting-theme'),
    ));
    ?>
</nav><!-- .pagination-nav -->