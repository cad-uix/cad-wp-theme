<?php


if ( function_exists( 'add_theme_support' ) ) {
	
    add_theme_support( 'post-thumbnails' );
	
    update_option('thumbnail_size_w', 150);
    update_option('thumbnail_size_h', 150);

    update_option('medium_size_w', 360);
    update_option('medium_size_h', 360);

}

?>