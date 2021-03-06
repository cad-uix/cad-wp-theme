<?php
/**
 * Functions
 *
 * @package cad-wp-theme
 * @author marcelbadua
*/


if ( ! function_exists( '_cad_theme_setup' ) ) : 

    function _cad_theme_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enables post thumbnail
         */
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-header' );

        add_theme_support( 'woocommerce' );

        /*
         * Common Navigation Location
         */
        register_nav_menus( array(
            'header-navigation' => __( 'Header Navigation' ),
            'footer-navigation' => __( 'Footer Navigation' ),
            'sidebar-navigation' => __( 'Sidebar Navigation' )
        ));

        /*
         * Sidebar Widgets
         */
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    

    }
endif; 
add_action( 'after_setup_theme', '_cad_theme_setup' );

add_filter( 'woocommerce_enqueue_styles', '__return_false' );


$defaults = array(
    'default-image'          => '',
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => false,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


/** 
 * Enqueue Scripts and Styles
 */
function enqueue_scripts_and_styles() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_register_style( 'cad-wp-theme', get_template_directory_uri() . '/css/styles.min.css', null, 1.0, 'screen' );
    wp_enqueue_style( 'cad-wp-theme' );
    
    wp_register_script( 'vendor', get_template_directory_uri() . '/js/plugins.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'vendor' );

    wp_register_script( 'cad-wp-theme', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery' ), 1.0, true );
    wp_enqueue_script( 'cad-wp-theme' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

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
require get_template_directory() . '/functions/bootstrap-functions.php';


require get_template_directory() . '/functions/social-list.php';

/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . '/functions/wp_bootstrap_navwalker.php';

/**
 * Required Plugins
 */
require get_template_directory() . '/functions/plugin.php';

/**
 * Meta for Sidebar
 */
require get_template_directory() . '/functions/sidebar.php';