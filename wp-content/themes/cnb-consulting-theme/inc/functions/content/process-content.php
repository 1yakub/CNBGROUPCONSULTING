<?php
/**
 * Process Steps Content Functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get business formation process steps
 */
function cnb_get_process_steps() {
    return array(
        array(
            'number' => '1',
            'title' => __('Consultation', 'cnb-consulting-theme'),
            'description' => __('Free consultation to understand your business needs and goals for the US market.', 'cnb-consulting-theme')
        ),
        array(
            'number' => '2',
            'title' => __('Documentation', 'cnb-consulting-theme'),
            'description' => __('We prepare and file all necessary documents for your business formation.', 'cnb-consulting-theme')
        ),
        array(
            'number' => '3',
            'title' => __('Compliance', 'cnb-consulting-theme'),
            'description' => __('Ensure your business meets all federal and state compliance requirements.', 'cnb-consulting-theme')
        ),
        array(
            'number' => '4',
            'title' => __('Launch', 'cnb-consulting-theme'),
            'description' => __('Your US business is ready to operate and dominate the drop shipping market.', 'cnb-consulting-theme')
        )
    );
}