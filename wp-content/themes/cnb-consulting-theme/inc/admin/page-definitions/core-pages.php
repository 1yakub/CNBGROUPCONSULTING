<?php
/**
 * Core Business Pages Definitions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get core business pages configuration
 * 
 * @return array Core pages array
 */
function cnb_get_core_pages() {
    return array(
        'services' => array(
            'title' => 'Services',
            'content' => 'Our comprehensive business services help you establish and grow your company in the United States.',
            'template' => 'page-templates/services.php'
        ),
        'about' => array(
            'title' => 'About Us',
            'content' => 'CNB Group Consulting is your trusted partner for U.S. business formation and compliance services.',
            'template' => 'page-templates/about.php'
        ),
        'contact' => array(
            'title' => 'Contact',
            'content' => 'Get in touch with our expert team for professional business consultation and support.',
            'template' => 'page-templates/contact.php'
        ),
        'faq' => array(
            'title' => 'FAQ',
            'content' => 'Frequently asked questions about our services and business formation process.',
            'template' => 'page-templates/faq.php'
        )
    );
}