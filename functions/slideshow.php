<?php
/**
 * Plugin Name: CAD slideshow
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */

if( !function_exists('cad_register_banner_slideshow') ):


// creates a custom thumbnail for slideshow
add_image_size( 'slideshow', 800, 400, true );

// uses custom post type for slideshow
function post_slideshow() {
  $labels = array(
    'name'               => _x( 'Slideshows', 'post type general name' ),
    'singular_name'      => _x( 'Slideshow', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Slideshow' ),
    'add_new_item'       => __( 'Add New Slideshow' ),
    'edit_item'          => __( 'Edit Slideshow' ),
    'new_item'           => __( 'New Slideshow' ),
    'all_items'          => __( 'All Slideshow' ),
    'view_item'          => __( 'View Slideshow' ),
    'search_items'       => __( 'Search Slideshow' ),
    'not_found'          => __( 'No Slideshow found' ),
    'not_found_in_trash' => __( 'No Slideshow found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Slideshow'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Slideshows',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'slideshow', $args );
}

add_action( 'init', 'post_slideshow' );


// transfers featured image after title
add_action('do_meta_boxes', 'customposttype_image_box');
function customposttype_image_box() {
  remove_meta_box( 'postimagediv', 'customposttype', 'side' );
  add_meta_box('postimagediv', __('Slideshow Image'), 'post_thumbnail_meta_box', 'slideshow', 'normal', 'high');
}


// creates custom field for slideshow text
add_action( 'save_post', 'your_meta_box_save' );
add_action( 'add_meta_boxes', 'your_meta_box_add' );
function your_meta_box_add(){
  add_meta_box( 'predefined_field', 'Slideshow Text', 'your_meta_box_html', 'slideshow', 'normal', 'high' );
}
function your_meta_box_save( $post_id ){

  // Bail if we're doing an auto save
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

  // if our nonce isn't there, or we can't verify it, bail
  if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'your_meta_box_nonce' ) ) return;

  // if our current user can't edit this post, bail
  if( !current_user_can( 'edit_post' ) ) return;

  // now we can actually save the data
  $allowed = array( 
    'a' => array( // on allow a tags
    'href' => array() // and those anchords can only have href attribute
  )
);

$your_predefined_value = isset($_POST['slideshow_text']) ? $_POST['slideshow_text'] : '';

if( $your_predefined_value )
  update_post_meta($post_id,'slideshow_text',$your_predefined_value);
}

function your_meta_box_html( $post ){

  wp_nonce_field( 'your_meta_box_nonce', 'meta_box_nonce' );

  //if you know it is not an array, use true as the third parameter
  $your_predefined_value = get_post_meta($post->ID,'slideshow_text',true);

  ?>

 <textarea name="slideshow_text" id="slideshow_text" type="text"  value="" class="mws-textinput" style="width: 100%;" rows="8"><?php echo $your_predefined_value; ?></textarea>

  <?php
}


function cad_slideshow($show_title = 'true')
  {
    //get_template_directory_uri() . 
    //include ( 'template-slideshow.php' );

    //include ( '../template-slideshow.php' );

    get_template_part( 'inc/content', 'slideshow' );

  }

endif;