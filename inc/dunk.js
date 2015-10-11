jQuery(document).ready(function($) {
	$('.hover-reveal').css("opacity", "0");
	$('.jPanelMenu .hover-reveal').css("opacity", "1");
	$('.ux_banner.aboutbanner').has('.hover-reveal').css("border-radius", "90px");
	
	$('.midtier .ux_banner').hover(
		function() {
			$('.hover-reveal', this).fadeTo(400, 1);
		}, function() {
			$('.hover-reveal', this).fadeTo(400, 0);
	});
	$('#homepage-slides').fadeTo(1800, 1);
	$('#banner-1st-3rd').delay(900).fadeTo(800, 1).slideDown(1800);
	
	
	var $window = $(window).on('resize', function(){		
		if ( $('html').attr('class') ) {
			// tests whether the <html> element has a class
			// because jPanelMenu is set on that element.
			// if yes then keep the video full width
			$('.dunk_vid').width('100%');
		} else {
			// if not, then make the video the same height as the product image
			var boxHold = $('.product-image').height();
			$('.dunk_vid').height(boxHold);
		}	
	}).trigger('resize'); //on page load
	

	$('.home .footer-wrapper').hide().css({
		'opacity': '0'
	}).delay(1600).fadeTo(1800, 1);
	$('.footer-wrapper').not('.home .footer-wrapper').hide().css({
		'opacity': '0'
	}).delay(600).fadeTo(1200, 1);
	$(".about .tennis").attr("src", "http://media.ledunk.com/img/ledunk-tennis-blk.png");
	
	//// un-force ssl on logo link
	if (document.location.protocol === 'https:') {
	    $('#logo a').each(function() {
	        var href = $(this).attr('href');
	        if (href.indexOf('https:') > -1) {
	            href = href.replace('https:', 'http:');
	            $(this).attr('href', href);
	        }
	    });
	}
	

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
		if (cartClasses) { 
		}
		// AFTER AJAX CART IS INITIATED, MOVE THE CART ICON AND FADE UP THE MINI-CART
		/* console.log("shuks"); */
		$.magnificPopup.close(); /* DROPDOWN SCRIPT */
		if ($('.nav-dropdown').hasClass('active')) {
			// do nothing if mini-cart is active
			/* $('.nav-dropdown').addClass('active'); */
		} else {
			$('.add_to_cart_button').trigger("blur");
			$('.nav-dropdown').delay(200).css("opacity", "0").addClass('active').fadeTo('400', '1');
		}
		cartClasses = $('.nav-dropdown').hasClass('active');
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
	
	
	///////////////// NO TOCAR  /////////////////////////////////
	
	
	
});

$(window).load(function() 
{
   // executes when complete page is fully loaded, including all frames, objects and images
	
	if ( $('html').attr('class') ) {
			// tests whether the <html> element has a class
			// because jPanelMenu is set on that element.
			// if yes then keep the video full width
			$('.dunk_vid').width('100%');
		} else {
			// if not, then make the video the same height as the product image
			var boxHold = $('.product-image').height();
			$('.dunk_vid').height(boxHold);
	}	
	
}); 

// add class-name no-touch to desktop documents, leave it off for iOS, etc
if (!("ontouchstart" in document.documentElement)) {
	document.documentElement.className += " no-touch";
}