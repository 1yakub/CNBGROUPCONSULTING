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

// Load company data functions
require_once get_template_directory() . '/inc/functions/company-data.php';

// Load content helper functions
require_once get_template_directory() . '/inc/functions/content-helpers.php';

// Load format helper functions
require_once get_template_directory() . '/inc/functions/format-helpers.php';

// Load placeholder content functions
require_once get_template_directory() . '/inc/functions/placeholder-content.php';

// Load schema & SEO functions
require_once get_template_directory() . '/inc/functions/schema-seo.php';