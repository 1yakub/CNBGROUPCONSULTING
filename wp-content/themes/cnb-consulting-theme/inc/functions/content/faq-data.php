<?php
/**
 * FAQ Data Management - Modular Loader
 * Dynamically loads FAQ content from individual module files
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get all FAQ data organized by category
 * Dynamically loads from modular files in the faqs directory
 */
function cnb_get_all_faqs()
{
    static $faqs = null;

    // Return cached data if already loaded
    if ($faqs !== null) {
        return $faqs;
    }

    $faqs = array();
    $faq_dir = get_template_directory() . '/inc/functions/content/faqs/';

    // Get all PHP files in the faqs directory
    $files = glob($faq_dir . '*.php');

    if ($files) {
        foreach ($files as $file) {
            // Get category name from filename
            $category = basename($file, '.php');

            // Load the FAQ data from the file
            $faq_data = include $file;

            // Validate the data structure
            if (is_array($faq_data) && isset($faq_data['title']) && isset($faq_data['items'])) {
                $faqs[$category] = $faq_data;
            }
        }
    }

    return $faqs;
}

/**
 * Get FAQs for specific category
 */
function cnb_get_faqs($category)
{
    $all_faqs = cnb_get_all_faqs();
    return isset($all_faqs[$category]) ? $all_faqs[$category]['items'] : array();
}

/**
 * Get FAQ category title
 */
function cnb_get_faq_category_title($category)
{
    $all_faqs = cnb_get_all_faqs();
    return isset($all_faqs[$category]) ? $all_faqs[$category]['title'] : '';
}

/**
 * Get list of FAQ categories
 */
function cnb_get_faq_categories()
{
    return array_keys(cnb_get_all_faqs());
}

// Backward compatibility function removed - use cnb_get_faqs('homepage') directly