<?php
/**
 * Company Details Customizer Section
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register company details section and settings
 */
function cnb_customizer_company_details($wp_customize) {
    // Company Details Section
    $wp_customize->add_section('cnb_company_details', array(
        'title'    => __('Company Details', 'cnb-consulting-theme'),
        'panel'    => 'cnb_settings',
        'priority' => 20,
    ));

    // Company Name
    $wp_customize->add_setting('cnb_company_name', array(
        'default'           => 'CNB Group Consulting',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_company_name', array(
        'label'    => __('Company Name', 'cnb-consulting-theme'),
        'section'  => 'cnb_company_details',
        'type'     => 'text',
        'priority' => 10,
    ));

    // Company Tagline
    $wp_customize->add_setting('cnb_company_tagline', array(
        'default'           => 'Your Trusted Business Partner',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_company_tagline', array(
        'label'    => __('Company Tagline', 'cnb-consulting-theme'),
        'section'  => 'cnb_company_details',
        'type'     => 'text',
        'priority' => 20,
    ));

    // Company Registration Number
    $wp_customize->add_setting('cnb_company_registration', array(
        'default'           => '14834163',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_company_registration', array(
        'label'       => __('Company Registration Number', 'cnb-consulting-theme'),
        'description' => __('Your company registration number for official documentation', 'cnb-consulting-theme'),
        'section'     => 'cnb_company_details',
        'type'        => 'text',
        'priority'    => 30,
    ));

    // VAT Number
    $wp_customize->add_setting('cnb_vat_number', array(
        'default'           => 'GB123456789',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_vat_number', array(
        'label'       => __('VAT Number', 'cnb-consulting-theme'),
        'description' => __('Your VAT registration number', 'cnb-consulting-theme'),
        'section'     => 'cnb_company_details',
        'type'        => 'text',
        'priority'    => 40,
    ));

    // Registered Office Address
    $wp_customize->add_setting('cnb_registered_address', array(
        'default'           => '128 City Road, London, EC1V 2NX, United Kingdom',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('cnb_registered_address', array(
        'label'       => __('Registered Office Address', 'cnb-consulting-theme'),
        'description' => __('Your official registered business address', 'cnb-consulting-theme'),
        'section'     => 'cnb_company_details',
        'type'        => 'textarea',
        'priority'    => 50,
    ));
}
add_action('customize_register', 'cnb_customizer_company_details', 10);