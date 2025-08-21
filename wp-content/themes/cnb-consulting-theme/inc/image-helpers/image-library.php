<?php
/**
 * Image Library for CNB Consulting Theme
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
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