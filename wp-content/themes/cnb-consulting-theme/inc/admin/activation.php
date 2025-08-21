<?php
/**
 * Theme Activation Functions
 * 
 * Functions that run when the theme is activated
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme activation setup
 */
function cnb_consulting_theme_activation() {
    // Set default customizer values on theme activation
    set_theme_mod('cnb_primary_color', '#1a365d');
    set_theme_mod('cnb_secondary_color', '#f6ad55');
    
    // Create all required pages
    cnb_create_all_pages();
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'cnb_consulting_theme_activation');