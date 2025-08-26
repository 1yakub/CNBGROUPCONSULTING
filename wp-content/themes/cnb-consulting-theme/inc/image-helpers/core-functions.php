<?php
/**
 * Core Image Functions for CNB Consulting Theme
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get optimized image
 */
function cnb_get_image($image_key, $size = 'full', $attributes = array()) {
    $images = cnb_get_image_library();
    
    if (!isset($images[$image_key])) {
        return ''; // Return empty if image not found
    }
    
    $image_data = $images[$image_key];
    $src = $image_data['url'];
    $alt = $image_data['alt'];
    
    // Build attributes
    $default_attrs = array(
        'src' => $src,
        'alt' => $alt,
        'loading' => 'lazy',
        'class' => 'cnb-image'
    );
    
    $attrs = array_merge($default_attrs, $attributes);
    $attr_string = '';
    
    foreach ($attrs as $key => $value) {
        $attr_string .= ' ' . esc_attr($key) . '="' . esc_attr($value) . '"';
    }
    
    return '<img' . $attr_string . ' />';
}

/**
 * Get background image style with overlay
 */
function cnb_get_bg_image($image_key, $overlay_opacity = 0.6, $overlay_color = 'rgba(0,0,0,') {
    $images = cnb_get_image_library();
    
    if (!isset($images[$image_key])) {
        return ''; // Return empty if image not found
    }
    
    $bg_url = $images[$image_key]['url'];
    $overlay = $overlay_color . $overlay_opacity . ')';
    
    return 'style="background: linear-gradient(' . $overlay . ', ' . $overlay . '), url(\'' . esc_url($bg_url) . '\'); background-size: cover; background-position: center; background-repeat: no-repeat;"';
}

/**
 * Output optimized background section
 */
function cnb_bg_section_start($image_key, $classes = '', $overlay_opacity = 0.6) {
    echo '<section class="' . esc_attr($classes) . '" ' . cnb_get_bg_image($image_key, $overlay_opacity) . '>';
}