<?php
/**
 * Image Management System for CNB Consulting Theme
 * Provides centralized image handling with placeholders and easy updates
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get optimized image with fallback to placeholder
 */
function cnb_get_image($image_key, $size = 'full', $attributes = array()) {
    $images = cnb_get_image_library();
    
    if (!isset($images[$image_key])) {
        return cnb_get_placeholder_image($size, $attributes);
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
        $bg_url = cnb_get_placeholder_bg_url();
    } else {
        $bg_url = $images[$image_key]['url'];
    }
    
    $overlay = $overlay_color . $overlay_opacity . ')';
    
    return 'style="background: linear-gradient(' . $overlay . ', ' . $overlay . '), url(\'' . esc_url($bg_url) . '\'); background-size: cover; background-position: center; background-repeat: no-repeat;"';
}

/**
 * Image library - centralized image management
 * Replace URLs with your actual images
 */
function cnb_get_image_library() {
    return array(
        // Hero Section Images
        'hero_main' => array(
            'url' => get_template_directory_uri() . '/assets/images/business-formation-hero.jpg',
            'alt' => 'Professional business formation consultation',
            'size' => '1920x1080'
        ),
        
        // Service Section Images
        'company_formation' => array(
            'url' => get_template_directory_uri() . '/assets/images/company-formation.jpg',
            'alt' => 'USA company formation documents and legal papers',
            'size' => '600x400'
        ),
        'banking_services' => array(
            'url' => get_template_directory_uri() . '/assets/images/business-banking.jpg',
            'alt' => 'Business banking and financial services',
            'size' => '600x400'
        ),
        'tax_services' => array(
            'url' => get_template_directory_uri() . '/assets/images/tax-filing.jpg',
            'alt' => 'Professional tax filing and compliance services',
            'size' => '600x400'
        ),
        
        // Background Images
        'stats_bg' => array(
            'url' => get_template_directory_uri() . '/assets/images/office-background.jpg',
            'alt' => 'Modern business office environment',
            'size' => '1920x800'
        ),
        'process_bg' => array(
            'url' => get_template_directory_uri() . '/assets/images/consultation-meeting.jpg',
            'alt' => 'Business consultation meeting',
            'size' => '1920x800'
        ),
        'cta_bg' => array(
            'url' => get_template_directory_uri() . '/assets/images/success-handshake.jpg',
            'alt' => 'Successful business partnership handshake',
            'size' => '1920x600'
        ),
        
        // Team/Testimonial Images
        'client_1' => array(
            'url' => 'https://ui-avatars.com/api/?name=Client+One&background=1e3a8a&color=fff&size=150',
            'alt' => 'Happy client testimonial photo',
            'size' => '150x150'
        ),
        'client_2' => array(
            'url' => 'https://ui-avatars.com/api/?name=Client+Two&background=1e3a8a&color=fff&size=150',
            'alt' => 'Satisfied business owner testimonial',
            'size' => '150x150'
        ),
        
        // Icon Images (for premium look)
        'icon_shield' => array(
            'url' => get_template_directory_uri() . '/assets/images/icons/security-shield.svg',
            'alt' => 'Security and trust icon',
            'size' => '64x64'
        ),
        'icon_growth' => array(
            'url' => get_template_directory_uri() . '/assets/images/icons/business-growth.svg',
            'alt' => 'Business growth chart icon',
            'size' => '64x64'
        ),
    );
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

/**
 * Output optimized background section
 */
function cnb_bg_section_start($image_key, $classes = '', $overlay_opacity = 0.6) {
    echo '<section class="' . esc_attr($classes) . '" ' . cnb_get_bg_image($image_key, $overlay_opacity) . '>';
}

/**
 * Get image documentation for developers
 */
function cnb_get_image_requirements() {
    return array(
        'hero_main' => array(
            'recommended_size' => '1920x1080px',
            'format' => 'JPG (optimized)',
            'description' => 'High-quality business/office setting, professional consultation scene',
            'sources' => 'Unsplash, Pexels keywords: business consultation, office, handshake'
        ),
        'service_images' => array(
            'recommended_size' => '600x400px',
            'format' => 'JPG or WebP',
            'description' => 'Clean, professional service-related imagery',
            'sources' => 'Stock photos related to legal documents, banking, tax preparation'
        ),
        'background_images' => array(
            'recommended_size' => '1920x800px',
            'format' => 'JPG (optimized for web)',
            'description' => 'Subtle, professional backgrounds with good contrast for text overlay',
            'sources' => 'Blurred office settings, city skylines, abstract professional patterns'
        )
    );
}