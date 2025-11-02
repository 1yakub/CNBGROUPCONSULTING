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

// Temporary admin action to manually trigger page creation (call via /?cnb_recreate_pages=1)
add_action('admin_init', function () {
    if (!current_user_can('manage_options')) {
        return;
    }

    if (!isset($_GET['cnb_recreate_pages'])) {
        return;
    }

    cnb_create_all_pages();
    add_action('admin_notices', function () {
        echo '<div class="notice notice-success"><p>CNB pages recreated successfully.</p></div>';
    });
});