<?php

/* Theme setup */
//add_action( 'after_setup_theme', 'wpt_setup' );

// Register Menu
register_nav_menus( array(
    'primary' => 'Header Primary Nav',
    'menu_about' => 'Menu About',
    'menu_connect' => 'Menu Connect',
    'menu_resources' => 'Menu Resources',
    'menu_contact' => 'Menu Contact'
) );

// Removes jQuery include file that is duplicated with the template
add_filter( 'wpcf7_load_js', '__return_false' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// Register latest sermon 
$latest_sermon = new WP_Query(array(
    'post_type' => 'wpfc_sermon',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'wpfc_service_type' => 'sunday-am',
    // The last three parameters will optimize your query
    'no_found_rows' => true,
    'update_post_term_cache' => false,
    'update_post_meta_cache' => false
));

add_filter( 'body_class', 'sk_body_class_for_pages' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function sk_body_class_for_pages( $classes ) {

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;

}

$defaults = array(
    'default-image' => get_template_directory_uri() . '/img/img2.jpg',
    'flex-width'                => true,
    'width'                     => 980,
    'flex-height'               => true,
    'height'                    => 200,
    'uploads'                   => true,
    'random-default'            => false,
    'header-text'               => true,
    'default-text-color'        => '',
    'wp-head-callback'          => '',
    'admin-head-callback'       => '',
    'admin-preview-callback'    => '',
);
add_theme_support( 'custom-header', $defaults );
?>