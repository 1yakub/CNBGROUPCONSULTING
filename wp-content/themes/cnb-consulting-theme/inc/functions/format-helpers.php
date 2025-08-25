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
function cnb_format_phone_href($phone)
{
    return str_replace(array(' ', '(', ')', '-', '+'), array('', '', '', '', ''), $phone);
}

/**
 * Format WhatsApp link
 */
function cnb_get_whatsapp_link($number)
{
    $clean_number = cnb_format_phone_href($number);
    return 'https://wa.me/' . $clean_number;
}

/**
 * Get CTA link based on type
 * Centralized function for all CTA URLs following DRY principle
 * 
 * @param string $type Type of CTA link
 * @return string The URL for the CTA
 */
function cnb_get_cta_link($type = 'consultation')
{
    // Get Calendly URL from customizer or use default
    $calendly_url = get_theme_mod('cnb_calendly_url', 'https://calendly.com/cnbgroupconsultingllc/30min');

    // Define all CTA link types
    $links = array(
        // Booking/Consultation CTAs
        'consultation' => $calendly_url,
        'book-consultation' => $calendly_url,
        'schedule' => $calendly_url,
        'get-started' => $calendly_url,
        'get-started-now' => $calendly_url,

        // Package selection CTAs
        'choose-basic' => $calendly_url,
        'choose-complete' => $calendly_url,
        'choose-premium' => $calendly_url,
        'choose-starter' => $calendly_url,
        'choose-professional' => $calendly_url,
        'choose-enterprise' => $calendly_url,
        'choose-package' => $calendly_url,

        // Service specific CTAs
        'get-ein-now' => $calendly_url,
        'get-custom-lease' => $calendly_url,
        'try-diy' => $calendly_url,
        'contact-experts' => $calendly_url,

        // Contact methods
        'whatsapp' => cnb_get_whatsapp_link(cnb_get_contact_info()['whatsapp']),
        'email' => 'mailto:' . cnb_get_contact_info()['email'],
        'phone' => 'tel:' . cnb_format_phone_href(cnb_get_contact_info()['phone']),

        // Page navigation
        'contact' => home_url('/contact/'),
        'services' => home_url('/services/'),
        'pricing' => '#pricing',
        'form' => '#contact'
    );

    // Return the link or default to consultation
    return isset($links[$type]) ? $links[$type] : $calendly_url;
}

/**
 * Check if page has sidebar
 */
function cnb_has_sidebar()
{

    if (is_page_template('page-full-width.php')) {
        return false;
    }

    if (is_front_page()) {
        return false;
    }

    return true;
}