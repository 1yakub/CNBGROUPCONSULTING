<?php
/**
 * Theme Colors Customizer Section
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register theme colors section and settings
 */
function cnb_customizer_theme_colors($wp_customize) {
    // Theme Colors Section
    $wp_customize->add_section('cnb_theme_colors', array(
        'title'    => __('Theme Colors', 'cnb-consulting-theme'),
        'panel'    => 'cnb_settings',
        'priority' => 30,
    ));

    // Primary Color
    $wp_customize->add_setting('cnb_primary_color', array(
        'default'           => '#0056b3',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cnb_primary_color', array(
        'label'    => __('Primary Color', 'cnb-consulting-theme'),
        'section'  => 'cnb_theme_colors',
        'priority' => 10,
    )));

    // Secondary Color
    $wp_customize->add_setting('cnb_secondary_color', array(
        'default'           => '#28a745',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cnb_secondary_color', array(
        'label'    => __('Secondary Color', 'cnb-consulting-theme'),
        'section'  => 'cnb_theme_colors',
        'priority' => 20,
    )));

    // Accent Color
    $wp_customize->add_setting('cnb_accent_color', array(
        'default'           => '#ffc107',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cnb_accent_color', array(
        'label'    => __('Accent Color', 'cnb-consulting-theme'),
        'section'  => 'cnb_theme_colors',
        'priority' => 30,
    )));

    // Dark Color
    $wp_customize->add_setting('cnb_dark_color', array(
        'default'           => '#343a40',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cnb_dark_color', array(
        'label'    => __('Dark Color', 'cnb-consulting-theme'),
        'section'  => 'cnb_theme_colors',
        'priority' => 40,
    )));

    // Light Color
    $wp_customize->add_setting('cnb_light_color', array(
        'default'           => '#f8f9fa',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cnb_light_color', array(
        'label'    => __('Light Color', 'cnb-consulting-theme'),
        'section'  => 'cnb_theme_colors',
        'priority' => 50,
    )));
}
add_action('customize_register', 'cnb_customizer_theme_colors', 10);