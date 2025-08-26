<?php
/**
 * Image Management System for CNB Consulting Theme
 * Provides centralized image handling with placeholders and easy updates
 * 
 * This file loads all image helper components:
 * - Core image functions
 * - Placeholder functions
 * - Image library configuration
 * - Developer documentation
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Load all image helper components
require_once get_template_directory() . '/inc/image-helpers/core-functions.php';
require_once get_template_directory() . '/inc/image-helpers/image-library.php';
require_once get_template_directory() . '/inc/image-helpers/documentation.php';