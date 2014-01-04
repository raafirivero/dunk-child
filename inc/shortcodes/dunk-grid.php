<?php 

add_action( 'after_setup_theme', 'remove_parent_theme_grid', 15 );

function remove_parent_theme_grid() {

    // remove the parent [row] shortcode
    remove_shortcode( 'row' );
    
    // add our [block] shortcode
    add_shortcode( 'row', 'dunk_rowShortcode' );
    
    // remove the parent [row] shortcode
    remove_shortcode( 'col' );
    
    // add our [block] shortcode
    add_shortcode( 'col', 'dunk_colShortcode' );
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


// [column]
function dunk_colShortcode($atts, $content = null) {
	extract( shortcode_atts( array(
    'span' => '3',
  	), $atts ) );

  	switch ($span) {
    case "1/4":
        $span = '3'; break;
    case "2/4":
         $span ='6'; break;
    case "3/4":
        $span = '9'; break;
    case "1/3":
        $span = '4'; break;
    case "2/3":
         $span = '8'; break;
    case "1/2":
        $span = '6'; break;
    case "1/6":
        $span = '2'; break;
    case "2/6":
         $span = '4'; break;
    case "3/6":
        $span = '6'; break;
    case "4/6":
        $span = '8'; break;
    case "5/6":
        $span = '10'; break;
	}
	
	extract( shortcode_atts( array(
    	'class' => ''
    ), $atts ) );

	$content = do_shortcode($content);
	$column = '<div class="large-'.$span.' columns ' .$class. '">'.$content.'</div>';
	return $column;
}
