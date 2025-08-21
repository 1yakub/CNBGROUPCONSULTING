<?php
/**
 * Post Meta Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="post-meta">
    <span class="post-date">
        <i class="icon-calendar"></i>
        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
            <?php echo esc_html(get_the_date()); ?>
        </time>
    </span>
    
    <?php if (get_the_author()) : ?>
        <span class="post-author">
            <i class="icon-user"></i>
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <?php echo esc_html(get_the_author()); ?>
            </a>
        </span>
    <?php endif; ?>
    
    <?php if (get_the_category_list(', ')) : ?>
        <span class="post-categories">
            <i class="icon-folder"></i>
            <?php echo get_the_category_list(', '); ?>
        </span>
    <?php endif; ?>
    
    <?php if (comments_open() || get_comments_number()) : ?>
        <span class="post-comments">
            <i class="icon-comments"></i>
            <a href="<?php comments_link(); ?>">
                <?php comments_number(__('Leave a comment', 'cnb-consulting-theme'), __('1 Comment', 'cnb-consulting-theme'), __('% Comments', 'cnb-consulting-theme')); ?>
            </a>
        </span>
    <?php endif; ?>
</div><!-- .post-meta -->