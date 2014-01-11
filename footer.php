<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</div><!-- #main-content -->

<?php 
	if(is_page(array( 'homepage-rows'))) {
		$footerclass = "footer-gray";
			} else if (is_page('about')) {
		$footerclass = "footer-white";
			} else {
		$footerclass = "footer-compact";
		}
		$thispage = $wp_query->query_vars["pagename"];

?>

<footer class="footer-wrapper <?php echo($footerclass .' '. $thispage); ?>" role="contentinfo">
<div class="footer footer-1 light">	<div class="row">
   		<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					 
					/* set smaller footer for footer-compact group */ 
					if($footerclass != "footer-compact") {
							get_template_part( 'content-footer', get_post_format() );
						} else {
							get_template_part( 'compact-footer', get_post_format() );
					}
				?>
				   
	</div><!-- end row -->
</div><!-- end footer 1 -->

<div class="absolute-footer <?php echo $flatsome_opt['footer_bottom_style']; ?>" style="background-color:<?php /* echo $flatsome_opt['footer_bottom_color']; */ ?>">
<div class="row">
	<div class="large-12 columns">
		<div class="left">
			 <?php if ( has_nav_menu( 'footer' ) ) : ?>
				<?php  
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'menu_class' => 'footer-nav',
							'depth' => 1,
							'fallback_cb' => false,
						));
				?>						
			<?php endif; ?>
		<div class="copyright-footer"><?php if(isset($flatsome_opt['footer_left_text'])) {echo $flatsome_opt['footer_left_text'];} else{ echo 'Define left footer text / navigation in Theme Option Panel';} ?></div>
		</div><!-- .left -->
		<div class="right">
				<?php if(isset($flatsome_opt['footer_right_text'])){ echo do_shortcode($flatsome_opt['footer_right_text']);} else {echo 'Define right footer text in Theme Option Panel';} ?>
		</div>
	</div><!-- .large-12 -->
</div><!-- .row-->
</div><!-- .absolute-footer -->
</footer><!-- .footer-wrapper -->
</div><!-- #wrapper -->

<!-- back to top -->
<a href="#top" id="top-link"><span class="icon-angle-up"></span></a>

<?php if(isset($flatsome_opt['html_scripts_footer'])){
	// Insert footer scripts
	echo $flatsome_opt['html_scripts_footer'];
} ?>


<?php wp_footer(); ?>

</body>
</html>