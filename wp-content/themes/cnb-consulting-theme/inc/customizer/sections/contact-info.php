<?php
/**
 * Contact Information Customizer Section
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register contact information section and settings
 */
function cnb_customizer_contact_info($wp_customize) {
    // Contact Information Section
    $wp_customize->add_section('cnb_contact_info', array(
        'title'    => __('Contact Information', 'cnb-consulting-theme'),
        'panel'    => 'cnb_settings',
        'priority' => 10,
    ));

    // Phone Number
    $wp_customize->add_setting('cnb_phone_number', array(
        'default'           => '+44 20 8157 5474',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_phone_number', array(
        'label'    => __('Phone Number', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'text',
        'priority' => 10,
    ));

    // WhatsApp Number
    $wp_customize->add_setting('cnb_whatsapp_number', array(
        'default'           => '+44 7778 993345',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_whatsapp_number', array(
        'label'    => __('WhatsApp Number', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'text',
        'priority' => 20,
    ));

    // Email Address
    $wp_customize->add_setting('cnb_email', array(
        'default'           => 'info@cnbgroupconsulting.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('cnb_email', array(
        'label'    => __('Email Address', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'email',
        'priority' => 30,
    ));

    // Physical Address
    $wp_customize->add_setting('cnb_address', array(
        'default'           => '128 City Road, London, EC1V 2NX',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('cnb_address', array(
        'label'    => __('Physical Address', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'textarea',
        'priority' => 40,
    ));

    // Office Hours
    $wp_customize->add_setting('cnb_office_hours', array(
        'default'           => 'Monday - Friday: 9:00 AM - 6:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_office_hours', array(
        'label'    => __('Office Hours', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'text',
        'priority' => 50,
    ));

    // Calendly Booking URL
    $wp_customize->add_setting('cnb_calendly_url', array(
        'default'           => 'https://calendly.com/cnbgroupconsultingllc/30min',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('cnb_calendly_url', array(
        'label'       => __('Calendly Booking URL', 'cnb-consulting-theme'),
        'description' => __('Your Calendly scheduling link used for all booking buttons', 'cnb-consulting-theme'),
        'section'     => 'cnb_contact_info',
        'type'        => 'url',
        'priority'    => 60,
    ));
}
add_action('customize_register', 'cnb_customizer_contact_info', 10);