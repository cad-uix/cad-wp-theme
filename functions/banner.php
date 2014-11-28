<?php
/**
 * Creates a custom Post Type Banner and function for displaying Banner on template.
 *
 * @package oracle
 * @author marcelbadua
 */

if( !function_exists('register_banner') ):

    /*
     * creates a custom thumbnail for banner
     */
    add_image_size( 'banner', 800, 400, true );

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
            'supports'      => array( 'title', 'thumbnail'),
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
    add_action('do_meta_boxes', 'customposttype_image_box');

    /*
     * creates custom field for banner text
     */
    add_action( 'save_post', 'your_meta_box_save' );
    add_action( 'add_meta_boxes', 'your_meta_box_add' );

    function your_meta_box_add(){
        add_meta_box( 'predefined_field', 'Banner Text', 'your_meta_box_html', 'banner', 'normal', 'high' );
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

            $your_predefined_value = isset($_POST['banner_text']) ? $_POST['banner_text'] : '';

            if( $your_predefined_value )
              update_post_meta($post_id,'banner_text',$your_predefined_value);
            }

            function your_meta_box_html( $post ){

              wp_nonce_field( 'your_meta_box_nonce', 'meta_box_nonce' );

              //if you know it is not an array, use true as the third parameter
              $your_predefined_value = get_post_meta($post->ID,'banner_text',true);

              ?>

             <textarea name="banner_text" id="banner_text" type="text"  value="" class="mws-textinput" style="width: 100%;" rows="8"><?php echo $your_predefined_value; ?></textarea>

              <?php
            }


    function call_banner() {
        get_template_part( 'content', 'banner' );
    }

endif;