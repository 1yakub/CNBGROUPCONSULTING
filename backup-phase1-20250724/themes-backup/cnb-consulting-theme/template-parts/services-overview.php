<?php
/**
 * Services Overview Template Part
 * 
 * Displays the featured services grid with 6 core services
 * 
 * @package CNB_Consulting_Theme
 */

$services = cnb_get_placeholder_services();
?>

<section class="services-overview-section">
    <div class="container">
        
        <header class="section-header">
            <h2 class="section-title">
                <?php _e('Our Core Services', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="section-subtitle">
                <?php _e('Complete business formation and marketplace setup services for international entrepreneurs', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="services-grid">
            <?php foreach ($services as $service) : ?>
                <div class="service-card">
                    
                    <div class="service-icon">
                        <?php 
                        // Emoji icons for quick development
                        $icons = array(
                            'building' => '🏢',
                            'id-card' => '🆔', 
                            'user' => '👤',
                            'shield' => '🛡️',
                            'shopping-cart' => '🛒',
                            'store' => '🏪'
                        );
                        echo esc_html($icons[$service['icon']] ?? '💼');
                        ?>
                    </div>
                    
                    <h3 class="service-title">
                        <?php echo esc_html($service['title']); ?>
                    </h3>
                    
                    <p class="service-description">
                        <?php echo esc_html($service['description']); ?>
                    </p>
                    
                    <div class="service-price">
                        <span class="price-amount"><?php echo esc_html($service['price']); ?></span>
                        <?php if (strpos($service['price'], '/year') !== false) : ?>
                            <span class="price-period"><?php _e('per year', 'cnb-consulting-theme'); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="service-cta">
                        <a href="<?php echo esc_url($service['link']); ?>" class="btn btn-primary">
                            <?php _e('Get Started', 'cnb-consulting-theme'); ?>
                        </a>
                    </div>
                    
                </div><!-- .service-card -->
            <?php endforeach; ?>
        </div><!-- .services-grid -->
        
        <div class="services-footer">
            <p class="services-note">
                <?php _e('Need something else?', 'cnb-consulting-theme'); ?>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="services-link">
                    <?php _e('View All 13 Services →', 'cnb-consulting-theme'); ?>
                </a>
            </p>
        </div>
        
    </div><!-- .container -->
</section><!-- .services-overview-section -->