<?php
/**
 * Hero Section Content Functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get hero section content
 */
function cnb_get_hero_content() {
    return array(
        'headline' => cnb_get_customizer_value('cnb_hero_headline', 'Launch Your US Business & Dominate Drop Shipping'),
        'subtitle' => cnb_get_customizer_value('cnb_hero_subtitle', 'Complete business formation services for international entrepreneurs ready to succeed in the US market.'),
        'cta_primary' => __('Start Your Business Today', 'cnb-consulting-theme'),
        'cta_secondary' => __('Free Consultation', 'cnb-consulting-theme')
    );
}