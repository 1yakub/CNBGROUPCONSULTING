<?php
/**
 * No Posts Found Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- No Posts Found -->
<div class="text-center py-12">
    <header class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            <?php _e('Nothing Found', 'cnb-consulting-theme'); ?>
        </h1>
    </header>
    
    <div class="max-w-2xl mx-auto">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            
            <p class="text-gray-600 mb-6">
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
            
            <p class="text-gray-600 mb-6"><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cnb-consulting-theme'); ?></p>
            
            <div class="max-w-md mx-auto mb-8">
                <?php get_search_form(); ?>
            </div>
            
            <?php get_template_part('template-parts/blog/search-suggestions'); ?>
            
        <?php else : ?>
            
            <p class="text-gray-600 mb-6"><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cnb-consulting-theme'); ?></p>
            
            <div class="max-w-md mx-auto">
                <?php get_search_form(); ?>
            </div>
            
        <?php endif; ?>
    </div>
</div>