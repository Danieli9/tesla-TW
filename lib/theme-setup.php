<?php

//-----------------------------------------------------
// Theme and Post Support
//-----------------------------------------------------
function tesla_register_custom_nav_menus() {
	register_nav_menus(
		array(
			'tesla-master' => 'Primary',
		)
	);
}
add_action( 'after_setup_theme', 'tesla_register_custom_nav_menus' );

//-----------------------------------------------------
// Enqueue scripts and styles
//-----------------------------------------------------

function tesla_scripts() {
	wp_enqueue_style( 'tesla', get_template_directory_uri() . '/dist/css/output.css', '', '1.0.0' );
	wp_enqueue_script( 'tesla', get_template_directory_uri() . '/dist/js/script.js', array( 'jquery' ), '1.0.0', false );

}

add_action( 'wp_enqueue_scripts', 'tesla_scripts' );

#-- ACF JSON Save
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf-json';

    // return
    return $path;

}

#-- ACF JSON Load
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);

    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';

    // return
    return $paths;

}

#-- Block Categories
function block_categories( $categories, $post ) {
	return array_merge(
		array(
			array(
				'slug' => 'tesla-theme-blocks',
				'title' => 'Tesla Theme Blocks',
				'icon'  => 'wordpress',
			),
		),
		$categories
	);
}
add_filter( 'block_categories', 'block_categories', 10, 2 );

// Add Option Page for ACF
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => true
    ));
}

// Add subpage "Header Settings" to Option Page
if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-options',
    ));
}

// Add subpage "Theme Settings" to Option Page
if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme',
        'parent_slug'   => 'theme-options',
    ));
}

// Add subpage "Footer Settings" to Option Page
if( function_exists('acf_add_options_sub_page') ) {
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-options',
    ));
}
