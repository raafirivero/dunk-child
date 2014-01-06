<?php
 
	global $post, $product, $flatsome_opt;

	// Get category permalink
	$permalinks 	= get_option( 'woocommerce_permalinks' );
	$category_slug 	= empty( $permalinks['category_base'] ) ? _x( 'product-category', 'slug', 'woocommerce' ) : $permalinks['category_base'];
 
?>

<div itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>	
    
<div class="row">    
    	<?php
			/**
			 * woocommerce_before_single_product hook
			 *
			 * @hooked woocommerce_show_messages - 10
			 */
			 do_action( 'woocommerce_before_single_product' );
		?>    
        <div class="large-6 columns product-gallery">        
<?php
		global $woocommerce;
		
		$signature = "Raafi Rivero";
		
    	$cart_group = $woocommerce->cart->cart_contents;
		$totaldesc = '';
		$tariff = '';
		$customs_item = array();
		
		foreach($cart_group as $c)
			{
				$itemid = $c['product_id'];
				$itemdesc = get_post_meta($itemid, 'contents_description');
				$totaldesc .= $itemdesc[0]. '. ';				
				$tariff = get_post_meta($itemid, 'tariff_number');
				$tariff = (string) $tariff[0];
				
				$cart_howmany = $c['quantity'];
				$weight = get_post_meta( $itemid, '_weight', true);
				$price = get_post_meta( $itemid, '_price', true);
				
				// create a customs item array for each item in the cart.					

				$params = array(
					"description"      => $itemdesc[0],
					"quantity"         => $cart_howmany,
					"value"            => $price,
					"weight"           => $weight,
					"hs_tariff_number" => $tariff,
					"origin_country"   => 'US',
					);
	
					array_push($customs_item, $params);				
			}
				
				$infoparams = array(
				  "eel_pfc" => 'NOEEI 30.37(a)',
				  "customs_certify" => true,
				  "customs_signer" => $signature,
				  "contents_type" => 'merchandise',
				  "contents_explanation" => '', // only necessary for contents_type=other
				  "restriction_type" => 'none',
				  "non_delivery_option" => 'return',
				  "customs_items" => $customs_item
			 	);
		 		
		
		var_export($infoparams);
		
		echo('<p>blooks</p>');
		echo ("\n");
		
		
		$bustoms_info = array(
			  "eel_pfc" => 'NOEEI 30.37(a)',
			  "customs_certify" => true,
			  "customs_signer" => 'Raafi Rivero',
			  "contents_type" => 'merchandise',
			  "contents_explanation" => '',
			  "restriction_type" => 'none',
			  "non_delivery_option" => 'return',
			  "customs_items" => array( array(
			    "description" => 'Sweet shirts',
			    "quantity" => 2,
			    "weight" => 11,
			    "value" => 23,
			    "hs_tariff_number" => 610910,
			    "origin_country" => 'US'
			  	))
			 );
		
		var_export($bustoms_info);
			?>
            <?php
                /**
                 * woocommerce_show_product_images hook
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
            ?>
        
        </div><!-- end large-6 - product-gallery -->
        
        <div class="product-info large-4 small-12 columns left">
                <?php
                    /**
                     * woocommerce_single_product_summary hook
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked ProductShowReviews() (inc/template-tags.php) - 15
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     */
                    do_action( 'woocommerce_single_product_summary' );
                ?>
        
        </div><!-- end product-info large-4 -->

<div class="product-page-aside large-2 small-12 columns text-center hide-for-small">
    
    <div class="next-prev-nav">
        <?php // edit this in inc/template-tags.php // ?>
        <?php /* next_post_link_product('%link', 'icon-angle-left next', true); */ ?>
        <?php /* previous_post_link_product('%link', 'icon-angle-right prev', true); */ ?>
    </div>

     <?php  /* woocommerce_get_template('single-product/up-sells.php'); */ ?> 

</div><!-- .product-page-aside -->
     
        
</div><!-- end row -->
    
    
<?php
	//Get the Thumbnail URL for pintrest
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' );
?>


    
<div class="row">
    <div class="large-10 columns">
        <div class="product-details <?php echo $flatsome_opt['product_display']; ?>-style">
               <div class="row">

                    <div class="large-10 columns ">
                    <?php woocommerce_get_template('single-product/tabs/tabs.php'); ?>
                    </div><!-- .large-9 -->
                
               </div><!-- .row -->
        </div><!-- .product-details-->

        <hr/><!-- divider -->
    </div><!-- .large-12 -->
</div><!-- .row -->


	<div class="related-product">
		<?php
            /**
             * woocommerce_after_single_product_summary hook
             *
             * @hooked woocommerce_output_related_products - 20
             */

            do_action( 'woocommerce_after_single_product_summary' );

        ?>
    </div><!-- related products -->

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>