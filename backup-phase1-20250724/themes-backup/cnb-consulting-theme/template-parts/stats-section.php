<?php
/**
 * Statistics Section Template Part
 * 
 * Displays company statistics in a prominent banner
 * 
 * @package CNB_Consulting_Theme
 */

$company_stats = cnb_get_company_info();
?>

<section class="stats-section">
    <div class="container">
        
        <div class="stats-grid">
            
            <div class="stat-item">
                <div class="stat-number"><?php echo esc_html($company_stats['clients_served']); ?></div>
                <div class="stat-label"><?php _e('Clients Served', 'cnb-consulting-theme'); ?></div>
            </div>
            
            <div class="stat-item">
                <div class="stat-number"><?php echo esc_html($company_stats['success_rate']); ?></div>
                <div class="stat-label"><?php _e('Success Rate', 'cnb-consulting-theme'); ?></div>
            </div>
            
            <div class="stat-item">
                <div class="stat-number"><?php echo esc_html($company_stats['years_business']); ?></div>
                <div class="stat-label"><?php _e('Years in Business', 'cnb-consulting-theme'); ?></div>
            </div>
            
            <div class="stat-item">
                <div class="stat-number"><?php echo esc_html($company_stats['countries_served']); ?></div>
                <div class="stat-label"><?php _e('Countries Served', 'cnb-consulting-theme'); ?></div>
            </div>
            
        </div><!-- .stats-grid -->
        
    </div><!-- .container -->
</section><!-- .stats-section -->