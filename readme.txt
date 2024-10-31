=== Sweetberries WP Easy Hack ===
Contributors: 	sweetberry 174903 
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5KNZUUECS6LTL
Tags: easy, hack, easyhack, wordpress,flaig ,sweetberries
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: 1.0

Sweetberries WP Easy Hack is a Wordpress plugin intended to make it easy for everybody to keep their modifications on theme changes and 
updates

== Description ==

This Plugin is made to help developers in their everyday-tasks and to make
their code easy to maintain. All vars and functions have a sb_prefix, there are no depricated functions used and
your modification code is echoed via a nice clean wp header hook. Have a look under FAQ for some examples.

FEATURE REQUESTS ARE ALWAYS WELCOME

Copyright 2011 Marcel Flaig  (email : info@sweetberries.de)



== Installation ==

Is there something easier?

1. Select the Plugins Page in your Wordpress Admin panel.
2. Select the Easy Hack Plugin, via upload if you have the zip file or via search if you don't.
3. Click Install
4. Activate the plugin through the 'Plugins' menu in WordPress
5. Paste your modification code to the options page of Easy Hack.
6. Done.

== Frequently Asked Questions ==

= What if i have any questions? =

Don't hesitate to contact me via info@sweetberries.de

= What is meant by 'Hack' =

A so called 'Hack' or ' Wordpress Hack' is a modification of an exisiting wordpress theme or setup. 
Originally done by writing directly html or php to the corresponding php files. 


= Are there some example Hacks? =

You can for example place an image via simple html in your header:
<IMG SRC="http://www.sweetberries.de/wp-content/nonwpupload/cherries.png"  ALIGN=bottom>

Change the css
echo "<link rel='stylesheet' href='Stylesheet.css' type= 'text/css' media='screen' />";

Or you can do more complicated stuff like changing css behaviour depending on categories 
Note: you NEED to have page_cats and some $available_themes etc. enabled for this to work:

<?php
if ( in_category( 'Test' ) ) {
	echo "<link rel='stylesheet' href='{$available_themes[$current_theme]}' type= 'text/css' media='screen' />";
}
?>

== Changelog ==

= 1.0 =
* Nothing has changed.
= 0.3 =
* Added a textarea instead of input field
= 0.2 =
* Added donation link and examples
= 0.1 =
* Added Optionspage and header hook
