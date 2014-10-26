<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'cad_options', 'cad_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_menu_page( __( 'Client Data', 'cadtheme' ), __( 'Client Data', 'cadtheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page','',59 );
}
/**
 * Create the options page
 */
function cad_option($entry) {
    $options = get_option('cad_theme_options');
    return $options[$entry];
}

function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'cadtheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'cadtheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
		
		<?php settings_fields( 'cad_options' ); ?>
		
		<?php
		$options = get_option('cad_theme_options');
       // global $options;

            ?>


			<table class="form-table">

			<tr valign="top">
					<th colspan="2">
						<h3>General Information</h3>
						<hr>
					</th>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Contact Number', 'cadtheme' ); ?></th>
					<td>
						<input id="cad_theme_options[number]" class="regular-text" type="text" name="cad_theme_options[number]" value="<?php esc_attr_e( $options['number'] ); ?>" />
						
					</td>
				</tr>


				<tr valign="top"><th scope="row"><?php _e( 'Email', 'cadtheme' ); ?></th>
					<td>
						<input id="cad_theme_options[email]" class="regular-text" type="text" name="cad_theme_options[email]" value="<?php esc_attr_e( $options['email'] ); ?>" />
						
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Address', 'cadtheme' ); ?></th>
					<td>
						<input id="cad_theme_options[address]" class="regular-text" type="text" name="cad_theme_options[address]" value="<?php esc_attr_e( $options['address'] ); ?>" />
						
					</td>
				</tr>

				

				<tr valign="top"><th scope="row"><?php _e( 'Company ', 'cadtheme' ); ?></th>
					<td>
						<textarea id="cad_theme_options[about]" class="large-text" cols="50" rows="10" name="cad_theme_options[about]"><?php echo esc_textarea( $options['about'] ); ?></textarea>
						<label class="description" for="cad_theme_options[sometextarea]"><?php _e( 'Short details about the company', 'cadtheme' ); ?></label>
					</td>
				</tr>



				<tr valign="top">
					<th colspan="2">
						<h3>Social Links</h3>
						<hr>
					</th>
				</tr>


				<tr valign="top"><th scope="row"><?php _e( 'Facebook', 'cadtheme' ); ?></th>
					<td>
						<input id="cad_theme_options[facebook]" class="regular-text" type="text" name="cad_theme_options[facebook]" value="<?php esc_attr_e( $options['facebook'] ); ?>" />
						
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Twitter', 'cadtheme' ); ?></th>
					<td>
						<input id="cad_theme_options[twitter]" class="regular-text" type="text" name="cad_theme_options[twitter]" value="<?php esc_attr_e( $options['twitter'] ); ?>" />
						
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Google Plus', 'cadtheme' ); ?></th>
					<td>
						<input id="cad_theme_options[google-plus]" class="regular-text" type="text" name="cad_theme_options[google-plus]" value="<?php esc_attr_e( $options['google-plus'] ); ?>" />
						
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Linked In', 'cadtheme' ); ?></th>
					<td>
						<input id="cad_theme_options[linkedin]" class="regular-text" type="text" name="cad_theme_options[linkedin]" value="<?php esc_attr_e( $options['linkedin'] ); ?>" />
						
					</td>
				</tr>

			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'cadtheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {

	$input['number'] = wp_filter_nohtml_kses( $input['number'] );

	$input['email'] = wp_filter_nohtml_kses( $input['email'] );

	$input['address'] = wp_filter_nohtml_kses( $input['address'] );

	$input['facebook'] = wp_filter_nohtml_kses( $input['facebook'] );

	$input['twitter'] = wp_filter_nohtml_kses( $input['twitter'] );

	$input['google-plus'] = wp_filter_nohtml_kses( $input['google-plus'] );

	$input['linkedin'] = wp_filter_nohtml_kses( $input['linkedin'] );

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}