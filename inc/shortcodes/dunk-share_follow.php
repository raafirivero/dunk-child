<?php
// [share]
function dunk_shareShortcode($atts, $content = null) {
	extract(shortcode_atts(array(
		'title'  => '',
	), $atts));
	extract( shortcode_atts( array(
    	'class' => ''
    ), $atts ) );
	global $post, $flatsome_opt;
	$permalink = get_permalink($post->ID);
	$featured_image =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
	$featured_image_2 = $featured_image['0'];
	$post_title = rawurlencode(get_the_title($post->ID));
	if($title) $title = '<span>'.$title.'</span>';

	ob_start();
	?>

	<div class="social-icons share-row<?php echo(' '. $class .'') ?>">
		<?php echo $title; ?>
		<?php if($flatsome_opt['social_icons']['facebook']) { ?>
			  <a href="http://www.facebook.com/sharer.php?u=<?php echo $permalink; ?>" target="_blank" class="icon icon_facebook tip-top" data-tip="<?php _e('Share on Facebook','flatsome'); ?>"><span class="icon-facebook"></span></a>
		<?php } ?>
		<?php if($flatsome_opt['social_icons']['twitter']) { ?>
            <a href="https://twitter.com/share?url=<?php echo $permalink; ?>" target="_blank" class="icon icon_twitter tip-top" data-tip="<?php _e('Share on Twitter','flatsome'); ?>"><span class="icon-twitter"></span></a>
		<?php } ?>
		<?php if($flatsome_opt['social_icons']['email']) { ?>
            <a href="mailto:enteryour@addresshere.com?subject=<?php echo $post_title; ?>&amp;body=Check%20this%20out:%20<?php echo $permalink; ?>" class="icon icon_email tip-top" data-tip="<?php _e('Email to a Friend','flatsome'); ?>"><span class="icon-envelop"></span></a>
		<?php } ?>
		<?php if($flatsome_opt['social_icons']['pinterest']) { ?>
            <a href="//pinterest.com/pin/create/button/?url=<?php echo $permalink; ?>&amp;media=<?php echo $featured_image_2; ?>&amp;description=<?php echo $post_title; ?>" target="_blank" class="icon icon_pintrest tip-top" data-tip="<?php _e('Pin on Pinterest','flatsome'); ?>"><span class="icon-pinterest"></span></a>
		<?php } ?>
		<?php if($flatsome_opt['social_icons']['googleplus']) { ?>
            <a href="//plus.google.com/share?url=<?php echo $permalink; ?>" target="_blank" class="icon icon_googleplus tip-top" data-tip="<?php _e('Share on Google+','flatsome'); ?>"><span class="icon-google-plus"></span></a>
		<?php } ?>
    </div>
    
    <?php
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
} 

add_action( 'after_setup_theme', 'remove_parent_theme_share', 15 );

function remove_parent_theme_share() {

    // add our [block] shortcode
    add_shortcode( 'share', 'dunk_shareShortcode' );
}



?>
