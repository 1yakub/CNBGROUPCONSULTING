<?php
/**
 * Placeholder Content Functions
 * 
 * Functions for placeholder/development content like services, testimonials, FAQs
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Load modularized content functions
require_once get_template_directory() . '/inc/functions/content/hero-content.php';
require_once get_template_directory() . '/inc/functions/content/services-content.php';
require_once get_template_directory() . '/inc/functions/content/testimonials-content.php';
require_once get_template_directory() . '/inc/functions/content/process-content.php';
require_once get_template_directory() . '/inc/functions/content/faq-content.php';