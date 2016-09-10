<?php

/*
plugin Name:  killJi
Description:  Kill the Emoji with this plugin that removes all the extra scritping and code related to the new emojis that are included on every page of WordPress.    
Plugin Url:  https://texxsmith.net/killJi
Version: 0.1
Plugin Author:  Texx Smith
Author URL: http://texxsmith.com
*/

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

?>
