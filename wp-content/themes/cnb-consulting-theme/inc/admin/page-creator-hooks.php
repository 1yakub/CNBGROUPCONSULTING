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

// Also run on init to ensure pages exist (remove this after first run on production)
add_action('init', function() {
    if (!get_option('cnb_pages_created')) {
        cnb_create_all_pages();
        flush_rewrite_rules();
    }
});