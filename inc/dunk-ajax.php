<?php 
/**
 * AJAX add to cart
 *
 * @access public
 * @return void
 */
function dunk_ajax_add_to_cart() {

	global $woocommerce;

	$product_id        = apply_filters( 'woocommerce_add_to_cart_product_id', absint( $_POST['product_id'] ) );
	$quantity          = empty( $_POST['quantity'] ) ? 1 : apply_filters( 'woocommerce_stock_amount', $_POST['quantity'] );
	$passed_validation = apply_filters( 'woocommerce_add_to_cart_validation', true, $product_id, $quantity );

	if ( $passed_validation && $woocommerce->cart->add_to_cart( $product_id, $quantity ) ) {

		do_action( 'woocommerce_ajax_added_to_cart', $product_id );

		if ( get_option( 'woocommerce_cart_redirect_after_add' ) == 'yes' ) {
			woocommerce_add_to_cart_message( $product_id );
			$woocommerce->set_messages();
		}

		// Return fragments
		woocommerce_get_refreshed_fragments();

	} else {

		header( 'Content-Type: application/json; charset=utf-8' );

		// If there was an error adding to the cart, redirect to the product page to show any errors
		$data = array(
			'error' => true,
			'product_url' => apply_filters( 'woocommerce_cart_redirect_after_error', get_permalink( $product_id ), $product_id )
		);

		$woocommerce->set_messages();

		echo json_encode( $data );
	}

	die();
}

add_action('wp_ajax_woocommerce_add_to_cart', 'dunk_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_add_to_cart', 'dunk_ajax_add_to_cart');




?>