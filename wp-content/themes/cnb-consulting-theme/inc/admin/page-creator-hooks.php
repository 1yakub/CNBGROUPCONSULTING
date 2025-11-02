<?php
/**
 * Page Creator WordPress Hooks
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Ensure all required pages exist on theme initialization
add_action('init', function () {
    if (!get_option('cnb_pages_created')) {
        cnb_create_all_pages();
        flush_rewrite_rules();
    }
});