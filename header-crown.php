<?php
global $woo_options;
global $woocommerce;
global $flatsome_opt;
?>

<?php 
/*
	// PHP logging console
	require_once( $_SERVER['DOCUMENT_ROOT'].'/php-console/src/PhpConsole/__autoload.php'); 

	$handler = PhpConsole\Handler::getInstance();
    // You can override default Handler behavior:
    // $handler->setHandleExceptions(false); // disable exceptions handling
    // $handler->setCallOldHandlers(false); // disable passing errors & exceptions to prviously defined handlers
	$handler->setHandleErrors(false);  // disable errors handling
	$handler->start(); // initialize handlers
	$connector = PhpConsole\Helper::register(); // required to register PC class in global namespace, must be called only once
	
	// FireBug
	require_once( $_SERVER['DOCUMENT_ROOT'].'/FirePHPCore/FirePHP.class.php');
	$firephp = FirePHP::getInstance(true);
	require_once ( $_SERVER['DOCUMENT_ROOT'].'/chromephp/ChromePhp.php');
*/

?>

<!DOCTYPE html>
<!--[if lte IE 9 ]><html class="ie lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="dns-prefetch" href="//ajax.googleapis.com.com" />
	<link rel="dns-prefetch" href="//www.google-analytics.com" />
	<link rel="dns-prefetch" href="//ssl.google-analytics.com" />
	<link rel="dns-prefetch" href="//media.ledunk.com" />
	<link rel="dns-prefetch" href="//js.stripe.com" />
	<link rel="dns-prefetch" href="//fonts.googleapis.com" />
	<link rel="dns-prefetch" href="//ledunk.com" />
	<link rel="prefetch" href="/checkout/" />
	<link rel="prefetch" href="/shop/" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Content Experiments (not necessary on local site) -->
	<?php /* do_action( 'wpe_gce_head' ); */ ?>

	<!-- Custom favicon-->
	<link rel="shortcut icon" href="<?php if ($flatsome_opt['site_favicon']) { echo $flatsome_opt['site_favicon']; ?>
	<?php } else { ?><?php echo get_template_directory_uri(); ?>/favicon.png<?php } ?>" />

	<!-- Retina/iOS favicon -->
	<link rel="apple-touch-icon-precomposed" href="<?php if ($flatsome_opt['site_favicon_large']) { echo $flatsome_opt['site_favicon_large']; ?>
	<?php } else { ?><?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png<?php } ?>" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Le Dunk, the only place for people like us" />
        <meta name="keywords" content="snapbacks, fitteds, campers, Brooklyn, fitted caps, baseball caps, snapback caps, headwear"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>


	
	<?php 
		// turn off parent theme styles
 		// remove_action('wp_enqueue_scripts', 'flatsome_scripts');
		remove_action( 'wp_head', 'flatsome_custom_css', 100 );
		remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
		remove_action( 'wp_enqueue_scripts', array( $GLOBALS['woocommerce'], 'frontend_scripts' ) );
		
		remove_filter( 'the_content', 'smae_parse' );
		
		add_action('wp_print_scripts','dequeue_themescripts');
		function dequeue_themescripts() {
			// speed this thang up
			wp_dequeue_script( 'flatsome-magnific-popup' );
			wp_dequeue_script( 'flatsome-iosslider' );
			wp_dequeue_script( 'flatsome-modernizer' );
			wp_dequeue_script( 'flatsome-plugins' );
			wp_dequeue_script( 'flatsome-theme-js' );
			wp_dequeue_script('smae.js');
    		wp_dequeue_script('retinajs');
    		
    		wp_dequeue_script('dunk-cart');
   		}
	
		wp_head();
	 ?>
    </head>
<body  <?php body_class('crown'); ?>>

