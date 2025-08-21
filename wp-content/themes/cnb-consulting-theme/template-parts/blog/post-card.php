<?php
/**
 * Post Card Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <div class="post-content">
        <header class="post-header">
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <?php get_template_part('template-parts/blog/post-meta'); ?>
        </header><!-- .post-header -->
        
        <div class="post-excerpt">
            <?php
            if (has_excerpt()) {
                the_excerpt();
            } else {
                echo '<p>' . cnb_truncate_text(get_the_content(), 150) . '</p>';
            }
            ?>
        </div><!-- .post-excerpt -->
        
        <div class="post-footer">
            <a href="<?php the_permalink(); ?>" class="read-more btn btn-outline">
                <?php _e('Read More', 'cnb-consulting-theme'); ?>
                <i class="icon-arrow-right"></i>
            </a>
            
            <?php if (get_the_content()) : ?>
                <span class="reading-time">
                    <?php echo cnb_get_reading_time(get_the_content()); ?>
                </span>
            <?php endif; ?>
        </div><!-- .post-footer -->
    </div><!-- .post-content -->
</article><!-- #post-<?php the_ID(); ?> -->