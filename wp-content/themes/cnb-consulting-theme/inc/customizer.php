<?php
/**
 * CNB Consulting Theme Customizer
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function cnb_consulting_customize_register($wp_customize) {
    
    // Enable live preview for existing settings
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    
    // Company Information Panel
    $wp_customize->add_panel('cnb_company_info', array(
        'title'    => __('Company Information', 'cnb-consulting-theme'),
        'priority' => 30,
    ));
    
    // Contact Information Section
    $wp_customize->add_section('cnb_contact_info', array(
        'title'    => __('Contact Information', 'cnb-consulting-theme'),
        'panel'    => 'cnb_company_info',
        'priority' => 10,
    ));
    
    // Phone Number
    $wp_customize->add_setting('cnb_phone', array(
        'default'           => '+1 (561) 385-0430',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_phone', array(
        'label'    => __('Phone Number', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'text',
    ));
    
    // Email Address
    $wp_customize->add_setting('cnb_email', array(
        'default'           => 'cnbgroupconsultingllc@gmail.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_email', array(
        'label'    => __('Email Address', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'email',
    ));
    
    // WhatsApp Number
    $wp_customize->add_setting('cnb_whatsapp', array(
        'default'           => '+1 (561) 385-0430',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_whatsapp', array(
        'label'    => __('WhatsApp Number', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'text',
    ));
    
    // Calendly URL
    $wp_customize->add_setting('cnb_calendly_url', array(
        'default'           => 'https://calendly.com/cnbgroupconsultingllc/30min',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_calendly_url', array(
        'label'    => __('Calendly Booking URL', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'url',
        'description' => __('Your Calendly booking link for consultations', 'cnb-consulting-theme'),
    ));
    
    // Business Address
    $wp_customize->add_setting('cnb_address', array(
        'default'           => '5681 Boynton Bay Cir, Boynton Beach, FL 33437',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_address', array(
        'label'    => __('Business Address', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'textarea',
    ));
    
    // Business Hours
    $wp_customize->add_setting('cnb_business_hours', array(
        'default'           => 'Monday - Friday: 9:00 AM - 6:00 PM EST',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_business_hours', array(
        'label'    => __('Business Hours', 'cnb-consulting-theme'),
        'section'  => 'cnb_contact_info',
        'type'     => 'text',
    ));
    
    // Company Details Section
    $wp_customize->add_section('cnb_company_details', array(
        'title'    => __('Company Details', 'cnb-consulting-theme'),
        'panel'    => 'cnb_company_info',
        'priority' => 20,
    ));
    
    // Company Name
    $wp_customize->add_setting('cnb_company_name', array(
        'default'           => 'CNB Group Consulting',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('cnb_company_name', array(
        'label'    => __('Company Name', 'cnb-consulting-theme'),
        'section'  => 'cnb_company_details',
        'type'     => 'text',
    ));
    
    // Company Tagline
    $wp_customize->add_setting('cnb_company_tagline', array(
        'default'           => 'Your Partner in US Business Formation & Drop Shipping Success',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('cnb_company_tagline', array(
        'label'    => __('Company Tagline', 'cnb-consulting-theme'),
        'section'  => 'cnb_company_details',
        'type'     => 'text',
    ));
    
    // Company Description
    $wp_customize->add_setting('cnb_company_description', array(
        'default'           => 'Expert consultancy services for international entrepreneurs looking to establish and grow their US-based drop shipping businesses.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_company_description', array(
        'label'    => __('Company Description', 'cnb-consulting-theme'),
        'section'  => 'cnb_company_details',
        'type'     => 'textarea',
    ));
    
    // Theme Colors Section
    $wp_customize->add_section('cnb_theme_colors', array(
        'title'    => __('Theme Colors', 'cnb-consulting-theme'),
        'priority' => 40,
    ));
    
    // Primary Color
    $wp_customize->add_setting('cnb_primary_color', array(
        'default'           => '#1a365d',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cnb_primary_color', array(
        'label'    => __('Primary Color', 'cnb-consulting-theme'),
        'section'  => 'cnb_theme_colors',
    )));
    
    // Secondary Color
    $wp_customize->add_setting('cnb_secondary_color', array(
        'default'           => '#f6ad55',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cnb_secondary_color', array(
        'label'    => __('Secondary Color', 'cnb-consulting-theme'),
        'section'  => 'cnb_theme_colors',
    )));
    
    // Homepage Settings Section
    $wp_customize->add_section('cnb_homepage_settings', array(
        'title'    => __('Homepage Settings', 'cnb-consulting-theme'),
        'priority' => 50,
    ));
    
    // Hero Section Headline
    $wp_customize->add_setting('cnb_hero_headline', array(
        'default'           => 'Launch Your US Business & Dominate Drop Shipping',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('cnb_hero_headline', array(
        'label'    => __('Hero Section Headline', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'text',
    ));
    
    // Hero Section Subtitle
    $wp_customize->add_setting('cnb_hero_subtitle', array(
        'default'           => 'Complete business formation services for international entrepreneurs ready to succeed in the US market.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('cnb_hero_subtitle', array(
        'label'    => __('Hero Section Subtitle', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'textarea',
    ));
    
    // Statistics Section
    $wp_customize->add_section('cnb_stats_settings', array(
        'title'    => __('Statistics', 'cnb-consulting-theme'),
        'priority' => 60,
    ));
    
    // Clients Served
    $wp_customize->add_setting('cnb_clients_served', array(
        'default'           => '500+',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_clients_served', array(
        'label'    => __('Clients Served', 'cnb-consulting-theme'),
        'section'  => 'cnb_stats_settings',
        'type'     => 'text',
    ));
    
    // Success Rate
    $wp_customize->add_setting('cnb_success_rate', array(
        'default'           => '98%',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_success_rate', array(
        'label'    => __('Success Rate', 'cnb-consulting-theme'),
        'section'  => 'cnb_stats_settings',
        'type'     => 'text',
    ));
    
    // Years in Business
    $wp_customize->add_setting('cnb_years_business', array(
        'default'           => '4+',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_years_business', array(
        'label'    => __('Years in Business', 'cnb-consulting-theme'),
        'section'  => 'cnb_stats_settings',
        'type'     => 'text',
    ));
    
    // Countries Served
    $wp_customize->add_setting('cnb_countries_served', array(
        'default'           => '25+',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('cnb_countries_served', array(
        'label'    => __('Countries Served', 'cnb-consulting-theme'),
        'section'  => 'cnb_stats_settings',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'cnb_consulting_customize_register');

/**
 * Render the site title for the selective refresh partial.
 */
function cnb_consulting_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function cnb_consulting_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cnb_consulting_customize_preview_js() {
    wp_enqueue_script(
        'cnb-consulting-customizer',
        get_template_directory_uri() . '/assets/js/customizer.js',
        array('customize-preview'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('customize_preview_init', 'cnb_consulting_customize_preview_js');

/**
 * Get customizer value with fallback
 */
function cnb_get_customizer_value($setting, $default = '') {
    $value = get_theme_mod($setting, $default);
    return $value ? $value : $default;
}

/**
 * Output custom CSS based on customizer settings
 */
function cnb_consulting_customizer_css() {
    $primary_color = get_theme_mod('cnb_primary_color', '#1a365d');
    $secondary_color = get_theme_mod('cnb_secondary_color', '#f6ad55');
    
    if ($primary_color !== '#1a365d' || $secondary_color !== '#f6ad55') {
        ?>
        <style type="text/css">
            :root {
                --primary-blue: <?php echo esc_attr($primary_color); ?>;
                --secondary-gold: <?php echo esc_attr($secondary_color); ?>;
            }
        </style>
        <?php
    }
}
add_action('wp_head', 'cnb_consulting_customizer_css');