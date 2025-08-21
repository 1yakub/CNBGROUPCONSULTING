<?php
/**
 * Theme Filters
 * 
 * Custom filters for excerpts, body classes, and other modifications
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Custom excerpt length
 */
function cnb_consulting_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'cnb_consulting_excerpt_length');

/**
 * Custom excerpt more text
 */
function cnb_consulting_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'cnb_consulting_excerpt_more');

/**
 * Add custom body classes
 */
function cnb_consulting_body_classes($classes) {
    // Add page slug to body class
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    
    // Add mobile detection class (basic)
    if (wp_is_mobile()) {
        $classes[] = 'mobile-device';
    }
    
    return $classes;
}
add_filter('body_class', 'cnb_consulting_body_classes');