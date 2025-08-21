<?php
/**
 * Service Pages Definitions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get all service pages configuration
 * 
 * @return array Service pages array
 */
function cnb_get_service_pages() {
    return array(
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
        )
    );
}