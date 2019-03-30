<?php 
/*This file is part of Bizlite Business child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

add_action( 'wp_enqueue_scripts', 'bizlite_wp_enqueue_child_styles');
function bizlite_wp_enqueue_child_styles() {
	wp_enqueue_style( 'bizlite-business-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','font-awesome'), '', 'all');
   wp_enqueue_style( 'bizlite-business-child',get_stylesheet_directory_uri() . '/css/child.css');
  
}

