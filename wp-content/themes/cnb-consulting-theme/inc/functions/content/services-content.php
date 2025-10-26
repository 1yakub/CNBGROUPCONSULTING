<?php
/**
 * Services Content Functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get homepage services configuration
 */
function cnb_get_placeholder_services()
{
    return array(
        array(
            'title' => __('BUSINESS INCORPORATION', 'cnb-consulting-theme'),
            'description' => __('Launch Your Domestic U.S. Entity with Confidence', 'cnb-consulting-theme'),
            'price' => '$299',
            'icon' => 'building',
            'image' => 'business-incorporation.jpg',
            'link' => home_url('/services/company-formation/')
        ),
        array(
            'title' => __('EIN SERVICE', 'cnb-consulting-theme'),
            'description' => __('Secure your federal Employer Identification Number with expert support.', 'cnb-consulting-theme'),
            'price' => '$99',
            'icon' => 'id-card',
            'image' => 'ein-service.jpg',
            'link' => home_url('/services/ein-service/')
        ),
        array(
            'title' => __('ITIN SERVICE', 'cnb-consulting-theme'),
            'description' => __('Secure your Tax ID as a resident or non-resident—fast, compliant, reliable.', 'cnb-consulting-theme'),
            'price' => '$199',
            'icon' => 'user',
            'image' => 'itin-service.jpg',
            'link' => home_url('/services/itin-service/')
        ),
        array(
            'title' => __('TAX PREPARATION', 'cnb-consulting-theme'),
            'description' => __('Expert U.S. tax filing with full compliance support.', 'cnb-consulting-theme'),
            'price' => '$399',
            'icon' => 'calculator',
            'image' => 'tax-preparation.jpg',
            'link' => home_url('/tax-filing/')
        ),
        array(
            'title' => __('AMAZON SELLER', 'cnb-consulting-theme'),
            'description' => __('Get approved on Amazon marketplace', 'cnb-consulting-theme'),
            'price' => '$299',
            'icon' => 'shopping-cart',
            'image' => 'amazon-seller.jpg',
            'link' => home_url('/services/amazon-seller/')
        ),
        array(
            'title' => __('WALMART SELLER', 'cnb-consulting-theme'),
            'description' => __('Launch on Walmart marketplace fast', 'cnb-consulting-theme'),
            'price' => '$349',
            'icon' => 'store',
            'image' => 'walmart-seller.jpg',
            'link' => home_url('/services/walmart-seller/')
        ),
        array(
            'title' => __('US RESALE CERTIFICATE', 'cnb-consulting-theme'),
            'description' => __('Buy wholesale tax-free legally', 'cnb-consulting-theme'),
            'price' => '$149',
            'icon' => 'certificate',
            'image' => 'resale-certificate.jpg',
            'link' => home_url('/resale-certificate/')
        )
    );
}