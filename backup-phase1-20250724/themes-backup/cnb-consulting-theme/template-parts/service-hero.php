<?php
/**
 * Service Hero Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$hero_subtitle = get_post_meta(get_the_ID(), '_cnb_hero_subtitle', true);
$value_proposition = get_post_meta(get_the_ID(), '_cnb_value_proposition', true);
$processing_time = get_post_meta(get_the_ID(), '_cnb_processing_time', true);
$success_rate = get_post_meta(get_the_ID(), '_cnb_success_rate', true);
$guarantee_period = get_post_meta(get_the_ID(), '_cnb_guarantee_period', true);
$primary_cta_text = get_post_meta(get_the_ID(), '_cnb_primary_cta_text', true) ?: 'Get Started Now';
$primary_cta_link = get_post_meta(get_the_ID(), '_cnb_primary_cta_link', true) ?: '#pricing';

// Get service category for breadcrumbs
$categories = wp_get_post_terms(get_the_ID(), 'service_category');
$category_name = !empty($categories) ? $categories[0]->name : '';
?>

<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="hero-breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">→</span>
                <a href="<?php echo get_post_type_archive_link('cnb_service'); ?>">Services</a>
                <?php if ($category_name) : ?>
                    <span class="separator">→</span>
                    <span><?php echo esc_html($category_name); ?></span>
                <?php endif; ?>
            </div>
            
            <div class="hero-main">
                <div class="hero-text">
                    <div class="service-category-badge">
                        <?php if ($category_name) : ?>
                            <span class="category-tag"><?php echo esc_html($category_name); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="service-title"><?php the_title(); ?></h1>
                    
                    <?php if ($hero_subtitle) : ?>
                        <p class="service-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                    
                    <?php if ($value_proposition) : ?>
                        <div class="value-proposition">
                            <div class="value-prop-icon">💡</div>
                            <p><?php echo esc_html($value_proposition); ?></p>
                        </div>
                    <?php endif; ?>
                    
                    <div class="hero-features">
                        <?php if ($processing_time) : ?>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <span class="feature-icon">⚡</span>
                                </div>
                                <div class="feature-content">
                                    <span class="feature-label">Processing Time</span>
                                    <span class="feature-value"><?php echo esc_html($processing_time); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($success_rate) : ?>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <span class="feature-icon">✅</span>
                                </div>
                                <div class="feature-content">
                                    <span class="feature-label">Success Rate</span>
                                    <span class="feature-value"><?php echo esc_html($success_rate); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($guarantee_period) : ?>
                            <div class="feature-item">
                                <div class="feature-icon-wrapper">
                                    <span class="feature-icon">🛡️</span>
                                </div>
                                <div class="feature-content">
                                    <span class="feature-label">Guarantee</span>
                                    <span class="feature-value"><?php echo esc_html($guarantee_period); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="hero-cta">
                        <a href="<?php echo esc_url($primary_cta_link); ?>" class="btn btn-primary btn-large hero-cta-button">
                            <span class="btn-text"><?php echo esc_html($primary_cta_text); ?></span>
                            <span class="btn-icon">→</span>
                        </a>
                        <div class="cta-subtitle">
                            <span class="security-badge">🔒</span>
                            <span>Secure & confidential process</span>
                        </div>
                    </div>
                </div>
                
                <div class="hero-trust">
                    <div class="trust-header">
                        <h3>Why Choose Us</h3>
                    </div>
                    <div class="trust-badges">
                        <div class="trust-item">
                            <div class="trust-icon-wrapper">
                                <span class="trust-icon">⭐</span>
                            </div>
                            <div class="trust-content">
                                <span class="trust-value">4.9/5</span>
                                <span class="trust-label">Customer Rating</span>
                            </div>
                        </div>
                        <div class="trust-item">
                            <div class="trust-icon-wrapper">
                                <span class="trust-icon">👥</span>
                            </div>
                            <div class="trust-content">
                                <span class="trust-value">500+</span>
                                <span class="trust-label">Clients Served</span>
                            </div>
                        </div>
                        <div class="trust-item">
                            <div class="trust-icon-wrapper">
                                <span class="trust-icon">🏆</span>
                            </div>
                            <div class="trust-content">
                                <span class="trust-value">Expert</span>
                                <span class="trust-label">Legal Service</span>
                            </div>
                        </div>
                        <div class="trust-item">
                            <div class="trust-icon-wrapper">
                                <span class="trust-icon">⚡</span>
                            </div>
                            <div class="trust-content">
                                <span class="trust-value">Fast</span>
                                <span class="trust-label">Processing</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hero-guarantee">
                        <div class="guarantee-badge">
                            <span class="guarantee-icon">🛡️</span>
                            <span class="guarantee-text">Money-Back Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>