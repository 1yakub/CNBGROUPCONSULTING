<?php
/**
 * CNB Consulting Theme Functions
 * 
 * This file loads all theme functionality from organized modules
 * 
 * @package CNB_Consulting_Theme
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Core theme functionality
 */
require get_template_directory() . '/inc/core/theme-setup.php';
require get_template_directory() . '/inc/core/assets.php';
require get_template_directory() . '/inc/core/widgets.php';
require get_template_directory() . '/inc/core/security.php';

/**
 * Functions and filters
 */
require get_template_directory() . '/inc/functions/filters.php';
require get_template_directory() . '/inc/functions/performance.php';
require get_template_directory() . '/inc/functions/logo.php';

/**
 * Admin functionality
 */
require get_template_directory() . '/inc/admin/page-creator.php';
require get_template_directory() . '/inc/admin/activation.php';

/**
 * Existing includes (customizer, template functions, post types)
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/meta-boxes.php';