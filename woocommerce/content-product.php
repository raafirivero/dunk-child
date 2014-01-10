<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $product, $woocommerce_loop, $flatsome_opt;

$attachment_ids = $product->get_gallery_attachment_ids();

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibilty
if ( ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

?>
	

<li class="product-small">
<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
<a href="<?php the_permalink(); ?>">
      <div class="product-image">
         <div class="front-image"><?php echo get_the_post_thumbnail( $post->ID, 'shop_catalog') ?></div>
                    
                    
					<?php

						if ( $attachment_ids ) {
					
							$loop = 0;				
							
							foreach ( $attachment_ids as $attachment_id ) {
					
								$image_link = wp_get_attachment_url( $attachment_id );
					
								if ( ! $image_link )
									continue;
								
								$loop++;
								
								printf( '<div class="back-image back">%s</div>', wp_get_attachment_image( $attachment_id, 'shop_catalog' ) );
								
								if ($loop == 1) break;
							
							}
					
						} else {
						?>
                        
                        <div class="back-image"><?php echo get_the_post_thumbnail( $post->ID, 'shop_catalog') ?></div>
                        
                        <?php
							
						}
					?>
          <div class="quick-view" data-prod="<?php echo $post->ID; ?>">+ <?php _e('Quick View','flatsome'); ?></div>
      </div><!-- end product-image -->


      <div class="info text-center">
      	<?php $product_cats = strip_tags($product->get_categories('|', '', '')); ?>
          <h5 class="category"><?php list($firstpart) = explode('|', $product_cats); echo $firstpart; ?></h5>
          <div class="tx-div small"></div>
          <p class="name"><?php the_title(); ?></p>
          <?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>

           

      </div><!-- end info -->
</a>      	

<?php woocommerce_get_template( 'loop/sale-flash.php' ); ?>
</li><!-- end product -->
