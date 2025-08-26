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
            'template' => 'page-templates/service-company-formation.php'
        ),
        'ein-service' => array(
            'title' => 'EIN Service',
            'content' => 'Get your Federal Employer Identification Number (EIN) quickly and easily.',
            'template' => 'page-templates/service-ein.php'
        ),
        'itin-service' => array(
            'title' => 'ITIN Service',
            'content' => 'Obtain your Individual Taxpayer Identification Number for tax purposes.',
            'template' => 'page-templates/service-itin.php'
        ),
        'registered-agent' => array(
            'title' => 'US Registered Agent',
            'content' => 'Professional registered agent services for your U.S. business compliance.',
            'template' => 'page-templates/service-registered-agent.php'
        ),
        'tax-filing' => array(
            'title' => 'US Tax Filing Return',
            'content' => 'Expert tax filing services for individuals and businesses.',
            'template' => 'page-templates/service-tax-filing.php'
        ),
        'duns-number' => array(
            'title' => 'DUNS Number',
            'content' => 'Get your DUNS number for business credit and government contracting.',
            'template' => 'page-templates/service-duns.php'
        ),
        'boi-filing' => array(
            'title' => 'BOI Filing',
            'content' => 'Beneficial Ownership Information filing for FinCEN compliance.',
            'template' => 'page-templates/service-boi.php'
        ),
        'company-dissolution' => array(
            'title' => 'Company Dissolution',
            'content' => 'Professional company dissolution services for business closure.',
            'template' => 'page-templates/service-dissolution.php'
        ),
        'amazon-seller' => array(
            'title' => 'Amazon Seller Account',
            'content' => 'Complete Amazon seller account setup and management services.',
            'template' => 'page-templates/service-amazon.php'
        ),
        'walmart-seller' => array(
            'title' => 'Walmart Seller Account',
            'content' => 'Professional Walmart marketplace seller account setup.',
            'template' => 'page-templates/service-walmart.php'
        ),
        'resale-certificate' => array(
            'title' => 'US Resale Certificate',
            'content' => 'Obtain resale certificates for tax-exempt wholesale purchases.',
            'template' => 'page-templates/service-resale.php'
        ),
        'ecommerce-registration' => array(
            'title' => 'E-commerce Registration',
            'content' => 'Complete e-commerce business registration and setup services.',
            'template' => 'page-templates/service-ecommerce.php'
        ),
        'lease-agreement' => array(
            'title' => 'US Lease Agreement',
            'content' => 'Professional lease agreement preparation and review services.',
            'template' => 'page-templates/service-lease.php'
        )
    );
}