<?php
/****************************** Required Files */


/***************************** User Login / Logut */
function cyn_logout_user() {
	wp_redirect( site_url() );
	exit();
}

add_action( 'wp_logout', 'cyn_logout_user' );

add_filter( 'login_errors', function () {
	return null;
} );


function cyn_enqueue_files() {

	wp_enqueue_style( 'cyn-compiled', get_stylesheet_directory_uri() . '/css/compiled.css' ); //When @build must change to final.css
	wp_enqueue_style( 'cyn-style', get_stylesheet_directory_uri() );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'global-styles-inline' );
	wp_dequeue_style( 'classic-themes-styles-inline' );


	wp_enqueue_script( 'cyn-global', get_stylesheet_directory_uri() . '/js/dist/scripts.bundle.js', [], false, true ); //When @build must change to scripts.bundle.min.js 
	wp_dequeue_script( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'cyn_enqueue_files' );

remove_action( 'wp-head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


function cyn_admin_files() {
	wp_enqueue_style( 'cyn-admin', get_stylesheet_directory_uri() . '/css/admin.css' );
}

add_action( 'admin_enqueue_scripts', 'cyn_admin_files' );



function cyn_theme_setup() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( [ 
		'header-menu' => 'Header',
		'footer-menu' => 'Footer'
	] );
}
add_action( 'after_setup_theme', 'cyn_theme_setup' );



function cyn_theme_init() {
	add_filter( 'use_block_editor_for_post', '__return_false' );
}
add_action( 'init', 'cyn_theme_init' );


/***************************** Instance Classes */