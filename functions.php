<?php
require( get_stylesheet_directory() . '/inc/dunk-tags.php' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
	
function dunk_add_scripts() {
    
    // Ladda for submit button
    wp_register_script('ladda', get_stylesheet_directory_uri('stylesheet_directory').'/inc/ladda/ladda.min.js', array());
    wp_enqueue_script('ladda');
    
    wp_register_script('laddaspin', get_stylesheet_directory_uri('stylesheet_directory').'/inc/ladda/spin.min.js', array());
    wp_enqueue_script('laddaspin');
    
    wp_register_style('laddastyle', get_stylesheet_directory_uri('stylesheet_directory').'/inc/ladda/ladda-themeless.min.css', array());
    wp_enqueue_style('laddastyle');
    
    
    // Dunk styles
	wp_register_script('dunk', get_stylesheet_directory_uri('stylesheet_directory').'/inc/dunk.js', array('jquery'));
    wp_enqueue_script('dunk');
    
    wp_register_script('dunk-cart', get_stylesheet_directory_uri('stylesheet_directory').'/inc/dunk-cart.js', array('jquery'));
    wp_enqueue_script('dunk-cart');
    

}
add_action('wp_enqueue_scripts', 'dunk_add_scripts');

add_action( 'init', 'unhook_woo_stuff');
 
function unhook_woo_stuff() {

    // remove woocommerce ajax functions, replace with dunk ajax functions in dunk-ajax.php
    remove_action('wp_ajax_woocommerce_add_to_cart', 'woocommerce_ajax_add_to_cart');
	remove_action('wp_ajax_nopriv_woocommerce_add_to_cart', 'woocommerce_ajax_add_to_cart');
	
	
    
}


function dunk_body_classes($classes) {  
	// add class to <body> tag
	
	global $wp_query;
	$page = '';
	if (is_front_page() ) {
			$classes[] = 'home';
	} elseif (is_page()) {
   	   $page = $wp_query->query_vars["pagename"];
   	   $classes[] = $page;
	}	
	return $classes;
}

add_filter( 'body_class', 'dunk_body_classes' );


// AJAX   /// /////////////////////////////
include_once('inc/dunk-ajax.php');

// SHORTCODES /////////////////////////////

include_once('inc/shortcodes/dunk-blocks.php');
include_once('inc/shortcodes/dunk-grid.php');
include_once('inc/shortcodes/dunk-banners.php');
include_once('inc/shortcodes/dunk-slider.php');


// NO TOCAR /////////////////////////////

?>