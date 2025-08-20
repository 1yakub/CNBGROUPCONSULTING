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

<section class="py-16 bg-cnb-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            
            <div class="">
                <div class="text-4xl md:text-5xl font-bold mb-2"><?php echo esc_html($company_stats['clients_served']); ?></div>
                <div class="text-blue-100 text-sm md:text-base"><?php _e('Clients Served', 'cnb-consulting-theme'); ?></div>
            </div>
            
            <div class="">
                <div class="text-4xl md:text-5xl font-bold mb-2"><?php echo esc_html($company_stats['success_rate']); ?></div>
                <div class="text-blue-100 text-sm md:text-base"><?php _e('Success Rate', 'cnb-consulting-theme'); ?></div>
            </div>
            
            <div class="">
                <div class="text-4xl md:text-5xl font-bold mb-2"><?php echo esc_html($company_stats['years_business']); ?></div>
                <div class="text-blue-100 text-sm md:text-base"><?php _e('Years in Business', 'cnb-consulting-theme'); ?></div>
            </div>
            
            <div class="">
                <div class="text-4xl md:text-5xl font-bold mb-2"><?php echo esc_html($company_stats['countries_served']); ?></div>
                <div class="text-blue-100 text-sm md:text-base"><?php _e('Countries Served', 'cnb-consulting-theme'); ?></div>
            </div>
            
        </div>
        
    </div>
</section>