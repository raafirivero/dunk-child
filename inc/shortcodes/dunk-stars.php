<?php
// [testimonial]
function dunk_stars($params = array(), $content = null) {
	extract(shortcode_atts(array(
		"title" => '',
		"stars" => '',
		"class" => ''
	), $params));
    
	$star_row = '';
	if ($stars == '0'){$star_row = '<div class="star-rating"><span style="width:0%"><strong class="rating"></strong></span></div>';}
	else if ($stars == '1'){$star_row = '<div class="star-rating"><span style="width:18%"><strong class="rating"></strong></span></div>';}
	else if ($stars == '2'){$star_row = '<div class="star-rating"><span style="width:35%"><strong class="rating"></strong></span></div>';}
	else if ($stars == '3'){$star_row = '<div class="star-rating"><span style="width:57%"><strong class="rating"></strong></span></div>';}
	else if ($stars == '4'){$star_row = '<div class="star-rating"><span style="width:78%"><strong class="rating"></strong></span></div>';}
	else if ($stars == '5'){$star_row = '<div class="star-rating"><span style="width:100%"><strong class="rating"></strong></span></div>';}


	$fullstars='

	<div class="rating-box '.$class.'">
		<div class="star-row">
			<span class="star-title">'.$title.'</span>
				'.$star_row.'
		</div><!-- .star-row -->
	</div><!-- row -->
	';

	return $fullstars;
}

add_shortcode('stars','dunk_stars');