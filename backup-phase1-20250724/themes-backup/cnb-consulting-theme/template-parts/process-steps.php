<?php
/**
 * Process Steps Template Part
 * 
 * Displays the 4-step business formation process
 * 
 * @package CNB_Consulting_Theme
 */

$process_steps = cnb_get_process_steps();
?>

<section class="process-section">
    <div class="container">
        
        <header class="section-header">
            <h2 class="section-title">
                <?php _e('How We Work', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="section-subtitle">
                <?php _e('Our simple 4-step process gets your US business up and running quickly and compliantly', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="process-steps">
            <?php foreach ($process_steps as $index => $step) : ?>
                <div class="process-step">
                    
                    <div class="step-number">
                        <?php echo esc_html($step['number']); ?>
                    </div>
                    
                    <h3 class="step-title">
                        <?php echo esc_html($step['title']); ?>
                    </h3>
                    
                    <p class="step-description">
                        <?php echo esc_html($step['description']); ?>
                    </p>
                    
                    <?php if ($index < count($process_steps) - 1) : ?>
                        <div class="step-connector">
                            <span class="connector-arrow">→</span>
                        </div>
                    <?php endif; ?>
                    
                </div><!-- .process-step -->
            <?php endforeach; ?>
        </div><!-- .process-steps -->
        
        <div class="process-footer">
            <div class="process-cta">
                <h3><?php _e('Ready to Get Started?', 'cnb-consulting-theme'); ?></h3>
                <p><?php _e('Schedule your free consultation today and take the first step toward US business success.', 'cnb-consulting-theme'); ?></p>
                <div class="process-actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-lg">
                        <?php _e('Schedule Free Consultation', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-outline btn-lg">
                        <?php _e('View All Services', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
        
    </div><!-- .container -->
</section><!-- .process-section -->