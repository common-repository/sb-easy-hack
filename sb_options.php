<?php /*
http://www.sweetberries.de/
Author: Marcel Flaig
Copyright 2011 Marcel Flaig  (email : info@sweetberries.de)
*/

//add the admin options page
	add_action('admin_menu', 'sb_easyhack_admin_add_page');

	function sb_easyhack_admin_add_page() {
		add_options_page('Sweetberries Wordpress Easy Hack', 'Easy Hack', 'manage_options', 'sb_easyhack', 'sb_easyhack_options');
						}
	
// add the admin settings and such
	add_action('admin_init', 'sb_easyhack_admin_init');

	function sb_easyhack_admin_init(){
			register_setting( 'sb_easyhack_options', 'sb_easyhack_options', 'sb_easyhack_options_validate' );
			add_settings_section('sb_easyhack_main', 'Header Hacks', 'sb_easyhack_section_text', 'sb_easyhack');
			add_settings_field('sb_easyhack_text_string', 'Header Hack:', 'sb_easyhack_setting_string', 'sb_easyhack', 'sb_easyhack_main');

	}
 function sb_easyhack_section_text() {
	echo '<p>Drag and drop the lower right bottom of the textbox to fit it to your screen.</p>';
echo '<p>Paste your header.php modifications here:</p>';
	} 

function sb_easyhack_setting_string() {
	$options = get_option('sb_easyhack_options');

echo "<textarea id='sb_easyhack_text_string' name= 'sb_easyhack_options[text_string]' value='{$options['text_string']}' cols='40' rows='10' wrap='off'>{$options['text_string']}</textarea>";


	} 

 // validate our options
	function sb_easyhack_options_validate($input) {
return $input;
	}


 // display the admin options page
	function sb_easyhack_options() {

			?>
			<div>
			<h2>Sweetberries Easy Hack</h2>
			Manage your Hacks
			<form action="options.php" method="post">
			<?php settings_fields('sb_easyhack_options'); ?>
			<?php do_settings_sections('sb_easyhack'); ?>
	
			<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
			</form></div>
	 
<p> </p>
<h1>Need more Options?</h1>
<h2>There are a lot of nice things missing, like managing different hacks for the header seperately or like adding hacks to other parts like the footer. so don't forget to:</h2>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5KNZUUECS6LTL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>


			<?php


				}?>





