<?php
/**
 * Blog Header Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Page Header -->
<header class="page-header">
    <h1 class="page-title">
        <?php echo cnb_get_page_title(); ?>
    </h1>
    
    <?php if (is_home() && get_bloginfo('description')) : ?>
        <p class="page-description">
            <?php echo esc_html(get_bloginfo('description')); ?>
        </p>
    <?php endif; ?>
    
    <?php if (is_search()) : ?>
        <p class="search-results-count">
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
</header><!-- .page-header -->