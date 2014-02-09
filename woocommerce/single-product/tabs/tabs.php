<?php
/**
 * Single Product tabs / and sections
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
global $flatsome_opt;

if ($flatsome_opt['product_display'] == 'tabs' && !empty( $tabs ) )  : ?>

	<div class="tabbed-content woocommerce-tabs">
		<ul class="tabs">
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<li class="<?php echo $key ?>_tab">
					<a href="#tab-<?php echo $key ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
				</li>
			<?php endforeach; ?>

			<?php 
			// add additional global tab title
			if($flatsome_opt['tab_title']){
				?> 
				<li class="additional-tab">
					<a href="#tab-additional"><?php echo $flatsome_opt['tab_title']?></a>
				</li>
			<?php } ?>
		</ul>

		<?php foreach ( $tabs as $key => $tab ) : ?>
			<div class="panel entry-content" id="tab-<?php echo $key ?>">
				<?php call_user_func( $tab['callback'], $key, $tab ) ?>
			</div>
		<?php endforeach; ?>

		<?php  // add additional global tab content
			if($flatsome_opt['tab_title']){ ?> 
			<div class="panel entry-content" id="tab-additional">
				 <?php echo do_shortcode($flatsome_opt['tab_content']);?>
			</div>	
		<?php } ?>
	</div><!-- .tabbed-content -->

<?php elseif ($flatsome_opt['product_display'] == 'sections' && !empty( $tabs ) )  : ?>


		<div class="product-page-sections">
		<?php foreach ( $tabs as $key => $tab ) : ?>

				<div class="row">
					<div class="section">
						<div class="large-12 columns"><hr></div>
						<div class="large-2 columns">
							<h5><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></h5>
						</div><!-- .large-3 -->
						<div class="large-10 columns">

							<div class="entry-content" id="section-<?php echo $key ?>">
									<?php call_user_func( $tab['callback'], $key, $tab ) ?>
							</div>
						</div><!-- .large-10 -->
					</div><!-- .section -->
				</div><!-- .row -->

			
		<?php endforeach; ?>

		<?php  // add additional global section
			if($flatsome_opt['tab_title']){ ?> 
				<div class="row">
					<div class="section">
						<div class="large-12 columns"><hr></div>
						<div class="large-2 columns">
							<h5><?php echo $flatsome_opt['tab_title']?></h5>
						</div><!-- .large-3 -->
						<div class="large-10 columns">
							<div class="entry-content" id="section-custom-global-tab">
								  <?php echo  do_shortcode($flatsome_opt['tab_content']);?>
							</div>
						</div><!-- .large-10 -->
					</div><!-- .section -->
				</div><!-- .row -->

		<?php } ?>
	</div><!-- .tabbed-content -->




<?php endif;?>