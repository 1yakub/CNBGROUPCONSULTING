<?php
/**
 * CNB Consulting Theme Customizer
 * 
 * This file loads all modularized customizer components
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Load helper functions
require_once get_template_directory() . '/inc/customizer/helpers.php';

// Load panels
require_once get_template_directory() . '/inc/customizer/panels.php';

// Load sections
require_once get_template_directory() . '/inc/customizer/sections/contact-info.php';
require_once get_template_directory() . '/inc/customizer/sections/company-details.php';
require_once get_template_directory() . '/inc/customizer/sections/theme-colors.php';
require_once get_template_directory() . '/inc/customizer/sections/homepage.php';
require_once get_template_directory() . '/inc/customizer/sections/statistics.php';

// Load assets management
require_once get_template_directory() . '/inc/customizer/assets.php';

/**
 * Add postMessage support for site title and description
 */
function cnb_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'cnb_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'cnb_customize_partial_blogdescription',
            )
        );
    }
}
add_action('customize_register', 'cnb_customize_register');

/**
 * Render the site title for the selective refresh partial.
 */
function cnb_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function cnb_customize_partial_blogdescription() {
    bloginfo('description');
}

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
function cnb_customizer_css() {
    $primary_color = get_theme_mod('cnb_primary_color', '#0056b3');
    $secondary_color = get_theme_mod('cnb_secondary_color', '#28a745');
    
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_attr($primary_color); ?>;
            --secondary-color: <?php echo esc_attr($secondary_color); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'cnb_customizer_css');