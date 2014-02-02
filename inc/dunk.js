jQuery(document).ready(function($) {
	$('.hover-reveal').css("opacity", "0");
	$('.ux_banner').has('.hover-reveal').css("border-radius", "90px");
	$('.ux_banner').has('.hover-reveal').hover(
		function() {
			$('.hover-reveal').fadeTo(400, 1);
		}, function() {
			$('.hover-reveal').fadeTo(400, 0);
	});
	$('#homepage-slides').fadeTo(1800, 1);
	$('#banner-1st-3rd').delay(900).fadeTo(800, 1).slideDown(1800);

	$('#slider-le-mid').css("height", "0").delay(2200).animate({
		"height": "400px"
	}, 700, "swing");
	$('.home .footer-wrapper').hide().css({
		'opacity': '0'
	}).delay(1600).fadeTo(1800, 1);
	$('.footer-wrapper').not('.home .footer-wrapper').hide().css({
		'opacity': '0'
	}).delay(600).fadeTo(1200, 1);
	$(".about .tennis").attr("src", "http://media.ledunk.com/img/ledunk-tennis-blk.png");

	///////////////// FORM REMOVE TXT FUNCTIONS /////////////////////////////
	var origlabel = $('input.wpcf7-text').val();
	$('input.wpcf7-text').focus(function() {
		var label = $(this).val();
		if (this.value == label) {
			this.value = '';
		}
	}).blur(function() {
		var label = $("#email-address").val();
		if (this.value == '') {
			this.value = label;
		}
	});
	///////////////// ADD TO CART FUNCTIONS /////////////////////////////////
	// FIND OUT WHAT'S IN THE CART AND OFFSET THE CART ICON ONCE CART IS LOADED
	var initCartVal = $('.custom-cart-count').text();
	initCartVal = eval(initCartVal);
	var cartOffset = (initCartVal) * -32;
	cartOffset = cartOffset + "px";
	if (initCartVal > 3) {
		cartOffset = "-96px";
	}
	$('body').on('wc_fragments_loaded', function() {
		$('.custom-cart-icon').css({
			"left": cartOffset
		});	

	});
	cartClasses = false;
	$('body').on('added_to_cart', function(e, data) {
		if (cartClasses) { /* console.log(cartClasses); */
		}
		// AFTER AJAX CART IS INITIATED, MOVE THE CART ICON AND FADE UP THE MINI-CART
		/* console.log("shuks"); */
		$.magnificPopup.close(); /* DROPDOWN SCRIPT */
		if ($('.nav-dropdown').hasClass('active')) {
			// do nothing if mini-cart is active
			/* console.log('cart hasclass active'); */
			/* $('.nav-dropdown').addClass('active'); */
		} else {
			$('.add_to_cart_button').trigger("blur");
			$('.nav-dropdown').delay(200).css("opacity", "0").addClass('active').fadeTo('400', '1');
		}
		cartClasses = $('.nav-dropdown').hasClass('active'); /* console.log(cartClasses); */
		var cartVal = $('.custom-cart-count').text();
		//change cart value to a number and add 1
		cartVal = eval(cartVal);
		var cartOffset = (cartVal) * -32;
		cartOffset = cartOffset + "px";
		if (cartVal > 3) {
			cartOffset = "-96px";
		}
		
		$('.custom-cart-icon').css({
			"left": cartOffset,
			"right": "none"
			// Animation complete.
		});
	});
	
	$('body').on('updated_checkout', function() {
				Ladda.bind( '.ladda-button', {
				timeout: 9000,
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.1, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );
	
	});
	
	
	///////////////// NO TOCAR  /////////////////////////////////
	
	
	
});

