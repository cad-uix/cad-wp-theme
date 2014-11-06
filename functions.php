<?php
/**
 * Functions
 *
 * @package cad
 */

/** 
 * Enqueue Scripts and Styles
 */
function enqueue_scripts_and_styles() {
    
    wp_register_script( 'google-map', 'http://maps.googleapis.com/maps/api/js?sensor=false&amp;extension=.js&amp;output=embed', array( 'jquery' ), 1.0, true );
    wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array( 'jquery' ), 1.0, true );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), 1.0, true );

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, 1.0, 'screen' );
    wp_register_style( 'theme', get_template_directory_uri() . '/css/theme.css', null, 1.0, 'screen' );

    wp_enqueue_style( 'cad-style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'google-map' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'main' );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'theme' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

/**
 * Enables post thumbnail
 */
if ( function_exists( 'add_theme_support' ) ) {
	
    add_theme_support( 'post-thumbnails' );
}

/**
 * Create a function for calling post
 */
require get_template_directory() . 'functions/post.php';

/**
 * Adds Admin menu Page for custom post banner and function to display on template, bootstrap compatible
 */
require get_template_directory() . 'functions/banner.php';

/**
 * Adds Admin menu Page for Client Contact Details and Social Network Links
 */
require get_template_directory() . 'functions/client-data.php';

/**
 * Bootstrap Extra Navigation Functions
 */
require get_template_directory() . 'functions/breadcrumb.php';
require get_template_directory() . 'functions/navigation.php';
require get_template_directory() . 'functions/pagination.php';

/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . 'vendor/wp_bootstrap_navwalker.php';

/**
 *
 * Disable support for comments and trackbacks in post types
 */
require get_template_directory() . 'functions/comments.php';

/**
 * disallow wordpress built-in editor
 */
//define('DISALLOW_FILE_EDIT', TRUE);