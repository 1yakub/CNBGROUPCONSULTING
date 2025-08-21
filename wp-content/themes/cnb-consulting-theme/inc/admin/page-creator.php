<?php
/**
 * Page Creator System
 * 
 * Automatically creates required WordPress pages on theme activation
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Load page creation components
require_once get_template_directory() . '/inc/admin/page-definitions/core-pages.php';
require_once get_template_directory() . '/inc/admin/page-definitions/service-pages.php';
require_once get_template_directory() . '/inc/admin/page-creation-functions.php';
require_once get_template_directory() . '/inc/admin/page-creator-hooks.php';