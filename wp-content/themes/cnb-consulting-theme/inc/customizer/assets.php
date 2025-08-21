<?php
/**
 * Customizer Assets Management
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cnb_customize_preview_js() {
    wp_enqueue_script(
        'cnb-customizer',
        get_template_directory_uri() . '/assets/js/customizer.js',
        array('customize-preview'),
        '1.0.0',
        true
    );
}
add_action('customize_preview_init', 'cnb_customize_preview_js');