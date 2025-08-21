<?php
/**
 * Performance Optimizations
 * 
 * Performance enhancements for the theme
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Performance optimizations
 */

// Remove query strings from static resources
function cnb_remove_script_version($src) {
    $parts = explode('?ver', $src);
    return $parts[0];
}
add_filter('script_loader_src', 'cnb_remove_script_version', 15, 1);
add_filter('style_loader_src', 'cnb_remove_script_version', 15, 1);