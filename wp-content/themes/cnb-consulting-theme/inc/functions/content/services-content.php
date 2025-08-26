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
function cnb_get_placeholder_services() {
    return array(
        array(
            'title' => __('U.S. Company Formation', 'cnb-consulting-theme'),
            'description' => __('Complete LLC or Corporation setup with all required documentation and compliance.', 'cnb-consulting-theme'),
            'price' => '$299',
            'icon' => 'building',
            'link' => home_url('/services/company-formation/')
        ),
        array(
            'title' => __('EIN Service', 'cnb-consulting-theme'),
            'description' => __('Fast and reliable Employer Identification Number registration for your business.', 'cnb-consulting-theme'),
            'price' => '$99',
            'icon' => 'id-card',
            'link' => home_url('/services/ein-service/')
        ),
        array(
            'title' => __('ITIN Service', 'cnb-consulting-theme'),
            'description' => __('Individual Taxpayer Identification Number application and processing.', 'cnb-consulting-theme'),
            'price' => '$199',
            'icon' => 'user',
            'link' => home_url('/services/itin-service/')
        ),
        array(
            'title' => __('US Registered Agent', 'cnb-consulting-theme'),
            'description' => __('Professional registered agent service for your US business compliance.', 'cnb-consulting-theme'),
            'price' => '$99/year',
            'icon' => 'shield',
            'link' => home_url('/services/registered-agent/')
        ),
        array(
            'title' => __('Amazon Seller Account', 'cnb-consulting-theme'),
            'description' => __('Professional Amazon seller account setup and approval assistance.', 'cnb-consulting-theme'),
            'price' => '$299',
            'icon' => 'shopping-cart',
            'link' => home_url('/services/amazon-seller/')
        ),
        array(
            'title' => __('Walmart Seller Account', 'cnb-consulting-theme'),
            'description' => __('Expert Walmart marketplace seller account setup and optimization.', 'cnb-consulting-theme'),
            'price' => '$349',
            'icon' => 'store',
            'link' => home_url('/services/walmart-seller/')
        )
    );
}