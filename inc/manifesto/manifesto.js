jQuery(document).ready(function($) {


$(window).load(function(){
$(".deal").squishy({maxSize: 74});
});

	$('#bg').smartBackgroundResize({
		image: 'http://dunk.site/img/products/smokeloop-neue.gif' // relative or absolute path to background image file	
		// image: 'http://dunk.site/img/nuns-balling-nusq.jpg' // relative or absolute path to background image file				
				
	});


$('.manny-buy').hide().delay(2000).fadeIn(600);

var paras = $('p'),  
    i = 0;  

paras.css("opacity",0).delay(3000);

$(function paraFade() {
	
	$(paras).each(function(i) 
	{
		$(this).delay((i++) * 300).fadeTo(800, 1); 
	});
	// console.log('callback');
	$('#bg').fadeOut(3000);
});


























/////////////////////////////// No Tocar
});


