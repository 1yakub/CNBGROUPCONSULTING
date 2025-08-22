<?php
/**
 * FAQ Content Functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
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