<?php
/**
 * Post Card Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow overflow-hidden'); ?>>
    
    <?php if (has_post_thumbnail()) : ?>
        <div class="aspect-w-16 aspect-h-9">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
            </a>
        </div>
    <?php endif; ?>
    
    <div class="p-6">
        <header class="mb-4">
            <h2 class="text-xl font-bold mb-2">
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="text-gray-800 hover:text-blue-600 transition-colors">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <?php get_template_part('template-parts/blog/post-meta'); ?>
        </header>
        
        <div class="text-gray-600 mb-4">
            <?php
            if (has_excerpt()) {
                the_excerpt();
            } else {
                echo '<p>' . cnb_truncate_text(get_the_content(), 150) . '</p>';
            }
            ?>
        </div>
        
        <div class="flex justify-between items-center mt-6">
            <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium">
                <?php _e('Read More', 'cnb-consulting-theme'); ?>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            
            <?php if (get_the_content()) : ?>
                <span class="text-sm text-gray-500">
                    <?php echo cnb_get_reading_time(get_the_content()); ?>
                </span>
            <?php endif; ?>
        </div>
    </div>
</article>