<?php
/**
 * Assets Management
 * 
 * Handles enqueuing of scripts and styles with build system integration
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

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
    
    // Removed legacy CSS - using Tailwind build system only
    // Blog styles temporarily kept for blog pages (to be converted)
    if (is_home() || is_archive() || is_search()) {
        wp_enqueue_style(
            'cnb-consulting-blog',
            get_template_directory_uri() . '/assets/css/blog.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
    
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