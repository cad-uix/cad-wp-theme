<?php
/**
 * Functions
 *
 * @package oracle
 * @author marcelbadua
 */


if ( ! function_exists( '_cad_theme_setup' ) ) : 

    function _cad_theme_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ) );
        /**
         * Enables post thumbnail
         */
        add_theme_support( 'post-thumbnails' );

    }
endif; // _s_setup
add_action( 'after_setup_theme', '_cad_theme_setup' );

/** 
 * Enqueue Scripts and Styles
 */
function enqueue_scripts_and_styles() {

    wp_enqueue_style( 'wordpress_default', get_stylesheet_uri() );

    wp_register_style( 'oracle_bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'oracle_bootstrap' );
    
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_style( 'jquery-prettyPhoto', get_template_directory_uri() . '/vendor/jquery-prettyPhoto/css/prettyPhoto.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'jquery-prettyPhoto' );

    wp_register_script( 'jquery-prettyPhoto', get_template_directory_uri() . '/vendor/jquery-prettyPhoto/js/jquery.prettyPhoto.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'jquery-prettyPhoto' );

    wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'scripts' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

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

require get_template_directory() . '/functions/pagination.php';

/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . '/functions/wp_bootstrap_navwalker.php';


require get_template_directory() . '/functions/navigation.php';

/**
 *
 * Disable support for comments and trackbacks in post types
 */
require get_template_directory() . '/functions/comments.php';

//define('DISALLOW_FILE_EDIT', TRUE);
//add_filter('show_admin_bar', '__return_false');