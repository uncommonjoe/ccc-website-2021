<?php

/* Theme setup */
//add_action( 'after_setup_theme', 'wpt_setup' );

// Register styles and scripts

add_action('wp_enqueue_scripts', 'ccc_theme_styles');
add_action('wp_enqueue_scripts', 'ccc_theme_scripts');


function ccc_theme_styles()
{
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.min.css', false, '3.1.8', 'all');
}

function ccc_theme_scripts()
{
    //
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.min.js', false, '3.2.1', 'all');
    wp_enqueue_script('angular-js', '//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.4/angular.min.js', false, '1.3.0', 'all');
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', false, '1.11.0', 'all');
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', false, '4.0.0', 'all');
    
    
    // Third Party Scripts
    wp_enqueue_script('scrollMagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js', false, '2.0.8', 'all');
    wp_enqueue_script('gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', false, '3.6.0', 'all');
    wp_enqueue_script('scrollMagic-indicators', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', false, '2.0.7', 'all');
    wp_enqueue_script('lodash', '//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.core.min.js', false, '4.17.15', 'all');
    wp_enqueue_script('fitvids', '//cdnjs.cloudflare.com/ajax/libs/fitvids/1.2.0/jquery.fitvids.min.js', false, '1.2.0', 'all');

    // Load App
    wp_enqueue_script('angular-module', get_template_directory_uri() . '/app/app.module.js', false, '3.0.0', 'all');
    wp_enqueue_script('angular-app', get_template_directory_uri() . '/app/app.js', false, '3.0.0', 'all');

    // Load Contrllers
    wp_enqueue_script('contact-controller', get_template_directory_uri() . '/app/controllers/ContactController.js', false, '3.0.0', 'all');
    
    // Load Directives
    wp_enqueue_script('live-service-directive', get_template_directory_uri() . '/app/directives/LiveServiceDirective.js', false, '3.1.1', 'all');
    wp_enqueue_script('responsive-video-directive', get_template_directory_uri() . '/app/directives/ResponsiveVideoDirective.js', false, '3.0.0', 'all');
    //wp_enqueue_script('map-directive', get_template_directory_uri() . '/app/directives/MapDirective/MapDirective.js', false, '3.0.0', 'all');

    // Load Services
    wp_enqueue_script('constant-service', get_template_directory_uri() . '/app/services/ConstantService.js', false, '3.2.1', 'all');
}


// Register Menu
register_nav_menus(array(
'nav-primary' => 'Nav Primary',
'menu_about' => 'Menu About',
'menu_connect' => 'Menu Connect',
'menu_sermons' => 'Menu Sermons',
'menu_cornerstone' => 'Menu Cornerstone',
));

// Registers Google Maps API for Advanced Custom Fields
function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyB3Tdf_NksajErvtWwMOmz2-2Jjezdfz6E');
}
add_action('acf/init', 'my_acf_init');

// Removes jQuery include file that is duplicated with the template
add_filter('wpcf7_load_js', '__return_false');

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Advanced Custom Field create global settings page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Sermon Settings',
        'menu_title' => 'Sermons',
        'parent_slug' => 'theme-general-settings',
    ));
}


add_filter('body_class', 'sk_body_class_for_pages');

/**
* Adds a css class to the body element
*
* @param array $classes the current body classes
* @return array $classes modified classes
*/

function sk_body_class_for_pages($classes)
{
    if (is_singular('page')) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }

    return $classes;
}

$defaults = array(
    'default-image' => get_template_directory_uri() . '/img/header-photos/blue/church-building.jpg',
    'flex-width' => true,
    'width' => 980,
    'flex-height' => true,
    'height' => 200,
    'uploads' => true,
    'random-default' => false,
    'header-text' => true,
    'default-text-color' => '',
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);

add_theme_support('custom-header', $defaults);