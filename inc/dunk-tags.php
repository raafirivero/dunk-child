<?php


add_action( 'after_setup_theme', 'remove_parent_theme_features', 15 );
 
function remove_parent_theme_features() {
    // remove dropdown cart function, replace with Dunk version
    if (function_exists( 'flatsome_add_to_cart_dropdown' ) ) :
    	remove_filter('add_to_cart_fragments', 'flatsome_add_to_cart_dropdown');
    endif;
    
    remove_action('woocommerce_single_product_summary','ProductShowReviews', 15);
    
}



/*  ADD TO CART DROPDOWN (gets inserted with ajax) */
add_filter('add_to_cart_fragments', 'dunk_add_to_cart_dropdown'); 
function dunk_add_to_cart_dropdown( $fragments ) {
	global $woocommerce;
    global $flatsome_opt;
	ob_start();
	?>
	<div class="cart-inner">
	<a href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" class="cart-link">
					<strong class="cart-name hide-for-small"><?php _e('Cart', 'flatsome'); ?></strong> 
					<span class="cart-price hide-for-small">/ <?php echo $woocommerce->cart->get_cart_total(); ?></span> 
                        
					<!-- cart icon -->
					<div class="cart-icon">
                        <?php if ($flatsome_opt['custom_cart_icon']){ ?> 
                        <div class="custom-cart-inner">
                        <div class="custom-cart-count<?php $cartcount = $woocommerce->cart->cart_contents_count; if ($cartcount < 1) {echo " emptycart";}; ?>"><?php echo $cartcount; ?></div>
                        <div class="cart-icon-sprite">
                        <?php /* $cartclass = "emptycart"; */ ?>
                        <?php if ($cartcount < 1) {$cartclass = "emptycart";}; ?>
                        <?php if ($cartcount === 1) {$cartclass = "1item";}; ?>
                        <?php if ($cartcount === 2) {$cartclass = "2item";}; ?>
                        <?php if ($cartcount > 2) {$cartclass = "3item";}; ?>
                        	<img class="custom-cart-icon <?php echo $cartclass; ?>" src="<?php echo $flatsome_opt['custom_cart_icon']?>"/>
                        </div> 
                        </div><!-- .custom-cart-inner -->
                        <?php } else { ?> 

                         <strong><?php echo $woocommerce->cart->cart_contents_count; ?></strong>
                         <span class="cart-icon-handle"></span>
                        <?php } ?>
					</div><!-- end cart icon -->

					</a>
							<div class="nav-dropdown">
                                <div class="nav-dropdown-inner">
                                <div class="cart_list">
                                <?php                                    
                                    if (sizeof($woocommerce->cart->cart_contents)>0) : foreach ($woocommerce->cart->cart_contents as $cart_item_key => $cart_item) :
                                        $_product = $cart_item['data'];                                            
                                        if ($_product->exists() && $cart_item['quantity']>0) :  ?>  

                                      	<div class="row mini-cart-item collapse">
                                      		<div class="small-2 large-2 columns">
                                      			<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s"><span class="icon-close"></span></a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), __('Remove this item', 'woocommerce') ), $cart_item_key ); ?>
                                      		</div>
                                      		<div class="small-7 large-7 columns"><?php 
                                      			 $product_title = $_product->get_title();
                                                 echo '<a class="cart_list_product_title" href="'.get_permalink($cart_item['product_id']).'">' . apply_filters('woocommerce_cart_widget_product_title', $product_title, $_product) . '</a>';
                                                 echo '<div class="cart_list_product_price">'.woocommerce_price($_product->get_price()).' /</div>';
                                                 echo '<div class="cart_list_product_quantity">'.__('Quantity', 'woocommerce').': '.$cart_item['quantity'].'</div>';

                                      		?></div>
                                      		<div class="small-3 large-3 columns">
                                      			<?php   echo '<a class="cart_list_product_img" href="'.get_permalink($cart_item['product_id']).'">' . $_product->get_image().'</a>';                                                    ?>
                                      		</div>
                                      	</div><!-- end row -->

                                <?php                                        
                                    endif;                                        
                                    endforeach;
                                ?>

                                </div><!-- Cart list -->
                                            
                                    <div class="minicart_total_checkout">                                        
                                        <?php _e('Cart Subtotal', 'woocommerce'); ?><span><?php echo $woocommerce->cart->get_cart_total(); ?></span>                                   
                                    </div>
                                    
                                    <a href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" class="button expand uppercase"><?php _e('View Cart', 'flatsome'); ?></a>   
                                    
                                    <a href="<?php echo esc_url( $woocommerce->cart->get_checkout_url() ); ?>" class="button secondary expand uppercase"><?php _e('Proceed to Checkout', 'flatsome'); ?></a>
                                    
                                    <?php                                        
                                    else: echo '<p class="empty">'.__('No products in the cart.','woocommerce').'</p>'; endif;                                    
                                ?>                                                                        
                            </div><!-- .nav-dropdown-inner -->
						</div><!-- .nav-dropdown -->
	</div><!-- .cart-inner -->

	<?php
	$fragments['.cart-inner'] = ob_get_clean();
	return $fragments;
}





// ============ ///////////////////////////
// ! No Tocar   
// ============ 



?>