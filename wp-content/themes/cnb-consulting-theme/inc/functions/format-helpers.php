<?php
/**
 * Format Helper Functions
 * 
 * Functions for formatting phone numbers, links, and layout checks
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Format phone number for href attribute
 */
function cnb_format_phone_href($phone) {
    return str_replace(array(' ', '(', ')', '-', '+'), array('', '', '', '', ''), $phone);
}

/**
 * Format WhatsApp link
 */
function cnb_get_whatsapp_link($number) {
    $clean_number = cnb_format_phone_href($number);
    return 'https://wa.me/' . $clean_number;
}

/**
 * Check if page has sidebar
 */
function cnb_has_sidebar() {
    // Logic to determine if current page should have sidebar
    if (is_page_template('page-full-width.php')) {
        return false;
    }
    
    if (is_front_page()) {
        return false;
    }
    
    return true;
}