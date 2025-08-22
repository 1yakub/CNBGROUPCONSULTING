<?php
/**
 * Post Meta Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="flex flex-wrap gap-4 text-sm text-gray-500">
    <span class="inline-flex items-center gap-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
            <?php echo esc_html(get_the_date()); ?>
        </time>
    </span>
    
    <?php if (get_the_author()) : ?>
        <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-gray-600 hover:text-blue-600">
                <?php echo esc_html(get_the_author()); ?>
            </a>
        </span>
    <?php endif; ?>
    
    <?php if (get_the_category_list(', ')) : ?>
        <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
            </svg>
            <?php echo get_the_category_list(', '); ?>
        </span>
    <?php endif; ?>
    
    <?php if (comments_open() || get_comments_number()) : ?>
        <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <a href="<?php comments_link(); ?>" class="text-gray-600 hover:text-blue-600">
                <?php comments_number(__('Leave a comment', 'cnb-consulting-theme'), __('1 Comment', 'cnb-consulting-theme'), __('% Comments', 'cnb-consulting-theme')); ?>
            </a>
        </span>
    <?php endif; ?>
</div>