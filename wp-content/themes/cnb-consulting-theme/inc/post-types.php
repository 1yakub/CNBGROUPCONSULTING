<?php
/**
 * Custom Post Types Registration
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// No custom post types needed - using hard-coded pages for services
// All service content is managed through static page templates:
// - page-services.php (services overview)
// - page-company-formation.php, page-registered-agent.php, etc. (individual services)