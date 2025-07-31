<?php

// Simple theme - test without Acorn first
function sage_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sage_setup');

function sage_enqueue_scripts() {
    wp_enqueue_style('sage-app', get_template_directory_uri() . '/dist/index-fNCE5DMw.css');
    wp_enqueue_script('sage-app', get_template_directory_uri() . '/dist/index-DR7iJmeQ.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'sage_enqueue_scripts');
