<?php
/**
 * Pagination Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pagination -->
<nav class="text-center mt-8" aria-label="<?php _e('Posts navigation', 'cnb-consulting-theme'); ?>">
    <style>
        .nav-links { @apply flex justify-center gap-2 flex-wrap; }
        .nav-links a, .nav-links span { @apply px-3 py-2 border border-gray-300 rounded-md text-gray-700 no-underline; }
        .nav-links a:hover, .nav-links .current { @apply bg-blue-600 text-white border-blue-600; }
    </style>
    <?php
    the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => __('&larr; Previous', 'cnb-consulting-theme'),
        'next_text' => __('Next &rarr;', 'cnb-consulting-theme'),
    ));
    ?>
</nav>