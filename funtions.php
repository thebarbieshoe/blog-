/*
 Theme Name:   Digital Dew Tour
 Description:  this is something new
 Author:       Julie
 Version:      1.0.0
*/

<?php

// adding my stylesheet file
function digitaldewtour_style() {
	wp_enqueue_style('main_css', get_template_directory_uri() . 'style.css' );

}




add_action( 'wp_enqueue_scripts', 'digitaldewtour_style' );

// adding my 2 javascript files
function digitaldewtour_js() {
	wp_enqueue_script( 'slider_js', get_template_directory_uri(). '/js/slider.js', array('jquery'), '', false );
	wp_enqueue_script( 'script_js', get_template_directory_uri(). '/js/script.js', array('jquery'), '', false );
}

add_action( 'wp_enqueue_scripts', 'digitaldewtour_js' );

//adding jquery
function insert_jquery(){
wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts','insert_jquery',1);

?>


