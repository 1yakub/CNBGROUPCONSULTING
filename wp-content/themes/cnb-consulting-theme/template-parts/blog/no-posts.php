<?php
/**
 * No Posts Found Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- No Posts Found -->
<div class="no-posts-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php _e('Nothing Found', 'cnb-consulting-theme'); ?>
        </h1>
    </header><!-- .page-header -->
    
    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            
            <p>
                <?php
                printf(
                    wp_kses(
                        __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cnb-consulting-theme'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url(admin_url('post-new.php'))
                );
                ?>
            </p>
            
        <?php elseif (is_search()) : ?>
            
            <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cnb-consulting-theme'); ?></p>
            
            <div class="search-form-container">
                <?php get_search_form(); ?>
            </div>
            
            <?php get_template_part('template-parts/blog/search-suggestions'); ?>
            
        <?php else : ?>
            
            <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cnb-consulting-theme'); ?></p>
            
            <div class="search-form-container">
                <?php get_search_form(); ?>
            </div>
            
        <?php endif; ?>
    </div><!-- .page-content -->
</div><!-- .no-posts-found -->