<?php
/**
 * Statistics Section Customizer Settings
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register statistics section and settings
 */
function cnb_customizer_statistics($wp_customize) {
    // Statistics Section
    $wp_customize->add_section('cnb_statistics', array(
        'title'    => __('Statistics', 'cnb-consulting-theme'),
        'panel'    => 'cnb_settings',
        'priority' => 50,
    ));

    // Statistics fields
    $stats = array(
        'clients' => array(
            'label'   => __('Happy Clients', 'cnb-consulting-theme'),
            'default' => '500',
        ),
        'projects' => array(
            'label'   => __('Projects Completed', 'cnb-consulting-theme'),
            'default' => '1000',
        ),
        'experience' => array(
            'label'   => __('Years of Experience', 'cnb-consulting-theme'),
            'default' => '15',
        ),
        'team' => array(
            'label'   => __('Team Members', 'cnb-consulting-theme'),
            'default' => '50',
        ),
    );

    $priority = 10;
    foreach ($stats as $key => $stat) {
        // Statistic Value
        $wp_customize->add_setting("cnb_stat_{$key}_value", array(
            'default'           => $stat['default'],
            'sanitize_callback' => 'absint',
        ));

        $wp_customize->add_control("cnb_stat_{$key}_value", array(
            'label'    => $stat['label'] . ' ' . __('Value', 'cnb-consulting-theme'),
            'section'  => 'cnb_statistics',
            'type'     => 'number',
            'priority' => $priority,
        ));

        // Statistic Label
        $wp_customize->add_setting("cnb_stat_{$key}_label", array(
            'default'           => $stat['label'],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control("cnb_stat_{$key}_label", array(
            'label'    => $stat['label'] . ' ' . __('Label', 'cnb-consulting-theme'),
            'section'  => 'cnb_statistics',
            'type'     => 'text',
            'priority' => $priority + 1,
        ));

        $priority += 10;
    }
}
add_action('customize_register', 'cnb_customizer_statistics', 10);