<?php 

add_action( 'after_setup_theme', 'remove_parent_theme_blocks', 15 );

function remove_parent_theme_blocks() {

    // remove the parent [block] shortcode
    remove_shortcode( 'block' );
    
    // add our [block] shortcode
    add_shortcode( 'block', 'dunk_shortcode' );
}


function dunk_shortcode($atts, $content = null) {	
	 extract( shortcode_atts( array(
    	'id' => '',
    	'class' => ''
  	 ), $atts ) );

	// get content by slug
	global $wpdb;
	$post_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$id'");
	
	
	if($post_id){
		$html =	get_post_field('post_content', $post_id);

		// add edit link for admins
		if (current_user_can('edit_posts')) {
		   $edit_link = get_edit_post_link( $post_id ); 
	 	  /*  $html = '<div id='.$id.' class="ux_block"><a class="edit-link" href="'.$edit_link.'">Edit Block</a>'.$html.'</div>'; */
		}
		
		$html = do_shortcode( $html );
		
		
		
		$html = '<div id='.$id.' class="ux_block ' .$class. '">'.$html.'</div>';
		

	} else{
		
		$html = '<p><mark>UX Block <b>"'.$id.'"</b> not found! Wrong ID?</mark></p>';	
	
	}

	return $html;
}





?>