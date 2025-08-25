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
 * Load single FAQ category - optimized version
 * Only loads the specific file needed instead of all 16 files
 */
function cnb_get_single_faq_category($category)
{
    static $loaded = array();
    
    // Return cached if exists
    if (isset($loaded[$category])) {
        return $loaded[$category];
    }
    
    // Security: Validate category format
    if (!preg_match('/^[a-z0-9-]+$/', $category)) {
        $loaded[$category] = false;
        return false;
    }
    
    $file = get_template_directory() . '/inc/functions/content/faqs/' . $category . '.php';
    
    if (file_exists($file)) {
        $data = include $file;
        if (is_array($data) && isset($data['title']) && isset($data['items'])) {
            $loaded[$category] = $data;
            return $data;
        }
    }
    
    $loaded[$category] = false;
    return false;
}

/**
 * Get FAQs for specific category
 * Optimized to load only the needed file instead of all 16
 */
function cnb_get_faqs($category)
{
    $data = cnb_get_single_faq_category($category);
    return ($data && isset($data['items'])) ? $data['items'] : array();
}

/**
 * Get FAQ category title
 * Optimized to load only the needed file instead of all 16
 */
function cnb_get_faq_category_title($category)
{
    $data = cnb_get_single_faq_category($category);
    return ($data && isset($data['title'])) ? $data['title'] : '';
}

/**
 * Get list of FAQ categories
 */
function cnb_get_faq_categories()
{
    return array_keys(cnb_get_all_faqs());
}

