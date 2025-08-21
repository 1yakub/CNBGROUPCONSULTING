<?php
/**
 * Theme Setup Functions
 * 
 * Core theme setup including theme supports, navigation menus, and content width
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function cnb_consulting_theme_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Add theme support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add theme support for editor styles
    add_theme_support('editor-styles');
    
    // Add theme support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'cnb-consulting-theme'),
        'footer' => __('Footer Navigation', 'cnb-consulting-theme'),
        'services' => __('Services Menu', 'cnb-consulting-theme'),
    ));
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'cnb_consulting_theme_setup');