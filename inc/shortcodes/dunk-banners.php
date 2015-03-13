<?php

add_action( 'after_setup_theme', 'remove_parent_theme_banners', 15 );

function remove_parent_theme_banners() {

    // remove the parent [banner] shortcode
    remove_shortcode( 'ux_banner' );
    
    // add our [banner] shortcode
    add_shortcode( 'ux_banner', 'dunkbannerShortcode' );
}


// [dunk_banner]
function dunkbannerShortcode( $atts, $content = null ){
  global $flatsome_opt;
  $bannerid = rand();
  extract( shortcode_atts( array(
    'text_pos' => 'center',
    'height' => '300px',
    'text_color' => 'light',
    'bg_color' => '',
    'link' => '',
    'text_width' => '60%',
    'text_align' => 'center',
    'mob_height' => '',
    'tablet_height' => '',
    'animation' => 'fadeIn',
    'animate' => '',
    'animated' => '',
    'animation_duration' => '',
    'youtube' => '',
    'effect' => '',
    'video_mp4' => '',
    'video_ogg' => '',
    'video_webm' => '',
    'video_sound' => 'false',
    'video_loop' => 'loop',
    'hover' => '',
    'bg' => '', 
    'parallax' => '',
    'parallax_text' => '',
    'text_bg' => '',
    'text_bg_opacity' => '0.9',
    'padding' => '30px',
    'target' => '',
    'bg_overlay' => '',
    'class' => '',
  ), $atts ) );

  ob_start();

   if($animate) {$animation = $animate;}
   if($animated) {$animation = $animated;}  

   $color = "light";
   if($text_color == 'light') $color = "dark";

   if($hover) $hover = 'hover_'.$hover;

   $animated = "";
   if($animation != "none") $animated = "animated";

   $start_link = "";
   $end_link = "";
   if($target) $target = 'target="'.$target.'"';
   if($link) {$start_link = '<a href="'.$link.'" '.$target.'>'; $end_link = '</a>';};

   if($bg_color) $bg_color = ' background-color:'.$bg_color;

   $background = "";
    if (strpos($bg,'http://') !== false || strpos($bg,'https://') !== false) {
      $background = $bg;
    }
    elseif (strpos($bg,'#') !== false) {
      $bg_color = ' background-color:'.$bg.'!important';
    }
     else {
      $bg = wp_get_attachment_image_src($bg, 'large');
      $background = $bg[0];
    }

   $textalign = "";

   if($text_align) {$textalign = "text-".$text_align;}

   $parallax_velocity = '0.'.$parallax;
    
   $parallax_class = '';
   if($parallax){$parallax_class = ' ux_parallax'; $parallax='data-velocity="0.'.$parallax.'"';} 
 
   $text_parallax_class = '';
   if($parallax_text){$text_parallax_class = ' parallax_text'; $parallax_text='data-velocity="0.'.$parallax_text.'"';}



  ?>
   <div id="banner_<?php echo $bannerid; ?>" class="ux_banner <?php echo $color; ?> <?php echo $class; ?> <?php if($height == '100%') echo 'full-height'; ?> <?php echo $hover; ?> <?php if(!$bg && !$bg_color){ ?>bg-trans<?php } ?>"  style="height:<?php echo $height; ?>; <?php echo $bg_color; ?>" data-height="<?php echo $height; ?>" role="banner">
      <?php echo $start_link; ?>
        <?php if($youtube) { ?>
          <div id="ytplayer" class="ux-youtube <?php echo $parallax_class; ?>"></div>
        <?php } ?>
      <?php if($bg || $bg_color){ ?>
       <?php if($bg_overlay) echo '<div class="bg-overlay" style="background-color:'.ux_hex2rgba($bg_overlay,'0.15').'"></div>'; ?>
       <div class="banner-bg<?php echo $parallax_class; ?>" <?php if($parallax) echo $parallax; ?> style="background-image:url('<?php echo $background; ?>'); <?php echo $bg_color; ?>"><?php if($background) { ?><img src="<?php echo $background; ?>"  style="visibility:hidden;" /><?php } ?></div>
       <?php } ?>
       <?php if($video_mp4 || $video_webm || $video_ogg){ ?>
       <!-- <div class="video-overlay"></div> -->
       <video class="ux-banner-video" <?php if($parallax) echo $parallax; ?> poster="<?php echo $background; ?>" preload="auto" autoplay="" <?php if($video_loop != 'false') echo "loop='.$video_loop.'"; ?> <?php if($video_sound == 'false') echo "muted='muted'"; ?>>
            <source src="<?php echo $video_mp4; ?>" type="video/mp4">
            <source src="<?php echo $video_webm; ?>" type="video/webm">
            <source src="<?php echo $video_ogg; ?>" type="video/ogg">
        </video>
      <?php } ?>
       <?php if($effect){ wp_enqueue_style('flatsome-effect');  ?>
          <div class="banner-effect effect-<?php echo $effect; ?>"></div>
       <?php } ?>
        <div class="row<?php if($parallax_text) echo ' parallax_text'; ?><?php echo $text_parallax_class; ?>" <?php if($parallax_text) echo $parallax_text; ?>>
          <div class="inner <?php echo $text_pos; ?> <?php echo $textalign; ?> <?php if($text_bg){echo 'text-boxed';} ?>
"  style="width:<?php echo $text_width; ?>;">
            <div class="inner-wrap <?php echo $animated; ?>" data-animate="<?php echo $animation; ?>" style="<?php if($text_bg){echo 'background-color:'.ux_hex2rgba($text_bg,$text_bg_opacity).';';} ?> <?php if($text_bg){echo 'padding:'.$padding;} ?>">
              <?php echo fixShortcode($content); ?>
            </div>
          </div>  
        </div>
       <?php echo $end_link; ?>
       <?php if($mob_height || $tablet_height || $animation_duration) { ?>
       <style>
       <?php if($tablet_height ){ ?>@media only screen and (max-width: 768px) { #banner_<?php echo $bannerid; ?>{ height:<?php echo $tablet_height; ?>!important} } <?php } // mob height ?>
       <?php if($mob_height){ ?>@media only screen and (max-width: 480px) { #banner_<?php echo $bannerid; ?>{ height:<?php echo $mob_height; ?>!important} } <?php } // mob height ?>
       <?php if($animation_duration){ ?>
       #banner_<?php echo $bannerid; ?> .inner-animate{ animation-duration:<?php echo $animation_duration; ?> ; -webkit-animation-duration:<?php echo $animation_duration; ?> ; -moz-animation-duration:<?php echo $animation_duration; ?> ; -o-animation-duration:<?php echo $animation_duration; ?>; } 
       <?php } // End animation duration ?>
       </style>
       <?php } ?>
</div><!-- end .ux_banner -->
<?php if($youtube) { ?>
<!-- Youtube script -->
<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '100%',
      width: '100%',
      playerVars: { autoplay: 1, controls: 0, showinfo: 0, fs :0, loop:1, el: 0},
      videoId: '<?php echo $youtube; ?>',
      events: {
        'onReady': onPlayerReady}
      }
    );
  }
  function onPlayerReady(event) {
      <?php if($video_sound == 'false') echo 'event.target.mute();'; ?>
  }
</script>
<?php } ?>
<?php 

  $content = ob_get_contents();
  ob_end_clean();
  return $content;
 
}