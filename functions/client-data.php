<?php
/**
 * Function for Client Data and Social Network Link
 *
 * @package cad
 * @author marcelbadua
 */

add_action( 'admin_init', 'client_data_init' );
add_action( 'admin_menu', 'client_data_add_page' );

/**
 * Init plugin options to white list our options
 */
function client_data_init(){
	register_setting( 
		'client_data', 
		'client_data_options', 
		'client_data_validate' 
	);
}

/**
 * Load up the menu page
 */
function client_data_add_page() {
	add_menu_page( 
		'Client Data',
		'Client Data',
		'edit_theme_options', 
		'theme_options', 
		'client_data_do_page',
		'',
		59 
	);
}

/**
 * Call on Theme
 */
function call_data($entry) {
    $options = get_option('client_data_options');
    return $options[$entry];
}

/**
 * Create the options page
 */
function client_data_do_page() {

	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">

		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Client Data', 'clientdata' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'clientdata' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
		
		<?php settings_fields( 'client_data' ); ?>
		
		<?php $options = get_option('client_data_options'); ?>

			<table class="form-table">

			<tr valign="top">
					<th colspan="2">
						<h3>General Information</h3>
						<hr>
					</th>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Contact Number', 'clientdata' ); ?>
					</th>
					<td>
						<input id="client_data_options[number]" class="regular-text" type="text" name="client_data_options[number]" value="<?php esc_attr_e( $options['number'] ); ?>" />
					</td>
				</tr>


				<tr valign="top">
					<th scope="row">
						<?php _e( 'Email', 'clientdata' ); ?>
					</th>
					<td>
						<input id="client_data_options[email]" class="regular-text" type="text" name="client_data_options[email]" value="<?php esc_attr_e( $options['email'] ); ?>" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Address', 'clientdata' ); ?>
					</th>
					<td>
						<input id="client_data_options[address]" class="regular-text" type="text" name="client_data_options[address]" value="<?php esc_attr_e( $options['address'] ); ?>" />	
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Company ', 'clientdata' ); ?>
					</th>
					<td>
						<textarea id="client_data_options[about]" class="large-text" cols="50" rows="10" name="client_data_options[about]"><?php echo esc_textarea( $options['about'] ); ?></textarea>
						<label class="description" for="client_data_options[company]"><?php _e( 'Short details about the company', 'clientdata' ); ?></label>
					</td>
				</tr>

				<tr valign="top">
					<th colspan="2">
						<h3>Social Links</h3>
						** Please add full link
						<hr>
					</th>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Facebook', 'clientdata' ); ?>
					</th>
					<td>
						<input id="client_data_options[facebook]" class="regular-text" type="text" name="client_data_options[facebook]" value="<?php esc_attr_e( $options['facebook'] ); ?>" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Twitter', 'clientdata' ); ?>
					</th>
					<td>
						<input id="client_data_options[twitter]" class="regular-text" type="text" name="client_data_options[twitter]" value="<?php esc_attr_e( $options['twitter'] ); ?>" />	
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Google Plus', 'clientdata' ); ?>
					</th>
					<td>
						<input id="client_data_options[google-plus]" class="regular-text" type="text" name="client_data_options[google-plus]" value="<?php esc_attr_e( $options['google-plus'] ); ?>" />	
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Linked In', 'clientdata' ); ?>
					</th>
					<td>
						<input id="client_data_options[linkedin]" class="regular-text" type="text" name="client_data_options[linkedin]" value="<?php esc_attr_e( $options['linkedin'] ); ?>" />	
					</td>
				</tr>

			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'clientdata' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function client_data_validate( $input ) {

	$input['number'] = wp_filter_nohtml_kses( $input['number'] );

	$input['email'] = wp_filter_nohtml_kses( $input['email'] );

	$input['address'] = wp_filter_nohtml_kses( $input['address'] );

	$input['facebook'] = wp_filter_nohtml_kses( $input['facebook'] );

	$input['twitter'] = wp_filter_nohtml_kses( $input['twitter'] );

	$input['google-plus'] = wp_filter_nohtml_kses( $input['google-plus'] );

	$input['linkedin'] = wp_filter_nohtml_kses( $input['linkedin'] );

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['company'] = wp_filter_post_kses( $input['company'] );

	return $input;
}