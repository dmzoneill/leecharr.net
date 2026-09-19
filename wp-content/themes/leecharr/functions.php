<?php
/**
 * Leecharr Theme Functions
 *
 * @package Leecharr
 */

if (!defined('ABSPATH')) {
    exit;
}

function leecharr_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('responsive-embeds');

    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'leecharr'),
    ));
}
add_action('after_setup_theme', 'leecharr_setup');

function leecharr_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    // Vendor CSS
    wp_enqueue_style('leecharr-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.4.1');
    wp_enqueue_style('leecharr-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.0.0');
    wp_enqueue_style('leecharr-highlight', get_template_directory_uri() . '/assets/css/highlight-github-dark.min.css', array(), '11.0.0');
    
    // Theme main stylesheet
    wp_enqueue_style('leecharr-style', get_stylesheet_uri(), array('leecharr-bootstrap'), $theme_version);

    // Scripts
    wp_enqueue_script('leecharr-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.4.1', true);
    wp_enqueue_script('leecharr-highlight-js', get_template_directory_uri() . '/assets/js/highlight.min.js', array(), '11.0.0', true);
    wp_enqueue_script('leecharr-app', get_template_directory_uri() . '/assets/js/app.js', array('jquery', 'leecharr-bootstrap-js'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'leecharr_scripts');
