<?php
/**
 * Page Creator System
 * 
 * Automatically creates required WordPress pages on theme activation
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create all required WordPress pages
 */
function cnb_create_all_pages() {
    // Force recreation by removing the flag temporarily
    // delete_option('cnb_pages_created'); // Uncomment to force recreation
    
    // Only run once
    if (get_option('cnb_pages_created')) {
        return;
    }
    
    // Define all pages with their content
    $pages = array(
        // Core business pages
        'services' => array(
            'title' => 'Services',
            'content' => 'Our comprehensive business services help you establish and grow your company in the United States.',
            'template' => 'page-services.php'  // This will use Template Name: Services Page
        ),
        'about' => array(
            'title' => 'About Us',
            'content' => 'CNB Group Consulting is your trusted partner for U.S. business formation and compliance services.',
            'template' => 'page-about.php'
        ),
        'contact' => array(
            'title' => 'Contact',
            'content' => 'Get in touch with our expert team for professional business consultation and support.',
            'template' => 'page-contact.php'
        ),
        
        // All 13 service pages
        'company-formation' => array(
            'title' => 'U.S. Company Formation',
            'content' => 'Start your American business dream with our comprehensive U.S. company formation service.',
            'template' => 'page-company-formation.php'
        ),
        'ein-service' => array(
            'title' => 'EIN Service',
            'content' => 'Get your Federal Employer Identification Number (EIN) quickly and easily.',
            'template' => 'page-ein-service.php'
        ),
        'itin-service' => array(
            'title' => 'ITIN Service',
            'content' => 'Obtain your Individual Taxpayer Identification Number for tax purposes.',
            'template' => 'page-itin-service.php'
        ),
        'registered-agent' => array(
            'title' => 'US Registered Agent',
            'content' => 'Professional registered agent services for your U.S. business compliance.',
            'template' => 'page-registered-agent.php'
        ),
        'tax-filing' => array(
            'title' => 'US Tax Filing Return',
            'content' => 'Expert tax filing services for individuals and businesses.',
            'template' => 'page-tax-filing.php'
        ),
        'duns-number' => array(
            'title' => 'DUNS Number',
            'content' => 'Get your DUNS number for business credit and government contracting.',
            'template' => 'page-duns-number.php'
        ),
        'boi-filing' => array(
            'title' => 'BOI Filing',
            'content' => 'Beneficial Ownership Information filing for FinCEN compliance.',
            'template' => 'page-boi-filing.php'
        ),
        'company-dissolution' => array(
            'title' => 'Company Dissolution',
            'content' => 'Professional company dissolution services for business closure.',
            'template' => 'page-company-dissolution.php'
        ),
        'amazon-seller' => array(
            'title' => 'Amazon Seller Account',
            'content' => 'Complete Amazon seller account setup and management services.',
            'template' => 'page-amazon-seller.php'
        ),
        'walmart-seller' => array(
            'title' => 'Walmart Seller Account',
            'content' => 'Professional Walmart marketplace seller account setup.',
            'template' => 'page-walmart-seller.php'
        ),
        'resale-certificate' => array(
            'title' => 'US Resale Certificate',
            'content' => 'Obtain resale certificates for tax-exempt wholesale purchases.',
            'template' => 'page-resale-certificate.php'
        ),
        'ecommerce-registration' => array(
            'title' => 'E-commerce Registration',
            'content' => 'Complete e-commerce business registration and setup services.',
            'template' => 'page-ecommerce-registration.php'
        ),
        'lease-agreement' => array(
            'title' => 'US Lease Agreement',
            'content' => 'Professional lease agreement preparation and review services.',
            'template' => 'page-lease-agreement.php'
        ),
        'faq' => array(
            'title' => 'FAQ',
            'content' => 'Frequently asked questions about our services and business formation process.',
            'template' => 'page-faq.php'
        ),
        'ein-service' => array(
            'title' => 'EIN Service',
            'content' => 'Fast and reliable EIN (Employer Identification Number) application services.',
            'template' => 'page-ein-service.php'
        )
    );
    
    foreach ($pages as $slug => $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($slug);
        
        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title' => $page_data['title'],
                'post_content' => $page_data['content'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_name' => $slug,
                'post_author' => 1
            ));
            
            if ($page_id && !is_wp_error($page_id)) {
                // Set custom template if specified
                if (isset($page_data['template'])) {
                    update_post_meta($page_id, '_wp_page_template', $page_data['template']);
                }
                
                error_log("Created page: {$page_data['title']} with ID: $page_id");
            } else {
                error_log("Failed to create page: {$page_data['title']}");
            }
        }
    }
    
    // Mark as created
    update_option('cnb_pages_created', true);
    
    // Flush rewrite rules to ensure permalinks work
    flush_rewrite_rules();
}

// Also run on init to ensure pages exist (remove this after first run on production)
add_action('init', function() {
    if (!get_option('cnb_pages_created')) {
        cnb_create_all_pages();
        flush_rewrite_rules();
    }
});