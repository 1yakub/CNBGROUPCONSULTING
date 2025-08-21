<?php
/**
 * Schema & SEO Functions
 * 
 * Functions for generating structured data and SEO optimizations
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Generate schema markup for business
 */
function cnb_get_business_schema() {
    $company = cnb_get_company_info();
    $contact = cnb_get_contact_info();
    
    $schema = array(
        "@context" => "https://schema.org",
        "@type" => "ProfessionalService",
        "name" => $company['name'],
        "description" => $company['description'],
        "telephone" => $contact['phone'],
        "email" => $contact['email'],
        "address" => array(
            "@type" => "PostalAddress",
            "streetAddress" => $contact['address']
        ),
        "openingHours" => "Mo-Fr 09:00-18:00",
        "serviceType" => "Business Formation Consulting"
    );
    
    return json_encode($schema);
}