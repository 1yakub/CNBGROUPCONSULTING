<?php
/**
 * CNB Consulting Theme Functions
 * 
 * @package CNB_Consulting_Theme
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function cnb_consulting_theme_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Add theme support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add theme support for editor styles
    add_theme_support('editor-styles');
    
    // Add theme support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'cnb-consulting-theme'),
        'footer' => __('Footer Navigation', 'cnb-consulting-theme'),
        'services' => __('Services Menu', 'cnb-consulting-theme'),
    ));
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'cnb_consulting_theme_setup');

/**
 * Enqueue scripts and styles - Professional Build System
 */
function cnb_consulting_enqueue_scripts() {
    // Load build manifest for asset loading
    $manifest_path = get_template_directory() . '/dist/manifest.json';
    
    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);
        
        // Enqueue built Tailwind CSS with all components
        if (isset($manifest['src/style.css'])) {
            wp_enqueue_style(
                'cnb-consulting-build-css',
                get_template_directory_uri() . '/dist/' . $manifest['src/style.css']['file'],
                array(),
                filemtime(get_template_directory() . '/dist/' . $manifest['src/style.css']['file']) // File modification time for cache busting
            );
        }
        
        // Enqueue built JavaScript with Alpine.js
        if (isset($manifest['src/main.js'])) {
            wp_enqueue_script(
                'cnb-consulting-build-js',
                get_template_directory_uri() . '/dist/' . $manifest['src/main.js']['file'],
                array(),
                filemtime(get_template_directory() . '/dist/' . $manifest['src/main.js']['file']), // File modification time for cache busting
                true
            );
        }
    } else {
        // Fallback to development assets if build doesn't exist
        wp_enqueue_style(
            'cnb-consulting-dev-css',
            get_template_directory_uri() . '/src/style.css',
            array(),
            wp_get_theme()->get('Version')
        );
        
        wp_enqueue_script(
            'cnb-consulting-dev-js',
            get_template_directory_uri() . '/src/main.js',
            array(),
            wp_get_theme()->get('Version'),
            true
        );
    }
    
    // Keep existing CSS files for backward compatibility during transition
    wp_enqueue_style(
        'cnb-consulting-legacy-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_style(
        'cnb-consulting-legacy-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array('cnb-consulting-legacy-main'),
        wp_get_theme()->get('Version')
    );
    
    // Disabled: wp_enqueue_style(
    //     'cnb-consulting-legacy-responsive',
    //     get_template_directory_uri() . '/assets/css/responsive.css',
    //     array('cnb-consulting-legacy-components'),
    //     wp_get_theme()->get('Version')
    // );
    
    // Localize script for AJAX (now using build system JS)
    wp_localize_script('cnb-consulting-build-js', 'cnb_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('cnb_ajax_nonce'),
    ));
    
    // Add comment reply script on singular posts
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'cnb_consulting_enqueue_scripts');

/**
 * Register widget areas
 */
function cnb_consulting_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'cnb-consulting-theme'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in the first footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'cnb-consulting-theme'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in the second footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 3', 'cnb-consulting-theme'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in the third footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 4', 'cnb-consulting-theme'),
        'id'            => 'footer-4',
        'description'   => __('Add widgets here to appear in the fourth footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'cnb_consulting_widgets_init');

/**
 * Custom excerpt length
 */
function cnb_consulting_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'cnb_consulting_excerpt_length');

/**
 * Custom excerpt more text
 */
function cnb_consulting_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'cnb_consulting_excerpt_more');

/**
 * Add custom body classes
 */
function cnb_consulting_body_classes($classes) {
    // Add page slug to body class
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    
    // Add mobile detection class (basic)
    if (wp_is_mobile()) {
        $classes[] = 'mobile-device';
    }
    
    return $classes;
}
add_filter('body_class', 'cnb_consulting_body_classes');

// Contact and company information functions are now in inc/template-functions.php

/**
 * Include additional files
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-functions.php';

// Phase 3: Services Architecture includes
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/meta-boxes.php';

/**
 * Security enhancements
 */
// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Remove Windows Live Writer manifest link
remove_action('wp_head', 'wlwmanifest_link');

// Remove RSD link
remove_action('wp_head', 'rsd_link');

/**
 * Performance optimizations
 */
// Remove query strings from static resources
function cnb_remove_script_version($src) {
    $parts = explode('?ver', $src);
    return $parts[0];
}
add_filter('script_loader_src', 'cnb_remove_script_version', 15, 1);
add_filter('style_loader_src', 'cnb_remove_script_version', 15, 1);

/**
 * Custom logo setup
 */
function cnb_consulting_custom_logo_setup() {
    $defaults = array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'cnb_consulting_custom_logo_setup');

// Removed custom post type sample creation function
// All services are now managed through hard-coded page templates

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
    
    // Define all pages with their content
    $pages = array(
        // Core business pages
        'services' => array(
            'title' => 'Services',
            'content' => 'Our comprehensive business services help you establish and grow your company in the United States.',
            'template' => 'page-services.php'  // This will use Template Name: Services Page
        ),
        'about' => array(
            'title' => 'About Us',
            'content' => 'CNB Group Consulting is your trusted partner for U.S. business formation and compliance services.',
            'template' => 'page-about.php'
        ),
        'contact' => array(
            'title' => 'Contact',
            'content' => 'Get in touch with our expert team for professional business consultation and support.',
            'template' => 'page-contact.php'
        ),
        
        // All 13 service pages
        'company-formation' => array(
            'title' => 'U.S. Company Formation',
            'content' => 'Start your American business dream with our comprehensive U.S. company formation service.',
            'template' => 'page-company-formation.php'
        ),
        'ein-service' => array(
            'title' => 'EIN Service',
            'content' => 'Get your Federal Employer Identification Number (EIN) quickly and easily.',
            'template' => 'page-ein-service.php'
        ),
        'itin-service' => array(
            'title' => 'ITIN Service',
            'content' => 'Obtain your Individual Taxpayer Identification Number for tax purposes.',
            'template' => 'page-itin-service.php'
        ),
        'registered-agent' => array(
            'title' => 'US Registered Agent',
            'content' => 'Professional registered agent services for your U.S. business compliance.',
            'template' => 'page-registered-agent.php'
        ),
        'tax-filing' => array(
            'title' => 'US Tax Filing Return',
            'content' => 'Expert tax filing services for individuals and businesses.',
            'template' => 'page-tax-filing.php'
        ),
        'duns-number' => array(
            'title' => 'DUNS Number',
            'content' => 'Get your DUNS number for business credit and government contracting.',
            'template' => 'page-duns-number.php'
        ),
        'boi-filing' => array(
            'title' => 'BOI Filing',
            'content' => 'Beneficial Ownership Information filing for FinCEN compliance.',
            'template' => 'page-boi-filing.php'
        ),
        'company-dissolution' => array(
            'title' => 'Company Dissolution',
            'content' => 'Professional company dissolution services for business closure.',
            'template' => 'page-company-dissolution.php'
        ),
        'amazon-seller' => array(
            'title' => 'Amazon Seller Account',
            'content' => 'Complete Amazon seller account setup and management services.',
            'template' => 'page-amazon-seller.php'
        ),
        'walmart-seller' => array(
            'title' => 'Walmart Seller Account',
            'content' => 'Professional Walmart marketplace seller account setup.',
            'template' => 'page-walmart-seller.php'
        ),
        'resale-certificate' => array(
            'title' => 'US Resale Certificate',
            'content' => 'Obtain resale certificates for tax-exempt wholesale purchases.',
            'template' => 'page-resale-certificate.php'
        ),
        'ecommerce-registration' => array(
            'title' => 'E-commerce Registration',
            'content' => 'Complete e-commerce business registration and setup services.',
            'template' => 'page-ecommerce-registration.php'
        ),
        'lease-agreement' => array(
            'title' => 'US Lease Agreement',
            'content' => 'Professional lease agreement preparation and review services.',
            'template' => 'page-lease-agreement.php'
        )
    );
    
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

/**
 * Theme activation setup
 */
function cnb_consulting_theme_activation() {
    // Set default customizer values on theme activation
    set_theme_mod('cnb_primary_color', '#1a365d');
    set_theme_mod('cnb_secondary_color', '#f6ad55');
    
    // Create all required pages
    cnb_create_all_pages();
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'cnb_consulting_theme_activation');

// Also run on init to ensure pages exist (remove this after first run on production)
add_action('init', function() {
    if (!get_option('cnb_pages_created')) {
        cnb_create_all_pages();
        flush_rewrite_rules();
    }
});