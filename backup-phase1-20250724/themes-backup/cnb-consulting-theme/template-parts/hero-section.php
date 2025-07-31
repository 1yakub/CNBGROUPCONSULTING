<?php
/**
 * Hero Section Template Part
 * 
 * Displays the main hero section with headline, subtitle, CTAs and trust indicators
 * 
 * @package CNB_Consulting_Theme
 */

$hero_content = cnb_get_hero_content();
$company_stats = cnb_get_company_info();
?>

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            
            <h1 class="hero-headline">
                <?php echo esc_html($hero_content['headline']); ?>
            </h1>
            
            <p class="hero-subtitle lead">
                <?php echo esc_html($hero_content['subtitle']); ?>
            </p>
            
            <div class="hero-actions">
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary btn-lg">
                    <?php echo esc_html($hero_content['cta_primary']); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline btn-lg">
                    <?php echo esc_html($hero_content['cta_secondary']); ?>
                </a>
            </div>
            
            <div class="hero-trust-indicators">
                <div class="trust-item">
                    <span class="trust-icon">🏆</span>
                    <span class="trust-text">
                        <strong><?php echo esc_html($company_stats['clients_served']); ?></strong>
                        <?php _e('Clients Served', 'cnb-consulting-theme'); ?>
                    </span>
                </div>
                
                <div class="trust-item">
                    <span class="trust-icon">✅</span>
                    <span class="trust-text">
                        <strong><?php echo esc_html($company_stats['success_rate']); ?></strong>
                        <?php _e('Success Rate', 'cnb-consulting-theme'); ?>
                    </span>
                </div>
                
                <div class="trust-item">
                    <span class="trust-icon">🌍</span>
                    <span class="trust-text">
                        <strong><?php echo esc_html($company_stats['countries_served']); ?></strong>
                        <?php _e('Countries Served', 'cnb-consulting-theme'); ?>
                    </span>
                </div>
            </div>
            
        </div><!-- .hero-content -->
    </div><!-- .container -->
    
    <!-- Background Elements -->
    <div class="hero-background">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
    </div>
    
</section><!-- .hero-section -->