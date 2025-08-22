<?php
/**
 * Testimonials Content Functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
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