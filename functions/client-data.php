<?php
/**
 * Function for Client Data and Social Network Link
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

add_action (  'admin_menu', 'create_theme_options_page'  ) ;

function create_theme_options_page (  )  {  
	add_menu_page (  'Client Data', 'Client Data', 'edit_theme_options',  'theme_options',  'build_options_page', '', 2  ) ;
}

function build_options_page (  )  {?>  
	<div class="wrap">    
		<h2>Client Data Options</h2>    
		<form method="post" action="options.php" enctype="multipart/form-data">  
			<?php settings_fields ( 'plugin_options' ) ; ?>  
			<?php do_settings_sections ( __FILE__ ) ; ?>  
			
			<p class="submit">    
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e ( 'Save Changes' ) ; ?>" />  
			</p>
		</form>
	</div>
<?php
}

add_action ( 'admin_init', 'register_and_build_fields' ) ;

function register_and_build_fields (  )  { 

	register_setting ( 'plugin_options', 'plugin_options', 'validate_setting' ) ;

	add_settings_section ( 'main_section', 'Client Data', 'section_cb', __FILE__ ) ;

	add_settings_field ( 'client_address', 'Address:', 'client_address_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_phone', 'Phone:', 'client_phone_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_email', 'Email:', 'client_email_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_about', 'About:', 'client_about_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_facebook', 'Facebook:', 'client_facebook_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_twitter', 'Twitter:', 'client_twitter_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_google_plus', 'Google Plus:', 'client_google_plus_setting', __FILE__, 'main_section' ) ;

	add_settings_field ( 'client_linkedin', 'Linked In:', 'client_linkedin_setting', __FILE__, 'main_section' ) ;
}

function validate_setting ( $plugin_options )  {  
	return $plugin_options;
}

function section_cb (  )  {}

function client_address_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<input name='plugin_options[client_address]' class='regular-text' type='text' value='{$options['client_address']}' />";
}

function client_phone_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<input name='plugin_options[client_phone]' class='regular-text' type='text' value='{$options['client_phone']}' />";
}

function client_email_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<input name='plugin_options[client_email]' class='regular-text' type='text' value='{$options['client_email']}' />";
}

function client_about_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;
	echo "<textarea rows='5' class='large-text' id='plugin_options[client_about]' name='plugin_options[client_about]'>{$options['client_about']}</textarea>
	<p class='description'>In a few words, explain what your company is about.</p>
	";
}

function client_facebook_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>https://www.facebook.com/</code><input name='plugin_options[client_facebook]' class='regular-text' type='text' value='{$options['client_facebook']}' />";
}

function client_twitter_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>https://twitter.com/</code><input name='plugin_options[client_twitter]' class='regular-text' type='text' value='{$options['client_twitter']}' />";
}

function client_google_plus_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>https://www.google.com/+</code><input name='plugin_options[client_google_plus]' class='regular-text' type='text' value='{$options['client_google_plus']}' />";
}

function client_linkedin_setting (  )  {  
	$options = get_option ( 'plugin_options' ) ;  
	echo "<code>http://www.linkedin.com/</code><input name='plugin_options[client_linkedin]' class='regular-text' type='text' value='{$options['client_linkedin']}' />";
}