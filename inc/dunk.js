jQuery(document).ready(function($) {
	$('.hover-reveal').css("opacity", "0");
	$('.ux_banner').has('.hover-reveal').css("border-radius", "90px");
	$('.ux_banner').has('.hover-reveal').hover(

	function() {
		$('.hover-reveal').fadeTo(400, 1);
	}, function() {
		$('.hover-reveal').fadeTo(400, 0);
	}); /* Ladda.bind( 'input[type=submit]' ); */
	$('#homepage-slides').fadeTo(1800, 1);
	$('#banner-1st-3rd').delay(900).fadeTo(800, 1).slideDown(1800);
	$('#hardwood-poets').delay(1600).fadeTo(700, 1);
	$('#slider-le-mid').css("height", "0").delay(2200).animate({
		"height": "400px"
	}, 700, "swing");
	$('.home .footer-wrapper').hide().css({
		'opacity': '0',
		'background-color': 'yellow !important'
	}).delay(1600).fadeTo(1800, 1);
	$('.footer-wrapper').not('.home .footer-wrapper').hide().css({
		'opacity': '0',
		'background-color': 'yellow !important'
	}).delay(600).fadeTo(1800, 1);
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
	
	
	// Ladda functions
	// Bind progress buttons and simulate loading progress
	$('section.progress-demo .button, section.progress-demo input').ladda({
		timeout: 5000,
		callback: function($el) {
			var progress = 0;
			var interval = setInterval(function() {
				progress = Math.min(progress + Math.random() * 0.1, 1);
				$el.ladda('setProgress', progress);
				if (progress === 1) {
					$el.ladda('stop');
					clearInterval(interval);
				}
			}, 200);
		}
	});
	// You can control loading explicitly using the JavaScript API
	// as outlined below:
	// var $l = $( '<button>Submit</button>' ).ladda();
	// $l.ladda( 'start' );
	// $l.ladda( 'stop' );
	// $l.ladda( 'toggle' );
	// $l.ladda( 'setProgress', 0-1 );
	// $l.ladda( 'isLoading' ); // WARNING: Returns a boolean, will not chain.
	
	
	
	
	
	
	
	
	///////////////// NO TOCAR  /////////////////////////////////
	
	
	
});
