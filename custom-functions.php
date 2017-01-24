<?php

// Load editor styles 
function add_editor_styles() {
	add_editor_style( get_stylesheet_uri() );
}

add_action( 'init', 'add_editor_styles' );

// Load styles & scripts
function pluslife_styles_scripts() { 
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700|Merriweather:300,300i,400,400i,700');

	// wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_script( 'html5shiv', '//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', '//oss.maxcdn.com/respond/1.4.2/respond.min.js' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/assets/bootstrap/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'ie10_js', get_template_directory_uri() . '/js/assets/bootstrap/ie10-viewport-bug-workaround.js' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom/custom.js');

}

add_action( 'wp_enqueue_scripts', 'pluslife_styles_scripts' );

// Make responsive sidebar if is active
function sidebar_filter($default) {
  if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	  return 'col-sm-12';
	} else {
		return 'col-md-8';
	}
}

add_filter('full_width', 'sidebar_filter');

// Post thumbnails image size
add_image_size('large-thumb', 1140, 420, true );
add_image_size('index-thumb', 750, 250, true );


// Register Custom Navigation Walker
// https://github.com/twittem/wp-bootstrap-navwalker
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

// Change value="Search" http://presscustomizr.com/snippet/change-search-button-text/
function my_search_form_text($text) {
	$text = str_replace('value="Search"', 'value="&#xf002"', $text); //set as value the text you want
	return $text;	
}
add_filter('get_search_form', 'my_search_form_text');

// Prevent Page Scroll When Clicking the More Link
// https://codex.wordpress.org/Customizing_the_Read_More#Prevent_Page_Scroll_When_Clicking_the_More_Link
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

?>