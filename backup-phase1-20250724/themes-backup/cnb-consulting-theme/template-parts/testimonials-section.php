<?php
/**
 * Testimonials Section Template Part
 * 
 * Displays client testimonials in a 3-column layout
 * 
 * @package CNB_Consulting_Theme
 */

$testimonials = cnb_get_placeholder_testimonials();
?>

<section class="testimonials-section">
    <div class="container">
        
        <header class="section-header">
            <h2 class="section-title">
                <?php _e('What Our Clients Say', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="section-subtitle">
                <?php _e('Join hundreds of successful international entrepreneurs who trust CNB Group Consulting', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="testimonials-grid">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="testimonial-card">
                    
                    <div class="testimonial-rating">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <span class="star <?php echo $i <= $testimonial['rating'] ? 'filled' : 'empty'; ?>">⭐</span>
                        <?php endfor; ?>
                    </div>
                    
                    <blockquote class="testimonial-content">
                        "<?php echo esc_html($testimonial['content']); ?>"
                    </blockquote>
                    
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="<?php echo esc_url($testimonial['avatar']); ?>" 
                                 alt="<?php echo esc_attr($testimonial['author']); ?>"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="avatar-fallback" style="display:none;">
                                👤
                            </div>
                        </div>
                        <div class="author-info">
                            <h4 class="author-name"><?php echo esc_html($testimonial['author']); ?></h4>
                            <p class="author-company"><?php echo esc_html($testimonial['company']); ?></p>
                        </div>
                    </div>
                    
                </div><!-- .testimonial-card -->
            <?php endforeach; ?>
        </div><!-- .testimonials-grid -->
        
        <div class="testimonials-footer">
            <p class="testimonials-note">
                <?php _e('Ready to join our success stories?', 'cnb-consulting-theme'); ?>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="testimonials-cta">
                    <?php _e('Start Your Journey Today →', 'cnb-consulting-theme'); ?>
                </a>
            </p>
        </div>
        
    </div><!-- .container -->
</section><!-- .testimonials-section -->