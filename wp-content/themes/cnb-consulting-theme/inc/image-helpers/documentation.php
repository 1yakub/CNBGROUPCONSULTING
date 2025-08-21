<?php
/**
 * Image Documentation for CNB Consulting Theme
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
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