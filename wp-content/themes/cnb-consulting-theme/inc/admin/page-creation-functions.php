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
function cnb_create_all_pages()
{
    $created_pages = get_option('cnb_pages_created', array());

    if ($created_pages === true || !is_array($created_pages)) {
        $created_pages = array();
    }

    // Get all page definitions
    $core_pages = cnb_get_core_pages();
    $service_pages = cnb_get_service_pages();
    $pages = array_merge($core_pages, $service_pages);

    $changes_made = false;

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

                $created_pages[$slug] = (int) $page_id;
                $changes_made = true;
                error_log("Created page: {$page_data['title']} (slug: {$slug}) with ID: $page_id");
            } else {
                error_log("Failed to create page: {$page_data['title']}");
            }
        } else {
            $created_pages[$slug] = (int) $existing_page->ID;

            if (isset($page_data['template'])) {
                $current_template = get_page_template_slug($existing_page->ID);

                if ($current_template !== $page_data['template']) {
                    update_post_meta($existing_page->ID, '_wp_page_template', $page_data['template']);
                    $changes_made = true;
                }
            }

            if ($slug === 'faq') {
                error_log(sprintf(
                    'Verified FAQ page exists (ID: %d, slug: %s, template: %s)',
                    (int) $existing_page->ID,
                    $existing_page->post_name,
                    get_page_template_slug($existing_page->ID) ?: 'default'
                ));
            }
        }
    }

    update_option('cnb_pages_created', $created_pages);

    // Flush rewrite rules only when changes were made
    if ($changes_made) {
        flush_rewrite_rules();
    }
}