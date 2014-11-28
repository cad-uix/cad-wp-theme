<?php
/**
 * Functions
 *
 * @package oracle
 * @author marcelbadua
 */

/** 
 * Enqueue Scripts and Styles
 */
function enqueue_scripts_and_styles() {

    wp_enqueue_style( 'wordpress-default', get_stylesheet_uri() );

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_script( 'njprogress', get_template_directory_uri() . '/vendor/njprogress.js', array( 'jquery' ), 1.0, false );
    wp_enqueue_script( 'njprogress' );
    
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'scripts' );

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
require get_template_directory() . '/functions/post.php';

/**
 * Adds Admin menu Page for custom post banner and function to display on template, bootstrap compatible
 */
require get_template_directory() . '/functions/banner.php';

/**
 * Adds Admin menu Page for Client Contact Details and Social Network Links
 */
require get_template_directory() . '/functions/client-data.php';

/**
 * Bootstrap Extra Navigation Functions
 */
require get_template_directory() . '/functions/breadcrumb.php';
require get_template_directory() . '/functions/navigation.php';
require get_template_directory() . '/functions/pagination.php';

/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . '/functions/wp_bootstrap_navwalker.php';

/**
 *
 * Disable support for comments and trackbacks in post types
 */
require get_template_directory() . '/functions/comments.php';

/**
 * disallow wordpress built-in editor
 */
//define('DISALLOW_FILE_EDIT', TRUE);


//add_filter('show_admin_bar', '__return_false');