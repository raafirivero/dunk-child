<?php
global $woo_options;
global $woocommerce;
global $flatsome_opt;
?>
<!DOCTYPE html>
<!--[if lte IE 9 ]><html class="ie lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Custom favicon-->
	<link rel="shortcut icon" href="<?php if ($flatsome_opt['site_favicon']) { echo $flatsome_opt['site_favicon']; ?>
	<?php } else { ?><?php echo get_template_directory_uri(); ?>/favicon.png<?php } ?>" />

	<!-- Retina/iOS favicon -->
	<link rel="apple-touch-icon-precomposed" href="<?php if ($flatsome_opt['site_favicon_large']) { echo $flatsome_opt['site_favicon_large']; ?>
	<?php } else { ?><?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png<?php } ?>" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Le Dunk, the only place for people like us" />
        <meta name="keywords" content="snapbacks, fitteds, campers, fitted caps, baseball caps, snapback caps, headwear"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        
	
	<?php 
		// turn off parent theme styles
		remove_action('wp_enqueue_scripts', 'flatsome_scripts');
		remove_action( 'wp_head', 'flatsome_custom_css', 100 );
		remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
		remove_action( 'wp_enqueue_scripts', array( $GLOBALS['woocommerce'], 'frontend_scripts' ) );
	
		wp_head();
	 ?>
    </head>
<body  <?php body_class(); ?>>
