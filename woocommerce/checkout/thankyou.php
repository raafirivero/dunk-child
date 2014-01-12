<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if ( $order ) : ?>

<div class="row entry-content">
	<div class="large-6 columns">

	<?php if ( in_array( $order->status, array( 'failed' ) ) ) : ?>

		<p><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p><?php
			if ( is_user_logged_in() )
				_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p>
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<!-- <p> --><?php /* _e( 'Thank you. Your order has been received.', 'woocommerce' ); */ ?><!-- </p> -->
		
		<p><span class="thanks">Thanks Dogg.</span><strong>You're good.</strong></p>

		<ul class="order_details">
			<li class="order">
				<?php _e( 'Order:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_order_number(); ?></strong>
			</li>
			<li class="date">
				<?php _e( 'Date:', 'woocommerce' ); ?>
				<strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
			</li>
			<li class="total">
				<?php _e( 'Total:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_formatted_order_total(); ?></strong>
			</li>
			<?php if ( $order->payment_method_title ) : ?>
			<li class="method">
				<?php _e( 'Payment method:', 'woocommerce' ); ?>
				<strong><?php echo $order->payment_method_title; ?></strong>
			</li>
			<?php endif; ?>
		</ul>
		<div class="clear"></div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>

		<?php do_action( 'woocommerce_thankyou', $order->id ); ?>
	</div>
	<div class="large-6 columns donut-thanks">
		<div class="hide-for-medium-up">
		<?php echo do_shortcode( '[divider width="full"]' ); ?>
		</div>
		<a href="/shop/"><img src="http://dunk.site/wp-content/uploads/2013/12/donut-shadow-clean.png" alt="donut-shadow-clean" width="144" height="144" class="aligncenter size-full wp-image-1280" /></a>
	</div>

<?php else : ?>

	<p><?php _e( 'Thank you. Your order has been received.', 'woocommerce' ); ?></p>

<?php endif; ?>
</div>