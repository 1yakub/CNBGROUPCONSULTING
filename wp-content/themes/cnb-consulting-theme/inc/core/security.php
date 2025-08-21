<?php
/**
 * Security Enhancements
 * 
 * Security measures to protect the theme and WordPress installation
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Security enhancements
 */

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Remove Windows Live Writer manifest link
remove_action('wp_head', 'wlwmanifest_link');

// Remove RSD link
remove_action('wp_head', 'rsd_link');