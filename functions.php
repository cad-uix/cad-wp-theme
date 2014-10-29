<?php

// general enqueue sciprts and styles
function cad_scripts_and_styles() {
    wp_register_script( 'google-map', 'http://maps.googleapis.com/maps/api/js?sensor=false&amp;extension=.js&amp;output=embed', array( 'jquery' ), 1.0, true );
    wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array( 'jquery' ), 1.0, true );
    wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), 1.0, true );

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, 1.0, 'screen' );
    wp_register_style( 'theme', get_template_directory_uri() . '/css/theme.css', null, 1.0, 'screen' );

    wp_enqueue_script( 'google-map' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'theme' );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'theme' );
}

add_action( 'wp_enqueue_scripts', 'cad_scripts_and_styles' );

// disables wordpress bar on front end
add_filter( 'show_admin_bar', '__return_false' );

require_once('functions/post.php');
require_once('functions/slideshow.php');
require_once ('functions/comments.php' );
require_once ('functions/featured-image.php' );
require_once('functions/pagination.php');
require_once ('functions/breadcrumb.php' );
require_once ('functions/navigation.php' );
require_once('vendor/wp_bootstrap_navwalker.php');
require_once ('functions/client-data.php' );

// Add RSS links to <head> section
add_theme_support( 'automatic-feed-links' );

// Clean up the <head>
function removeHeadLinks() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

//define('DISALLOW_FILE_EDIT', TRUE);