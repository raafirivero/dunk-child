<?php
require( get_stylesheet_directory() . '/inc/dunk-tags.php' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function dunk_add_scripts() {

	$themedir = get_stylesheet_directory_uri('stylesheet_directory');
	
	// Fix SSL content warnings for CDN fonts
	if (  is_ssl() ) {
    	wp_register_style('fonts-ssl', $themedir.'/css/fonts-ssl.css', array());
	    wp_enqueue_style('fonts-ssl');
    } else {
    	wp_register_style('fonts', $themedir.'/css/fonts.css', array());
	    wp_enqueue_style('fonts');
    }
	
	//  Check if WooCommerce is active
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    
	    if ( is_checkout() || is_page_template('page-ladda.php')  ) {
		    // Ladda for submit button
		    wp_register_script('laddaspin', $themedir.'/inc/ladda/spin.min.js', false, '1.0', true);
		    wp_enqueue_script('laddaspin');
		    
		    wp_register_script('ladda', $themedir.'/inc/ladda/ladda.min.js', false, '0.6.0', true);
		    wp_enqueue_script('ladda');
		    
		    wp_register_script('dunk-ladda', $themedir.'/inc/ladda/dunk.ladda.js', false, '1.0', true);
		    wp_enqueue_script('dunk-ladda');
		    
		    wp_register_style('laddastyle', $themedir.'/inc/ladda/ladda.min.css', array());
		    wp_enqueue_style('laddastyle');
		    
		    // speed this thang up
			wp_dequeue_script('smae.js');
	    	wp_dequeue_script('retinajs');
	    	wp_dequeue_script('contact-form-7');
	    	wp_dequeue_script('squishy');
	    	    	
	    	wp_dequeue_style('yith_wcas_frontend');
	    	wp_dequeue_style('contact-form-7');
	    	
	    	remove_action( 'wp_enqueue_scripts', array( $GLOBALS['woocommerce'], 'frontend_scripts' ) );
	    }
	    
	    // Landing Page
	    if ( is_page_template('page-landing.php') ) {
	    
	    	wp_dequeue_script('ladda');
	    	wp_dequeue_script('laddaspin');
	    	wp_dequeue_script('dunk');
	    	wp_dequeue_script('dunk-cart');   	
	    	wp_dequeue_script('contact-form-7');
	    	wp_dequeue_script('smae.js');
	    	wp_dequeue_script('retinajs');
	    	    	
	    	wp_dequeue_style('laddastyle');
	    	wp_dequeue_style('yith_wcas_frontend');
	    	wp_dequeue_style('contact-form-7');
		    
		    
		    wp_register_script('cookie', $themedir.'/inc/jquery.cookie.js', array('jquery'));
		    wp_enqueue_script('cookie');
		    
		    wp_register_script('landing', $themedir.'/inc/landing/machine.js', array('jquery'));
		    wp_enqueue_script('landing');
		    
		    //background resize in footer
		    wp_register_script('backgroundresize', $themedir.'/inc/smartBackgroundResize.js', array('jquery'), '1.1', true);
		    wp_enqueue_script('backgroundresize');
		    
		    wp_register_style('landingstyle', $themedir.'/css/landing.css', array());
		    wp_enqueue_style('landingstyle');  		        	    
	    }
	    
	    
	    // Manifesto + Manny Bullets
	    if ( is_page_template('page-manifesto.php') || is_page_template('page-manny-bullets.php') ) {
	    	wp_dequeue_script('ladda');
	    	wp_dequeue_script('laddaspin');
	    	wp_dequeue_script('dunk');
	    	wp_dequeue_script('contact-form-7');
	    	
	    	wp_dequeue_style('laddastyle');
	    	wp_dequeue_style('yith_wcas_frontend');
	    	wp_dequeue_style('contact-form-7');
	    	
		    
		    wp_register_script('transit', $themedir.'/inc/jquery.transit.min.js', array('jquery'), 1.0, false);
		    wp_enqueue_script('transit');
		    
		    wp_register_script('squishy', $themedir.'/inc/jquery.squishy.js', array('jquery'), 1.0, true);
		    wp_enqueue_script('squishy');
		    
		    //background resize in footer
		    wp_register_script('backgroundresize', $themedir.'/inc/smartBackgroundResize.js', array('jquery'), '1.1', true);
		    wp_enqueue_script('backgroundresize');  	
	    }
	    
	    // Script for Manifesto
	    if ( is_page_template('page-manifesto.php' ) ) {
		    wp_register_script('manifesto', $themedir.'/inc/manifesto/manifesto.js', array('jquery'), 1.0, true);
			wp_enqueue_script('manifesto');
			    
			wp_register_style('manifeststyle', $themedir.'/css/manifesto.css', array());
			wp_enqueue_style('manifeststyle');   
		}
		
		// Script for Bullet Point Manifesto
		if ( is_page_template('page-manny-bullets.php' ) ) {
	    	wp_register_script('manny-bullets', $themedir.'/inc/manifesto/manny-bullets.js', array('jquery'), 1.0, true);
		    wp_enqueue_script('manny-bullets');
		    
		    wp_register_style('manny-bullets-style', $themedir.'/css/manny-bullets.css', array());
		    wp_enqueue_style('manny-bullets-style');  
		}
	
	}
	
	if ( is_page('about') ) {
			wp_dequeue_script('contact-form-7');
			wp_dequeue_script('comment-reply');
			
	    	wp_dequeue_style('contact-form-7');
	}
        
    // Dunk Script/Style All Pages
	wp_register_script('dunk', $themedir.'/inc/dunk.js', array('jquery'), 1.0);
    wp_enqueue_script('dunk');
    
    wp_register_script('dunk-cart', get_stylesheet_directory_uri('stylesheet_directory').'/inc/dunk-cart.js', array('jquery'));
    wp_enqueue_script('dunk-cart');
    
}

add_action('wp_enqueue_scripts', 'dunk_add_scripts');



function dunk_remove_scripts() {
	/**
	 * Check if WooCommerce is active
	 **/
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		if ( is_checkout() ) {
			wp_dequeue_script( 'flatsome-magnific-popup' );
			wp_dequeue_script( 'flatsome-iosslider' );
			wp_dequeue_script( 'flatsome-modernizer' );
			
			wp_dequeue_script('dunk-cart');
			wp_dequeue_script('wc-add-to-cart');
			
		}
	}
}
add_action( 'wp_print_scripts', 'dunk_remove_scripts', 10 );

// make Dependency Minification work with WooCommerce... Maybe?
function _exlude_woo_commerce_from_depmin( $is_excluded, $handle, $src ) {
    if ( 'woocommerce' === $handle ) { // not sure what handle is used, can also check $src
        $is_excluded = true;
    }
    return $is_excluded;
}
add_filter( 'dependency_minification_excluded', '_exlude_woo_commerce_from_depmin' , 10, 3);


// don't automatically add links to images in posts
function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

// create a larger image size for blog posts
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'dunk-blog-pic', 750, 1125 );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'dunk-blog-pic' => __('Dunk Blog Pic'),
    ) );
}
 
function unhook_woo_stuff() {

    // remove woocommerce ajax functions, replace with dunk ajax functions in dunk-ajax.php
    remove_action('wp_ajax_woocommerce_add_to_cart', 'woocommerce_ajax_add_to_cart');
	remove_action('wp_ajax_nopriv_woocommerce_add_to_cart', 'woocommerce_ajax_add_to_cart');
	// file dunk-ajax inlcuded below
}
add_action( 'init', 'unhook_woo_stuff');


function get_ID_by_slug($page_slug,$post_type) {
	// helps move from local to production server
    $page = get_page_by_path($page_slug,OBJECT,$post_type);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
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
	} elseif (is_archive()) {
   	   $page = post_type_archive_title('',false);
   	   $page = strtolower($page);
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
