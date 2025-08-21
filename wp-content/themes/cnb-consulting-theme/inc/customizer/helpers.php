<?php
/**
 * Customizer Helper Functions
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Sanitize checkbox
 */
function cnb_sanitize_checkbox($checked) {
    return ((isset($checked) && true == $checked) ? true : false);
}

/**
 * Sanitize select
 */
function cnb_sanitize_select($input, $setting) {
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control($setting->id)->choices;
    
    return (array_key_exists($input, $choices) ? $input : $setting->default);
}

/**
 * Sanitize image
 */
function cnb_sanitize_image($image, $setting) {
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    
    $file = wp_check_filetype($image, $mimes);
    
    return ($file['ext'] ? $image : $setting->default);
}