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

<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <header class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php _e('How We Work', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <?php _e('Our simple 4-step process gets your US business up and running quickly and compliantly', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <?php foreach ($process_steps as $index => $step) : ?>
                <div class="text-center relative">
                    
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6">
                        <?php echo esc_html($step['number']); ?>
                    </div>
                    
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">
                        <?php echo esc_html($step['title']); ?>
                    </h3>
                    
                    <p class="text-gray-600 leading-relaxed">
                        <?php echo esc_html($step['description']); ?>
                    </p>
                    
                    <?php if ($index < count($process_steps) - 1) : ?>
                        <div class="hidden lg:block absolute top-8 -right-4 text-cnb-primary text-2xl">
                            →
                        </div>
                    <?php endif; ?>
                    
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="bg-white rounded-lg p-8 text-center shadow-lg">
            <div class="">
                <h3 class="text-2xl font-bold text-gray-900 mb-4"><?php _e('Ready to Get Started?', 'cnb-consulting-theme'); ?></h3>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto"><?php _e('Schedule your free consultation today and take the first step toward US business success.', 'cnb-consulting-theme'); ?></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="bg-cnb-primary text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition">
                        <?php _e('Schedule Free Consultation', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="border-2 border-cnb-primary text-cnb-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                        <?php _e('View All Services', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</section>