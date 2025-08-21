<?php
/**
 * Placeholder Image Functions for CNB Consulting Theme
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get placeholder image for development
 */
function cnb_get_placeholder_image($size = 'full', $attributes = array()) {
    $dimensions = cnb_get_placeholder_dimensions($size);
    $width = $dimensions['width'];
    $height = $dimensions['height'];
    
    $placeholder_url = "https://via.placeholder.com/{$width}x{$height}/1a365d/ffffff?text=CNB+Image";
    
    $default_attrs = array(
        'src' => $placeholder_url,
        'alt' => 'CNB Consulting placeholder image',
        'loading' => 'lazy',
        'class' => 'cnb-placeholder-image'
    );
    
    $attrs = array_merge($default_attrs, $attributes);
    $attr_string = '';
    
    foreach ($attrs as $key => $value) {
        $attr_string .= ' ' . esc_attr($key) . '="' . esc_attr($value) . '"';
    }
    
    return '<img' . $attr_string . ' />';
}

/**
 * Get placeholder background URL
 */
function cnb_get_placeholder_bg_url($width = 1920, $height = 800) {
    return "https://via.placeholder.com/{$width}x{$height}/1a365d/ffffff?text=CNB+Background";
}

/**
 * Get dimensions for different sizes
 */
function cnb_get_placeholder_dimensions($size) {
    $sizes = array(
        'thumbnail' => array('width' => 150, 'height' => 150),
        'medium' => array('width' => 600, 'height' => 400),
        'large' => array('width' => 1024, 'height' => 683),
        'full' => array('width' => 1920, 'height' => 1080),
        'hero' => array('width' => 1920, 'height' => 800),
        'card' => array('width' => 400, 'height' => 300),
    );
    
    return isset($sizes[$size]) ? $sizes[$size] : $sizes['full'];
}