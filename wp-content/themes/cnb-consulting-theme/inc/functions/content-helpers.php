<?php
/**
 * Content Helper Functions
 * 
 * Functions for text processing, content utilities, and display helpers
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Truncate text to specified length
 */
function cnb_truncate_text($text, $length = 100, $suffix = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }
    
    return substr($text, 0, $length) . $suffix;
}

/**
 * Get reading time estimate
 */
function cnb_get_reading_time($content) {
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Average reading speed
    
    if ($reading_time < 1) {
        return '1 min read';
    }
    
    return $reading_time . ' min read';
}

/**
 * Get current page title
 */
function cnb_get_page_title() {
    if (is_home()) {
        return get_bloginfo('name');
    } elseif (is_archive()) {
        return get_the_archive_title();
    } elseif (is_search()) {
        return sprintf(__('Search Results for: %s', 'cnb-consulting-theme'), get_search_query());
    } elseif (is_404()) {
        return __('Page Not Found', 'cnb-consulting-theme');
    } else {
        return get_the_title();
    }
}

/**
 * Sanitize HTML content
 */
function cnb_sanitize_html($content) {
    $allowed_html = array(
        'p' => array(),
        'br' => array(),
        'strong' => array(),
        'em' => array(),
        'a' => array(
            'href' => array(),
            'title' => array(),
            'target' => array()
        ),
        'ul' => array(),
        'ol' => array(),
        'li' => array(),
        'h1' => array(),
        'h2' => array(),
        'h3' => array(),
        'h4' => array(),
        'h5' => array(),
        'h6' => array()
    );
    
    return wp_kses($content, $allowed_html);
}