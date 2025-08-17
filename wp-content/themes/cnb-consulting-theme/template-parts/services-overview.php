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

<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <header class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php _e('Our Core Services', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <?php _e('Complete business formation and marketplace setup services for international entrepreneurs', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($services as $service) : ?>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow p-6 text-center">
                    
                    <div class="text-5xl mb-6">
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
                    
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">
                        <?php echo esc_html($service['title']); ?>
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        <?php echo esc_html($service['description']); ?>
                    </p>
                    
                    <div class="mb-6">
                        <a href="https://calendly.com/yakubhossain/15min" target="_blank" rel="noopener" class="inline-flex items-center px-6 py-3 bg-cnb-secondary text-gray-900 rounded-lg font-semibold hover:bg-yellow-400 hover:scale-105 transition-all shadow-lg">
                            <span>Book Consultation</span>
                            <!-- Heroicon: arrow-right -->
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="">
                        <a href="<?php echo esc_url($service['link']); ?>" class="text-cnb-primary font-medium hover:text-blue-700 transition inline-flex items-center">
                            <?php _e('Get Started', 'cnb-consulting-theme'); ?>
                        </a>
                    </div>
                    
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-gray-600">
                <?php _e('Need something else?', 'cnb-consulting-theme'); ?>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="text-cnb-primary font-medium hover:text-blue-700 transition ml-2">
                    <?php _e('View All 13 Services →', 'cnb-consulting-theme'); ?>
                </a>
            </p>
        </div>
        
    </div>
</section>