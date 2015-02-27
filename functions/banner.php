<?php
/**
* Creates a custom Post Type Banner and function for displaying Banner on template.
*
* @package cad-wp-theme
* @author marcelbadua
*/

if( !function_exists( 'register_banner' ) ):

	/*
	* custom post type for banner
	*/
	function post_banner() {
		$labels = array(
			'name'               => _x( 'Banners', 'post type general name' ),
			'singular_name'      => _x( 'Banner', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'Banner' ),
			'add_new_item'       => __( 'Add New Banner' ),
			'edit_item'          => __( 'Edit Banner' ),
			'new_item'           => __( 'New Banner' ),
			'all_items'          => __( 'All Banner' ),
			'view_item'          => __( 'View Banner' ),
			'search_items'       => __( 'Search Banner' ),
			'not_found'          => __( 'No Banner found' ),
			'not_found_in_trash' => __( 'No Banner found in the Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Banner'
		);
		$args = array(
			'labels'        => $labels,
			'description'   => 'Banners',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'thumbnail', 'editor' ),
			'has_archive'   => true,
		);
		register_post_type( 'banner', $args );
	}
	add_action( 'init', 'post_banner' );

	/*
	* transfers featured image after title
	*/
	function customposttype_image_box() {
		remove_meta_box( 'postimagediv', 'customposttype', 'side' );
		add_meta_box('postimagediv', __('Banner Image'), 'post_thumbnail_meta_box', 'banner', 'normal', 'high');
	}

	add_action( 'do_meta_boxes', 'customposttype_image_box' );

endif;