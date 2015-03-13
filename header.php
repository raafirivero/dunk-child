<?php
global $woo_options;
global $woocommerce;
global $flatsome_opt;
?>
<?php 
	// PHP logging console
	require_once( $_SERVER['DOCUMENT_ROOT'].'/php-console/src/PhpConsole/__autoload.php'); 

	$handler = PhpConsole\Handler::getInstance();
    // You can override default Handler behavior:
    // $handler->setHandleExceptions(false); // disable exceptions handling
    // $handler->setCallOldHandlers(false); // disable passing errors & exceptions to prviously defined handlers
	$handler->setHandleErrors(false);  // disable errors handling
	$handler->start(); // initialize handlers
	$connector = PhpConsole\Helper::register(); // required to register PC class in global namespace, must be called only once
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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">

		<?php do_action( 'before' ); ?>

		<?php if(!isset($flatsome_opt['topbar_show']) || $flatsome_opt['topbar_show']){ ?>
		<div id="top-bar">
			<div class="row">
				<div class="large-12 columns">
					<!-- left text -->
					<div class="left-text left">
						<div class="html"><?php echo $flatsome_opt['topbar_left']; ?></div><!-- .html -->
					</div>
					<!-- right text -->
					<div class="right-text right hide-for-small">
						 <?php if ( has_nav_menu( 'top_bar_nav' ) ) : ?>
						<?php  
								wp_nav_menu(array(
									'theme_location' => 'top_bar_nav',
									'menu_class' => 'top-bar-nav',
									'before' => '',
									'after' => '',
									'link_before' => '',
									'link_after' => '',
									'depth' => 2,
									'fallback_cb' => false,
									'walker' => new LeNavDropdown
								));
						?>
						 <?php else: ?>
                            Define your top bar navigation in <b>Apperance > Menus</b>
                        <?php endif; ?>
					</div><!-- .pos-text -->

				</div><!-- .large-12 columns -->
			</div><!-- .row -->
		</div><!-- .#top-bar -->
		<?php }?>



		<header id="masthead" class="site-header" role="banner">
			<div class="row"> 
				<div class="large-12 columns header-container">
					<div class="mobile-menu show-for-small"><a href="#open-menu"><span class="icon-menu"></span></a></div><!-- end mobile menu -->
					

					<div id="logo" class="logo-left">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">
							<?php if($flatsome_opt['site_logo']){
								$site_title = esc_attr( get_bloginfo( 'name', 'display' ) );
								echo '<img src="'.$flatsome_opt['site_logo'].'" class="header_logo" alt="'.$site_title.'"/>';
							} else {bloginfo( 'name' );}?>
						</a>
					</div><!-- .logo -->


					<div class="left-links">

						<div class="wide-nav-search hide-for-small">
							<?php if($flatsome_opt['search_pos'] == 'left'){ ?>
							<div>
									<?php if(function_exists('get_product_search_form')) {
											get_product_search_form();
										} else {
											get_search_form();
										} ?>		
							</div>
							
							<div>
								<?php /* echo do_shortcode($flatsome_opt['nav_position_text_top']); */ ?>
							</div>
						<?php } ?>
						</div>
						

					</div><!-- .left-links -->

					

					<div class="right-links">

 						
 						
						<?php if(!$flatsome_opt['catalog_mode']) { ?> 
						<ul id="site-navigation" class="header-nav">
								<?php  
									wp_nav_menu(array(
										'theme_location' => 'primary',
										'container'       => false,
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										/* 'walker'          => new leNav */
										'walker'		  => new LeNavDropdown
									));
								?>
							
		

					<!-- Show mini cart if Woocommerce is activated -->
					<?php if(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?> 
					<li class="mini-cart">
						<div class="cart-inner">
							<?php // Edit this content in inc/template-tags.php. Its gets relpaced with Ajax! ?>
							<a href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" class="cart-link">
								<strong class="cart-name hide-for-small"><?php _e('Cart', 'flatsome'); ?></strong> 
								<span class="cart-price hide-for-small">/ <?php echo $woocommerce->cart->get_cart_total(); ?></span> 
									<!-- cart icon -->
									<div class="cart-icon">
				                        <?php if ($flatsome_opt['custom_cart_icon']){ ?> 
				                        <div class="custom-cart-inner">
					                        <div class="custom-cart-count"><?php echo $woocommerce->cart->cart_contents_count; ?></div>
					                        <div class="cart-icon-sprite">
                        						<img class="custom-cart-icon" src="<?php echo $flatsome_opt['custom_cart_icon']?>"/>
                        					</div> 
				                        </div><!-- .custom-cart-inner -->
				                        <?php } else { ?> 
				                         <strong><?php echo $woocommerce->cart->cart_contents_count; ?></strong>
				                         <span class="cart-icon-handle"></span>
				                        <?php }?>
									</div><!-- end cart icon -->
							</a>
							<div class="nav-dropdown">
							  	<div class="nav-dropdown-inner">
								<!-- Add a spinner before cart ajax content is loaded -->
									<?php if ($woocommerce->cart->cart_contents_count == 0) {
										echo '<p class="empty">'.__('No products in the cart.','woocommerce').'</p>';
										?> 
									<?php } else { //add a spinner ?> 
										<div class="loading"><i></i><i></i><i></i><i></i></div>
									<?php } ?>
									</div><!-- nav-dropdown-innner -->
							</div><!-- .nav-dropdown -->
						</div><!-- .cart-inner -->
					</li><!-- .mini-cart -->
					<li class="le-small hide-for-large"><img src="http://media.ledunk.com/img/le-big.png" /></li>
					<?php } else {echo '<li>WooCommerce not installed!</li>';} ?>
				</ul><!-- .header-nav -->
				<?php } else { ?>
				<div class="catalog-mode-header">
					<?php echo do_shortcode($flatsome_opt['catalog_mode_header']); ?>
				</div>
				<?php } ?>

			</div><!-- .right-links -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</header><!-- .header -->

<?php if($flatsome_opt['nav_position'] == 'bottom' || $flatsome_opt['nav_position'] == 'bottom_center') { ?>
<!-- Main navigation - Full width style -->
<div class="wide-nav hide-for-small  <?php echo $flatsome_opt['nav_position_color']; ?> <?php if($flatsome_opt['nav_position'] == 'bottom_center') {echo 'nav-center';} else {echo 'nav-left';} ?>">
	<div class="row">
		<div class="large-12 columns">
		<div class="nav-wrapper">
		<ul id="site-navigation" class="header-nav">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<?php  
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container'       => false,
									'items_wrap'      => '%3$s',
									'depth'           => 3,
									'walker'          => new FlatsomeNavDropdown
								));
							?>

              <?php else: ?>
                  <li>Define your main navigation in <b>Apperance > Menus</b></li>
              <?php endif; ?>								
		</ul>
		<?php if($flatsome_opt['nav_position'] == 'bottom') { ?>
		<div class="right">
			<div class="wide-nav-right">
				<?php echo do_shortcode($flatsome_opt['nav_position_text']); ?>
				<?php if($flatsome_opt['search_pos'] == 'right'){ ?>
							<div>
									<?php if(function_exists('get_product_search_form')) {
											get_product_search_form();
										} else {
											get_search_form();
										} ?>		
							</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
		</div><!-- nav-wrapper -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div><!-- .wide-nav -->
<?php } ?>

<?php if(isset($flatsome_opt['html_after_header'])){
	// AFTER HEADER HTML BLOCK
	echo do_shortcode($flatsome_opt['html_after_header']);
} ?>

<div id="main-content" class="site-main <?php echo $flatsome_opt['content_color']; ?>">
<?php 
//adds a border line if header is white
if (strpos($flatsome_opt['header_bg'],'#fff') !== false || $flatsome_opt['nav_position'] == 'top') {
		  echo '<div class="row"><div class="large-12 columns"><div class="top-divider"></div></div></div>';
} ?>

<?php if(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?> 
	<!-- woocommerce message -->
	<?php  woocommerce_show_messages(); ?>
<?php } ?>	