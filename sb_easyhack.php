<?php  
/*Plugin Name: SB Easy Hack
Plugin URI: http://www.sweetberries.de/
Description: Keep your hacks on theme switches and updates! Check the Easy Hack options under your settings panel.
Version: 1.0
Author: Marcel Flaig
Author URI: http://www.sweetberries.de/
Update Server: http://www.sweetberries.de/wp-content/download/wp/
Min WP Version: 1.5

Copyright 2011 Marcel Flaig  (email : info@sweetberries.de) */

include 'sb_options.php';

function sb_easyhack_insert_head() {
$options = get_option('sb_easyhack_options');
echo $options['text_string'];
}

add_action('wp_head', 'sb_easyhack_insert_head'); ?>