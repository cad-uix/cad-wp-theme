<?php 

/**
 * Adds a box to the main column on the Post add/edit screens.
 */
function wdm_add_meta_box() {

    $screens = array( 'post', 'page' );

    foreach ( $screens as $screen ) {

         add_meta_box(
                'wdm_sectionid', 'Show Sidebar', 'wdm_meta_box_callback', $screen, 'side'
        ); //you can change the 4th paramter i.e. post to custom post type name, if you want it for something else

    }


       
}

add_action( 'add_meta_boxes', 'wdm_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function wdm_meta_box_callback( $post ) {

        // Add an nonce field so we can check for it later.
        wp_nonce_field( 'wdm_meta_box', 'wdm_meta_box_nonce' );

        /*
         * Use get_post_meta() to retrieve an existing value
         * from the database and use the value for the form.
         */
        $value = get_post_meta( $post->ID, 'sidebar_meta', true ); //sidebar_meta is a meta_key. Change it to whatever you want

        ?>
        <label for="wdm_new_field"><?php _e( "Choose value:", 'choose_value' ); ?></label>
        <br />  
        <input type="radio" name="the_name_of_the_radio_buttons" value="no_sidebar" <?php checked( $value, 'no_sidebar' ); ?> >No Sidebar<br>
        <input type="radio" name="the_name_of_the_radio_buttons" value="left_sidebar" <?php checked( $value, 'left_sidebar' ); ?> >Left Sidebar<br>
        <input type="radio" name="the_name_of_the_radio_buttons" value="right_sidebar" <?php checked( $value, 'right_sidebar' ); ?> >Right Sidebar<br>

        <?php

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function wdm_save_meta_box_data( $post_id ) {

        /*
         * We need to verify this came from our screen and with proper authorization,
         * because the save_post action can be triggered at other times.
         */

        // Check if our nonce is set.
        if ( !isset( $_POST['wdm_meta_box_nonce'] ) ) {
                return;
        }

        // Verify that the nonce is valid.
        if ( !wp_verify_nonce( $_POST['wdm_meta_box_nonce'], 'wdm_meta_box' ) ) {
                return;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }

        // Check the user's permissions.
        if ( !current_user_can( 'edit_post', $post_id ) ) {
                return;
        }


        // Sanitize user input.
        $new_meta_value = ( isset( $_POST['the_name_of_the_radio_buttons'] ) ? sanitize_html_class( $_POST['the_name_of_the_radio_buttons'] ) : '' );

        // Update the meta field in the database.
        update_post_meta( $post_id, 'sidebar_meta', $new_meta_value );

}

add_action( 'save_post', 'wdm_save_meta_box_data' );