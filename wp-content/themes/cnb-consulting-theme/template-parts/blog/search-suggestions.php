<?php
/**
 * Search Suggestions Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Suggested Actions for Search -->
<div class="mt-8">
    <h3 class="text-lg font-semibold text-gray-800 mb-4"><?php _e('You might be interested in:', 'cnb-consulting-theme'); ?></h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 max-w-xl mx-auto">
        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="block p-3 bg-gray-50 rounded-md text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">
            <?php _e('Browse Our Services', 'cnb-consulting-theme'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="block p-3 bg-gray-50 rounded-md text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">
            <?php _e('Learn About CNB Group Consulting', 'cnb-consulting-theme'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="block p-3 bg-gray-50 rounded-md text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">
            <?php _e('Contact Us for Help', 'cnb-consulting-theme'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="block p-3 bg-gray-50 rounded-md text-gray-700 hover:bg-gray-100 hover:text-blue-600 transition-colors">
            <?php _e('Return to Homepage', 'cnb-consulting-theme'); ?>
        </a>
    </div>
</div>