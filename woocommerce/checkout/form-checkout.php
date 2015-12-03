<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $flatsome_opt;

wc_print_notices();

?>


<div class="row">
<div class="large-12 columns">

		<?php do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>


<!-- LOGIN -->


</div><!-- .large-12 -->
</div>


<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php /* echo esc_url( $get_checkout_url ); */ ?>" enctype="multipart/form-data">
	
	<div class="row">
	<div id="customer_details" class="large-7  columns">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

	<div class="checkout-group woo-billing">
		<?php do_action( 'woocommerce_checkout_billing' ); ?>

	</div>

	<div class="checkout-group woo-shipping">
		 <?php do_action( 'woocommerce_checkout_shipping' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

  	<?php endif; ?>

	</div><!-- .large-7 -->

	<div class="large-5  columns">
		<div id="order_review" class="order-review woocommerce-checkout-review-order">
			<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>
			<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div><!-- order-review -->
		
		<button name="shiptest" id="shiptest" type="button" class="button tester">tester</button>
		<div id="shipresult"></div>


		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
	</div><!-- .large-5 -->
	</div><!-- .row -->
    </form><!-- .checkout -->
    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
