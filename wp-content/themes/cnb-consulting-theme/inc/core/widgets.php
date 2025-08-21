<?php
/**
 * Widget Areas Registration
 * 
 * Registers all theme widget areas (sidebars)
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register widget areas
 */
function cnb_consulting_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'cnb-consulting-theme'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in the first footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'cnb-consulting-theme'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in the second footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 3', 'cnb-consulting-theme'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in the third footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 4', 'cnb-consulting-theme'),
        'id'            => 'footer-4',
        'description'   => __('Add widgets here to appear in the fourth footer column.', 'cnb-consulting-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'cnb_consulting_widgets_init');