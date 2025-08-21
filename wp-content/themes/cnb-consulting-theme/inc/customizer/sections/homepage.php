<?php
/**
 * Homepage Settings Customizer Section
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register homepage settings section and controls
 */
function cnb_customizer_homepage_settings($wp_customize) {
    // Homepage Settings Section
    $wp_customize->add_section('cnb_homepage_settings', array(
        'title'    => __('Homepage Settings', 'cnb-consulting-theme'),
        'panel'    => 'cnb_settings',
        'priority' => 40,
    ));

    // Hero Title
    $wp_customize->add_setting('cnb_hero_title', array(
        'default'           => 'Welcome to CNB Group Consulting',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_hero_title', array(
        'label'    => __('Hero Title', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'text',
        'priority' => 10,
    ));

    // Hero Subtitle
    $wp_customize->add_setting('cnb_hero_subtitle', array(
        'default'           => 'Your Partner in Business Excellence',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_hero_subtitle', array(
        'label'    => __('Hero Subtitle', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'text',
        'priority' => 20,
    ));

    // Hero Description
    $wp_customize->add_setting('cnb_hero_description', array(
        'default'           => 'We provide comprehensive business solutions to help your company grow and succeed.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('cnb_hero_description', array(
        'label'    => __('Hero Description', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'textarea',
        'priority' => 30,
    ));

    // Hero CTA Text
    $wp_customize->add_setting('cnb_hero_cta_text', array(
        'default'           => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cnb_hero_cta_text', array(
        'label'    => __('Hero Button Text', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'text',
        'priority' => 40,
    ));

    // Hero CTA URL
    $wp_customize->add_setting('cnb_hero_cta_url', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('cnb_hero_cta_url', array(
        'label'    => __('Hero Button URL', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'url',
        'priority' => 50,
    ));

    // Show Services Section
    $wp_customize->add_setting('cnb_show_services_section', array(
        'default'           => true,
        'sanitize_callback' => 'cnb_sanitize_checkbox',
    ));

    $wp_customize->add_control('cnb_show_services_section', array(
        'label'    => __('Show Services Section', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'checkbox',
        'priority' => 60,
    ));

    // Show Testimonials Section
    $wp_customize->add_setting('cnb_show_testimonials_section', array(
        'default'           => true,
        'sanitize_callback' => 'cnb_sanitize_checkbox',
    ));

    $wp_customize->add_control('cnb_show_testimonials_section', array(
        'label'    => __('Show Testimonials Section', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'checkbox',
        'priority' => 70,
    ));

    // Show Statistics Section
    $wp_customize->add_setting('cnb_show_statistics_section', array(
        'default'           => true,
        'sanitize_callback' => 'cnb_sanitize_checkbox',
    ));

    $wp_customize->add_control('cnb_show_statistics_section', array(
        'label'    => __('Show Statistics Section', 'cnb-consulting-theme'),
        'section'  => 'cnb_homepage_settings',
        'type'     => 'checkbox',
        'priority' => 80,
    ));
}
add_action('customize_register', 'cnb_customizer_homepage_settings', 10);