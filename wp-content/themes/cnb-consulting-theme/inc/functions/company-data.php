<?php
/**
 * Company Data Functions
 * 
 * Functions for retrieving company information, contact details, and social links
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get contact information with customizer fallbacks
 */
function cnb_get_contact_info() {
    return array(
        'phone' => cnb_get_customizer_value('cnb_phone_number', '+1 (561) 385-0430'),
        'email' => cnb_get_customizer_value('cnb_email', 'contact@cnbgroupconsulting.com'),
        'whatsapp' => cnb_get_customizer_value('cnb_whatsapp_number', '+1 (561) 385-0430'),
        'address' => cnb_get_customizer_value('cnb_address', "2101 VISTA PARK STE 217\nWest palm beach, Fl 33411"),
        'business_hours' => cnb_get_customizer_value('cnb_office_hours', 'Monday - Friday: 9:00 AM - 6:00 PM EST'),
        'timezone' => 'EST',
        'calendly' => cnb_get_customizer_value('cnb_calendly_url', 'https://calendly.com/cnbgroupconsultingllc/30min')
    );
}

/**
 * Get company information with customizer fallbacks
 */
function cnb_get_company_info() {
    return array(
        'name' => cnb_get_customizer_value('cnb_company_name', 'CNB Group Consulting'),
        'tagline' => cnb_get_customizer_value('cnb_company_tagline', 'Your Partner in US Business Formation & Drop Shipping Success'),
        'description' => cnb_get_customizer_value('cnb_company_description', 'Expert consultancy services for international entrepreneurs looking to establish and grow their US-based drop shipping businesses.'),
        'founded' => '2020',
        'clients_served' => cnb_get_customizer_value('cnb_clients_served', '500+'),
        'success_rate' => cnb_get_customizer_value('cnb_success_rate', '98%'),
        'years_business' => cnb_get_customizer_value('cnb_years_business', '4+'),
        'countries_served' => cnb_get_customizer_value('cnb_countries_served', '25+')
    );
}

/**
 * Get social media links (placeholder)
 */
function cnb_get_social_links() {
    return array(
        'facebook' => '#',
        'twitter' => '#',
        'linkedin' => '#',
        'instagram' => '#',
        'youtube' => '#'
    );
}