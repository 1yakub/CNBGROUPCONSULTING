<?php
/**
 * Search Suggestions Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Suggested Actions for Search -->
<div class="search-suggestions">
    <h3><?php _e('You might be interested in:', 'cnb-consulting-theme'); ?></h3>
    <ul class="suggestions-list">
        <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php _e('Browse Our Services', 'cnb-consulting-theme'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>"><?php _e('Learn About CNB Group Consulting', 'cnb-consulting-theme'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php _e('Contact Us for Help', 'cnb-consulting-theme'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Return to Homepage', 'cnb-consulting-theme'); ?></a></li>
    </ul>
</div>