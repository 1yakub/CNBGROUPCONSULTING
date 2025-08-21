<?php
/**
 * Placeholder Content Functions
 * 
 * Functions for placeholder/development content like services, testimonials, FAQs
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

/**
 * Get placeholder services for development
 */
function cnb_get_placeholder_services() {
    return array(
        array(
            'title' => __('U.S. Company Formation', 'cnb-consulting-theme'),
            'description' => __('Complete LLC or Corporation setup with all required documentation and compliance.', 'cnb-consulting-theme'),
            'price' => '$199',
            'icon' => 'building',
            'link' => home_url('/services/us-company-formation/')
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
            'price' => '$149',
            'icon' => 'user',
            'link' => home_url('/services/itin-service/')
        ),
        array(
            'title' => __('US Registered Agent', 'cnb-consulting-theme'),
            'description' => __('Professional registered agent service for your US business compliance.', 'cnb-consulting-theme'),
            'price' => '$79/year',
            'icon' => 'shield',
            'link' => home_url('/services/us-registered-agent/')
        ),
        array(
            'title' => __('Amazon Seller Account', 'cnb-consulting-theme'),
            'description' => __('Professional Amazon seller account setup and approval assistance.', 'cnb-consulting-theme'),
            'price' => '$299',
            'icon' => 'shopping-cart',
            'link' => home_url('/services/amazon-seller-account/')
        ),
        array(
            'title' => __('Walmart Seller Account', 'cnb-consulting-theme'),
            'description' => __('Expert Walmart marketplace seller account setup and optimization.', 'cnb-consulting-theme'),
            'price' => '$349',
            'icon' => 'store',
            'link' => home_url('/services/walmart-seller-account/')
        )
    );
}

/**
 * Get placeholder testimonials
 */
function cnb_get_placeholder_testimonials() {
    return array(
        array(
            'content' => __('CNB Group Consulting made setting up my US business incredibly easy. Their expertise in drop shipping business formation is unmatched.', 'cnb-consulting-theme'),
            'author' => 'Maria Rodriguez',
            'company' => 'Rodriguez Imports LLC',
            'rating' => 5,
            'avatar' => 'https://ui-avatars.com/api/?name=Maria+Rodriguez&background=1e3a8a&color=fff&size=150'
        ),
        array(
            'content' => __('Professional service, fast turnaround, and excellent support. My Amazon seller account was approved within days!', 'cnb-consulting-theme'),
            'author' => 'Ahmed Hassan',
            'company' => 'Global Trade Solutions',
            'rating' => 5,
            'avatar' => 'https://ui-avatars.com/api/?name=Ahmed+Hassan&background=1e3a8a&color=fff&size=150'
        ),
        array(
            'content' => __('The team guided me through every step of the process. Now my drop shipping business is compliant and thriving in the US market.', 'cnb-consulting-theme'),
            'author' => 'Li Wei Chen',
            'company' => 'Pacific Ventures Inc',
            'rating' => 5,
            'avatar' => 'https://ui-avatars.com/api/?name=Li+Wei+Chen&background=1e3a8a&color=fff&size=150'
        )
    );
}

/**
 * Get business formation process steps
 */
function cnb_get_process_steps() {
    return array(
        array(
            'number' => '1',
            'title' => __('Consultation', 'cnb-consulting-theme'),
            'description' => __('Free consultation to understand your business needs and goals for the US market.', 'cnb-consulting-theme')
        ),
        array(
            'number' => '2',
            'title' => __('Documentation', 'cnb-consulting-theme'),
            'description' => __('We prepare and file all necessary documents for your business formation.', 'cnb-consulting-theme')
        ),
        array(
            'number' => '3',
            'title' => __('Compliance', 'cnb-consulting-theme'),
            'description' => __('Ensure your business meets all federal and state compliance requirements.', 'cnb-consulting-theme')
        ),
        array(
            'number' => '4',
            'title' => __('Launch', 'cnb-consulting-theme'),
            'description' => __('Your US business is ready to operate and dominate the drop shipping market.', 'cnb-consulting-theme')
        )
    );
}

/**
 * Get FAQ items for homepage
 */
function cnb_get_homepage_faqs() {
    return array(
        array(
            'question' => __('How long does US business formation take?', 'cnb-consulting-theme'),
            'answer' => __('Most business formations are completed within 5-10 business days, depending on the state and business type. We provide regular updates throughout the process.', 'cnb-consulting-theme')
        ),
        array(
            'question' => __('Do I need to be a US resident to form a company?', 'cnb-consulting-theme'),
            'answer' => __('No, you do not need to be a US resident or citizen to form a US company. We specialize in helping international entrepreneurs establish their US businesses.', 'cnb-consulting-theme')
        ),
        array(
            'question' => __('What business structure is best for drop shipping?', 'cnb-consulting-theme'),
            'answer' => __('LLCs are typically the most popular choice for drop shipping businesses due to their flexibility, liability protection, and tax advantages. We can help you choose the right structure.', 'cnb-consulting-theme')
        ),
        array(
            'question' => __('Do you provide ongoing compliance support?', 'cnb-consulting-theme'),
            'answer' => __('Yes, we offer ongoing compliance services including registered agent service, annual report filing, and tax preparation to keep your business in good standing.', 'cnb-consulting-theme')
        ),
        array(
            'question' => __('Can you help with seller account approvals?', 'cnb-consulting-theme'),
            'answer' => __('Absolutely! We have expertise in Amazon, Walmart, and other marketplace seller account setups and can significantly improve your approval chances.', 'cnb-consulting-theme')
        )
    );
}