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

/**
 * Register Services Custom Post Type
 */
function cnb_register_services_post_type() {
    $labels = array(
        'name'                  => _x('Services', 'Post Type General Name', 'cnb-consulting-theme'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'cnb-consulting-theme'),
        'menu_name'             => __('Services', 'cnb-consulting-theme'),
        'name_admin_bar'        => __('Service', 'cnb-consulting-theme'),
        'archives'              => __('Service Archives', 'cnb-consulting-theme'),
        'attributes'            => __('Service Attributes', 'cnb-consulting-theme'),
        'parent_item_colon'     => __('Parent Service:', 'cnb-consulting-theme'),
        'all_items'             => __('All Services', 'cnb-consulting-theme'),
        'add_new_item'          => __('Add New Service', 'cnb-consulting-theme'),
        'add_new'               => __('Add New', 'cnb-consulting-theme'),
        'new_item'              => __('New Service', 'cnb-consulting-theme'),
        'edit_item'             => __('Edit Service', 'cnb-consulting-theme'),
        'update_item'           => __('Update Service', 'cnb-consulting-theme'),
        'view_item'             => __('View Service', 'cnb-consulting-theme'),
        'view_items'            => __('View Services', 'cnb-consulting-theme'),
        'search_items'          => __('Search Service', 'cnb-consulting-theme'),
        'not_found'             => __('Not found', 'cnb-consulting-theme'),
        'not_found_in_trash'    => __('Not found in Trash', 'cnb-consulting-theme'),
        'featured_image'        => __('Featured Image', 'cnb-consulting-theme'),
        'set_featured_image'    => __('Set featured image', 'cnb-consulting-theme'),
        'remove_featured_image' => __('Remove featured image', 'cnb-consulting-theme'),
        'use_featured_image'    => __('Use as featured image', 'cnb-consulting-theme'),
        'insert_into_item'      => __('Insert into service', 'cnb-consulting-theme'),
        'uploaded_to_this_item' => __('Uploaded to this service', 'cnb-consulting-theme'),
        'items_list'            => __('Services list', 'cnb-consulting-theme'),
        'items_list_navigation' => __('Services list navigation', 'cnb-consulting-theme'),
        'filter_items_list'     => __('Filter services list', 'cnb-consulting-theme'),
    );

    $args = array(
        'label'                 => __('Service', 'cnb-consulting-theme'),
        'description'           => __('CNB Group Consulting Services', 'cnb-consulting-theme'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'taxonomies'            => array('service_category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array(
            'slug'              => 'services',
            'with_front'        => false,
        ),
    );

    register_post_type('cnb_service', $args);
}
add_action('init', 'cnb_register_services_post_type', 0);

/**
 * Register Service Categories Taxonomy
 */
function cnb_register_service_categories_taxonomy() {
    $labels = array(
        'name'                       => _x('Service Categories', 'Taxonomy General Name', 'cnb-consulting-theme'),
        'singular_name'              => _x('Service Category', 'Taxonomy Singular Name', 'cnb-consulting-theme'),
        'menu_name'                  => __('Service Categories', 'cnb-consulting-theme'),
        'all_items'                  => __('All Categories', 'cnb-consulting-theme'),
        'parent_item'                => __('Parent Category', 'cnb-consulting-theme'),
        'parent_item_colon'          => __('Parent Category:', 'cnb-consulting-theme'),
        'new_item_name'              => __('New Category Name', 'cnb-consulting-theme'),
        'add_new_item'               => __('Add New Category', 'cnb-consulting-theme'),
        'edit_item'                  => __('Edit Category', 'cnb-consulting-theme'),
        'update_item'                => __('Update Category', 'cnb-consulting-theme'),
        'view_item'                  => __('View Category', 'cnb-consulting-theme'),
        'separate_items_with_commas' => __('Separate categories with commas', 'cnb-consulting-theme'),
        'add_or_remove_items'        => __('Add or remove categories', 'cnb-consulting-theme'),
        'choose_from_most_used'      => __('Choose from the most used', 'cnb-consulting-theme'),
        'popular_items'              => __('Popular Categories', 'cnb-consulting-theme'),
        'search_items'               => __('Search Categories', 'cnb-consulting-theme'),
        'not_found'                  => __('Not Found', 'cnb-consulting-theme'),
        'no_terms'                   => __('No categories', 'cnb-consulting-theme'),
        'items_list'                 => __('Categories list', 'cnb-consulting-theme'),
        'items_list_navigation'      => __('Categories list navigation', 'cnb-consulting-theme'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array(
            'slug'                   => 'service-category',
            'with_front'             => false,
        ),
    );

    register_taxonomy('service_category', array('cnb_service'), $args);
}
add_action('init', 'cnb_register_service_categories_taxonomy', 0);

/**
 * Create default service categories
 */
function cnb_create_default_service_categories() {
    // Only run once
    if (get_option('cnb_default_categories_created')) {
        return;
    }

    $categories = array(
        'Company Formation' => 'Services related to company formation and registration',
        'Compliance & Tax' => 'Tax filing, compliance, and dissolution services',
        'Business Registration' => 'Business registration and documentation services',
        'Marketplace Setup' => 'Marketplace seller account setup services'
    );

    foreach ($categories as $name => $description) {
        if (!term_exists($name, 'service_category')) {
            wp_insert_term(
                $name,
                'service_category',
                array(
                    'description' => $description,
                    'slug' => sanitize_title($name)
                )
            );
        }
    }

    // Mark as created
    update_option('cnb_default_categories_created', true);
}
add_action('init', 'cnb_create_default_service_categories');

/**
 * Flush rewrite rules on activation
 */
function cnb_flush_rewrite_rules() {
    cnb_register_services_post_type();
    cnb_register_service_categories_taxonomy();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'cnb_flush_rewrite_rules');