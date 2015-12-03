<?php
global $flatsome_opt;

/*  Add to Cart Dropdown (Gets inserted via Ajax) */
// Dunk changes: adds sprite support for custom shopping cart icon


add_filter('woocommerce_add_to_cart_fragments', 'dunk_add_to_cart_dropdown'); 
function dunk_add_to_cart_dropdown( $fragments ) {
	global $woocommerce;
    global $flatsome_opt;
	ob_start();
	?>
	<div class="cart-inner">
	<a href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" class="cart-link">
                    <strong class="cart-name hide-for-small"><?php _e('Cart', 'woocommerce'); ?></strong> 
					<span class="cart-price hide-for-small">/ <?php echo $woocommerce->cart->get_cart_subtotal(); ?></span> 
                        
					<!-- cart icon -->
					<div class="cart-icon">
                        <?php if ($flatsome_opt['custom_cart_icon']){ ?> 
                        <div class="custom-cart-inner">
                        <?php $cartcount = $woocommerce->cart->cart_contents_count; ?>
                        <div class="custom-cart-count<?php if ($cartcount < 1) {echo " countzero";}; ?>"><?php echo $cartcount; ?></div>
                        <div class="cart-icon-sprite">
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
							<div  class="nav-dropdown">
                                <div id="mini-cart-content" class="nav-dropdown-inner widget_shopping_cart widget_shopping_cart_content">
                                <?php                                    
                                    if (sizeof($woocommerce->cart->cart_contents)>0) {
                                        echo woocommerce_mini_cart();
                                    } else {
                                        echo '<p class="empty">'.__('No products in the cart.','woocommerce').'</p>';
                                    }                     
                                ?>                                                                        
                            </div><!-- .nav-dropdown-inner -->
						</div><!-- .nav-dropdown -->
	</div><!-- .cart-inner -->

	<?php
	$fragments['.cart-inner'] = ob_get_clean();
	return $fragments;
}



// CONTENT
//  - Custom dropdown for main menu (LeNavDropdown, replaces FlatsomeNavDropdown)
//  only difference from the original is this one adds CSS for sliding hover menus

class LeNavDropdown extends Walker_Nav_Menu

{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        if($display_depth == '1'){$class_names = 'nav-dropdown';}
        else {$class_names = 'nav-column-links';}
        $indent = str_repeat("\t", $depth);
             $output .= "\n$indent<div class=".$class_names."><ul>\n";
    }

    function end_lvl( &$output, $depth = 1, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }

    function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    // Most of this code is copied from original Walker_Nav_Menu
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    // Check if menu item is in main menu
    if ( $depth == 0 ) {
        // These lines adds your custom class and attribute
        $attributes .= ' class="nav-top-link sliding-u-l-r"';
    }

    $description = '';
    if(strpos($class_names,'image-column') !== false){$description = '<img src="'.$item->description.'" alt=" "/>';}

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= $description;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  } 

}




// ============ ///////////////////////////
// ! No Tocar   
// ============ 



?>