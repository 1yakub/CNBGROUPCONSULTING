<?php
/**
 * Custom Logo Setup
 * 
 * Configuration for custom logo support
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Custom logo setup
 */
function cnb_consulting_custom_logo_setup() {
    $defaults = array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'cnb_consulting_custom_logo_setup');