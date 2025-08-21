<?php
/**
 * Page Creation Functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create all required WordPress pages
 */
function cnb_create_all_pages() {
    // Force recreation by removing the flag temporarily
    // delete_option('cnb_pages_created'); // Uncomment to force recreation
    
    // Only run once
    if (get_option('cnb_pages_created')) {
        return;
    }
    
    // Get all page definitions
    $core_pages = cnb_get_core_pages();
    $service_pages = cnb_get_service_pages();
    $pages = array_merge($core_pages, $service_pages);
    
    foreach ($pages as $slug => $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($slug);
        
        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title' => $page_data['title'],
                'post_content' => $page_data['content'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_name' => $slug,
                'post_author' => 1
            ));
            
            if ($page_id && !is_wp_error($page_id)) {
                // Set custom template if specified
                if (isset($page_data['template'])) {
                    update_post_meta($page_id, '_wp_page_template', $page_data['template']);
                }
                
                error_log("Created page: {$page_data['title']} with ID: $page_id");
            } else {
                error_log("Failed to create page: {$page_data['title']}");
            }
        }
    }
    
    // Mark as created
    update_option('cnb_pages_created', true);
    
    // Flush rewrite rules to ensure permalinks work
    flush_rewrite_rules();
}