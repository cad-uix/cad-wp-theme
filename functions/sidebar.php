<?php

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function sidebar_option_add_meta_box() {

	$screens = array( 'post', 'page' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'sidebar_option_sectionid',
			__( 'Show Sidebar', 'sidebar_option_textdomain' ),
			'sidebar_option_meta_box_callback',
			$screen
		);
	}
}
add_action( 'add_meta_boxes', 'sidebar_option_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function sidebar_option_meta_box_callback( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'sidebar_option_meta_box', 'sidebar_option_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_option_meta_value_key', true );

	// echo '<label for="sidebar_option_new_field">';
	// _e( 'Show the sidebar in the page', 'sidebar_option_textdomain' );
	// echo '</label> ';
	// echo '
	
	// <input type="text" id="sidebar_option_new_field" name="sidebar_option_new_field" value="' . esc_attr( $value ) . '" size="25" />

	// <input type="radio" name="sex" value="male">Male<br>
	// <input type="radio" name="sex" value="female">Female

	// ';

	?>
        <label for="sidebar_option_new_field"><?php _e( "Choose value:", 'choose_value' ); ?></label>
        <br />  
        <input type="checkbox" name="sidebar_option_new_field" value="value1" <?php checked( $value, 'checked' ); ?> >Show<br>
        
      
        <?php

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function sidebar_option_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['sidebar_option_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['sidebar_option_meta_box_nonce'], 'sidebar_option_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( ! isset( $_POST['sidebar_option_new_field'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['sidebar_option_new_field'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, '_my_meta_value_key', $my_data );
}
add_action( 'save_post', 'sidebar_option_save_meta_box_data' );