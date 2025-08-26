<?php
/**
 * Template Helper Functions for CNB Consulting Theme
 * 
 * This file loads all modularized template functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/functions/company-data.php';
require_once get_template_directory() . '/inc/functions/content-helpers.php';
require_once get_template_directory() . '/inc/functions/format-helpers.php';
require_once get_template_directory() . '/inc/functions/placeholder-content.php';
require_once get_template_directory() . '/inc/functions/schema-seo.php';
require_once get_template_directory() . '/inc/functions/content/faq-data.php';
require_once get_template_directory() . '/inc/functions/faq-schema.php';