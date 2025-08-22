<?php
/**
 * Blog Header Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Page Header -->
<header class="mb-8 text-center pb-6 border-b border-gray-200">
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        <?php echo cnb_get_page_title(); ?>
    </h1>
    
    <?php if (is_home() && get_bloginfo('description')) : ?>
        <p class="text-gray-600 text-lg">
            <?php echo esc_html(get_bloginfo('description')); ?>
        </p>
    <?php endif; ?>
    
    <?php if (is_search()) : ?>
        <p class="text-gray-500 text-sm mt-2">
            <?php
            global $wp_query;
            printf(
                _n(
                    '%s result found',
                    '%s results found',
                    $wp_query->found_posts,
                    'cnb-consulting-theme'
                ),
                number_format_i18n($wp_query->found_posts)
            );
            ?>
        </p>
    <?php endif; ?>
</header>