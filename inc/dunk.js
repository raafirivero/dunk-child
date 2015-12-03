jQuery(document).ready(function($) {


	///////////////// Shopping Cart Sprite /////////////////////////////

	var initCartVal = $('.custom-cart-count').text();
	initCartVal = eval(initCartVal);
	var cartOffset = (initCartVal) * -32;
	cartOffset = cartOffset + "px";
	if (initCartVal > 3) {
		cartOffset = "-96px";
	}
	
	$('.custom-cart-icon').css({
		'left': cartOffset
	});	
	
	
	$('body').on('wc_fragments_loaded', function() {
		$('.custom-cart-icon').css({
			"left": cartOffset
		});	

	});
	
	$('body').on('wc_fragments_refreshed', function(){
		$('.custom-cart-icon').css({
			"left": cartOffset
		});	
	});
	
	
	///////////////// REGULAR JS /////////////////////////////
	
	$('.no-touch .hover-reveal').css("opacity", "0");
	
	$('.ux_banner.aboutbanner').has('.hover-reveal').css("border-radius", "90px");
	
	$('.no-touch .midtier .ux_banner').hover(
		function() {
			$('.hover-reveal', this).fadeTo(400, 1);
		}, function() {
			$('.hover-reveal', this).fadeTo(400, 0);
	});
	
	$('#homepage-slides').fadeTo(1800, 1);
	
	$('#banner-1st-3rd').delay(900).fadeTo(800, 1).slideDown(1800);
	
	$('.home .footer-wrapper').hide().css({
		'opacity': '0'
	}).delay(1600).fadeTo(1800, 1);
	
	$('.footer-wrapper').not('.home .footer-wrapper').hide().css({
		'opacity': '0'
	}).delay(600).fadeTo(1200, 1);
	
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
	
	
	///////////////// NO TOCAR  /////////////////////////////////
	
	
	
});




// add class-name no-touch to desktop documents, leave it off for iOS, etc
if (!("ontouchstart" in document.documentElement)) {
	document.documentElement.className += " no-touch";
} else {
	document.documentElement.className += " touch";
}
