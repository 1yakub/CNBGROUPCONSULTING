<?php
/**
 * Customizer Panels Setup
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register customizer panels
 */
function cnb_customizer_add_panels($wp_customize) {
    // CNB Settings Panel
    $wp_customize->add_panel('cnb_settings', array(
        'title'       => __('CNB Settings', 'cnb-consulting-theme'),
        'description' => __('Customize various settings for the CNB Consulting theme', 'cnb-consulting-theme'),
        'priority'    => 10,
    ));
}
add_action('customize_register', 'cnb_customizer_add_panels', 5);