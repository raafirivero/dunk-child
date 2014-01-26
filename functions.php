<?php
require( get_stylesheet_directory() . '/inc/dunk-tags.php' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function dunk_add_scripts() {
    
    // Ladda for submit button
    wp_register_script('laddaspin', 
	    get_stylesheet_directory_uri('stylesheet_directory').'/inc/ladda/spin.min.js', 
	    false,
	    '1.0',
	    true
    );
    wp_enqueue_script('laddaspin');
    
    wp_register_script('ladda', 
	    get_stylesheet_directory_uri('stylesheet_directory').'/inc/ladda/ladda.jquery.min.js', 
	    false,
	    '0.6.0',
	    false
    );
    wp_enqueue_script('ladda');
    
    wp_register_style('laddastyle', get_stylesheet_directory_uri('stylesheet_directory').'/inc/ladda/ladda.min.css', array());
    wp_enqueue_style('laddastyle');
    
        
    // Dunk styles
	wp_register_script('dunk', get_stylesheet_directory_uri('stylesheet_directory').'/inc/dunk.js', array('jquery'));
    wp_enqueue_script('dunk');
    
    wp_register_script('dunk-cart', get_stylesheet_directory_uri('stylesheet_directory').'/inc/dunk-cart.js', array('jquery'));
    wp_enqueue_script('dunk-cart');
    
    // Landing Page
    if ( is_page_template('page-landing.php') ) {
    
    	wp_dequeue_script('ladda');
    	wp_dequeue_script('laddaspin');
    	wp_dequeue_script('dunk');
    	wp_dequeue_script('dunk-cart');   	
    	wp_dequeue_script('contact-form-7');
    	    	
    	wp_dequeue_style('laddastyle');
    	wp_dequeue_style('yith_wcas_frontend');
    	wp_dequeue_style('contact-form-7');
	    
	    wp_register_script('landing', get_stylesheet_directory_uri('stylesheet_directory').'/inc/landing/machine.js', array('jquery'));
	    wp_enqueue_script('landing');
	    
	    //background resize in footer
	    wp_register_script('backgroundresize', get_stylesheet_directory_uri('stylesheet_directory').'/inc/smartBackgroundResize-1.0-jquery-plugin.js', array('jquery'), '1.1', true);
	    wp_enqueue_script('backgroundresize');
	    
	    
	    wp_register_style('landingstyle', get_stylesheet_directory_uri('stylesheet_directory').'/css/landing.css', array());
	    wp_enqueue_style('landingstyle');  		        	    
    }
    
    
    // Manifesto
    if ( is_page_template('page-manifesto.php') ) {
    	wp_dequeue_script('ladda');
    	wp_dequeue_script('laddaspin');
    	wp_dequeue_script('dunk');
    	wp_dequeue_script('dunk-cart');
    	wp_dequeue_script('contact-form-7');
    	
    	wp_dequeue_style('laddastyle');
    	wp_dequeue_style('yith_wcas_frontend');
    	wp_dequeue_style('contact-form-7');
    	
	    
	    wp_register_script('transit', get_stylesheet_directory_uri('stylesheet_directory').'/inc/jquery.transit.min.js', array('jquery'), 1.0, false);
	    wp_enqueue_script('transit');
	    
	    wp_register_script('squishy', get_stylesheet_directory_uri('stylesheet_directory').'/inc/jquery.squishy.js', array('jquery'), 1.0, true);
	    wp_enqueue_script('squishy');
	    
	    //background resize in footer
	    wp_register_script('backgroundresize', get_stylesheet_directory_uri('stylesheet_directory').'/inc/smartBackgroundResize-1.0-jquery-plugin.js', array('jquery'), '1.1', true);
	    wp_enqueue_script('backgroundresize');
	    
	    wp_register_script('manifesto', get_stylesheet_directory_uri('stylesheet_directory').'/inc/manifesto/manifesto.js', array('jquery'), 1.0, true);
	    wp_enqueue_script('manifesto');
	    
	    
	    wp_register_style('manifeststyle', get_stylesheet_directory_uri('stylesheet_directory').'/css/manifesto.css', array());
	    wp_enqueue_style('manifeststyle');     	
    	
    }
}

add_action('wp_enqueue_scripts', 'dunk_add_scripts');


// skip cart page on some links
/*
add_filter ('add_to_cart_redirect', 'woo_redirect_to_checkout');
 
function woo_redirect_to_checkout() {
  global $woocommerce;
	$checkout_url = $woocommerce->cart->get_checkout_url();
	return $checkout_url;
}
*/


// don't automatically add links to images in posts
function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);



 
function unhook_woo_stuff() {

    // remove woocommerce ajax functions, replace with dunk ajax functions in dunk-ajax.php
    remove_action('wp_ajax_woocommerce_add_to_cart', 'woocommerce_ajax_add_to_cart');
	remove_action('wp_ajax_nopriv_woocommerce_add_to_cart', 'woocommerce_ajax_add_to_cart');
	
    
}
add_action( 'init', 'unhook_woo_stuff');


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
include_once('inc/shortcodes/dunk-share.php');
include_once('inc/shortcodes/dunk-stars.php');


// NO TOCAR /////////////////////////////

?>
