<?php 

add_action( 'after_setup_theme', 'remove_parent_theme_row', 15 );

function remove_parent_theme_row() {

    // remove the parent [row] shortcode
    remove_shortcode( 'row' );
    
    // add our [block] shortcode
    add_shortcode( 'row', 'dunk_rowShortcode' );
}

// [row]
function dunk_rowShortcode($atts, $content = null) {
    extract( shortcode_atts( array(
    	'class' => ''
    ), $atts ) );
	$content = do_shortcode($content);
	$container = '<div id="' . $class . '" class="row container ' . $class . '">'.$content.'</div>';
	return $container;
} 
