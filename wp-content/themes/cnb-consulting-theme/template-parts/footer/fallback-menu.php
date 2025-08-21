<?php
/**
 * Footer Fallback Menu Component
 * Fallback function for footer menu
 *
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Fallback function for footer menu
 */
function cnb_consulting_footer_menu_fallback() {
    echo '<ul class="space-y-2">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="text-gray-300 hover:text-cnb-secondary transition">' . __('Home', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '" class="text-gray-300 hover:text-cnb-secondary transition">' . __('About Us', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services/')) . '" class="text-gray-300 hover:text-cnb-secondary transition">' . __('Services', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '" class="text-gray-300 hover:text-cnb-secondary transition">' . __('Contact', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog/')) . '" class="text-gray-300 hover:text-cnb-secondary transition">' . __('Blog', 'cnb-consulting-theme') . '</a></li>';
    echo '</ul>';
}