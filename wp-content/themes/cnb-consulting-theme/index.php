<?php
/**
 * The main template file
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<div class="container">
    <div class="content-area">
        
        <?php if (have_posts()) : ?>
            
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
            
            <!-- Posts Loop -->
            <div class="posts-container">
                <?php while (have_posts()) : the_post(); ?>
                    
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
                    
                <?php endwhile; ?>
            </div><!-- .posts-container -->
            
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
            
        <?php else : ?>
            
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
                        
                        <!-- Suggested Actions for Search -->
                        <div class="search-suggestions">
                            <h3><?php _e('You might be interested in:', 'cnb-consulting-theme'); ?></h3>
                            <ul class="suggestions-list">
                                <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php _e('Browse Our Services', 'cnb-consulting-theme'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/about/')); ?>"><?php _e('Learn About CNB Group Consulting', 'cnb-consulting-theme'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php _e('Contact Us for Help', 'cnb-consulting-theme'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Return to Homepage', 'cnb-consulting-theme'); ?></a></li>
                            </ul>
                        </div>
                        
                    <?php else : ?>
                        
                        <p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cnb-consulting-theme'); ?></p>
                        
                        <div class="search-form-container">
                            <?php get_search_form(); ?>
                        </div>
                        
                    <?php endif; ?>
                </div><!-- .page-content -->
            </div><!-- .no-posts-found -->
            
        <?php endif; ?>
        
    </div><!-- .content-area -->
</div><!-- .container -->

<!-- Call to Action Section for Blog/Archive Pages -->
<?php if (is_home() || is_archive()) : ?>
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php _e('Ready to Start Your US Business?', 'cnb-consulting-theme'); ?></h2>
                <p><?php _e('Join hundreds of international entrepreneurs who have successfully launched their US businesses with our expert guidance.', 'cnb-consulting-theme'); ?></p>
                <div class="cta-actions">
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary">
                        <?php _e('View Our Services', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline">
                        <?php _e('Free Consultation', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<style>
/* Temporary CSS for index.php - will be moved to main.css in Phase 2 */
.content-area {
    padding: var(--spacing-2xl) 0;
}

.page-header {
    margin-bottom: var(--spacing-2xl);
    text-align: center;
    padding-bottom: var(--spacing-lg);
    border-bottom: 1px solid var(--gray-200);
}

.page-title {
    color: var(--gray-800);
    margin-bottom: var(--spacing-md);
}

.page-description {
    color: var(--gray-600);
    font-size: 1.125rem;
}

.search-results-count {
    color: var(--gray-500);
    font-size: 0.875rem;
}

.posts-container {
    display: grid;
    gap: var(--spacing-2xl);
    margin-bottom: var(--spacing-2xl);
}

.post-item {
    background-color: var(--white);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-sm);
    overflow: hidden;
    border: 1px solid var(--gray-200);
    transition: box-shadow 0.3s ease;
}

.post-item:hover {
    box-shadow: var(--shadow-md);
}

.post-thumbnail img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.post-content {
    padding: var(--spacing-xl);
}

.post-title a {
    color: var(--gray-800);
    text-decoration: none;
}

.post-title a:hover {
    color: var(--primary-blue);
}

.post-meta {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-md);
    font-size: 0.875rem;
    color: var(--gray-500);
}

.post-meta span {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.post-meta a {
    color: var(--gray-600);
    text-decoration: none;
}

.post-meta a:hover {
    color: var(--primary-blue);
}

.post-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: var(--spacing-lg);
}

.reading-time {
    font-size: 0.875rem;
    color: var(--gray-500);
}

.no-posts-found {
    text-align: center;
    padding: var(--spacing-3xl) 0;
}

.search-form-container {
    max-width: 400px;
    margin: var(--spacing-lg) auto;
}

.search-suggestions {
    margin-top: var(--spacing-2xl);
}

.suggestions-list {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-md);
    margin-top: var(--spacing-md);
}

.suggestions-list a {
    display: block;
    padding: var(--spacing-md);
    background-color: var(--gray-50);
    border-radius: var(--border-radius-md);
    text-decoration: none;
    color: var(--gray-700);
    transition: background-color 0.3s ease;
}

.suggestions-list a:hover {
    background-color: var(--gray-100);
    color: var(--primary-blue);
}

.pagination-nav {
    text-align: center;
    margin-top: var(--spacing-2xl);
}

.pagination-nav .nav-links {
    display: flex;
    justify-content: center;
    gap: var(--spacing-sm);
    flex-wrap: wrap;
}

.pagination-nav a,
.pagination-nav span {
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--gray-300);
    border-radius: var(--border-radius-md);
    text-decoration: none;
    color: var(--gray-700);
}

.pagination-nav a:hover,
.pagination-nav .current {
    background-color: var(--primary-blue);
    color: var(--white);
    border-color: var(--primary-blue);
}

/* Icon placeholders */
.icon-calendar:before { content: "📅"; }
.icon-user:before { content: "👤"; }
.icon-folder:before { content: "📁"; }
.icon-comments:before { content: "💬"; }
.icon-arrow-right:before { content: "→"; }

@media (max-width: 767px) {
    .post-meta {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .post-footer {
        flex-direction: column;
        gap: var(--spacing-md);
        align-items: flex-start;
    }
    
    .suggestions-list {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>