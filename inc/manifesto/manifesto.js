jQuery(document).ready(function($) {


$(window).load(function(){
	$(".deal").css({
                 transform: "rotateX(-180deg)"
            });
	$(".deal").squishy({maxSize: 74}).delay(50).transition({
	  perspective: '100px',
	  rotateX: '0deg'
	}, 600);
});

	$('#bg').smartBackgroundResize({
		image: 'http://dunk.site/img/products/smokeloop-neue.gif' // relative or absolute path to background image file	
		// image: 'http://dunk.site/img/nuns-balling-nusq.jpg' // relative or absolute path to background image file				
				
	});


$('.manny-buy').hide().delay(2000).fadeIn(600);

var paras = $('p'),  
    i = 0;  

paras.css("opacity",0).delay(2600);

$(function paraFade() {
	
	$(paras).each(function(i) 
	{
		$(this).delay((i++) * 300).fadeTo(800, 1); 
	});
	// console.log('callback');
	$('#bg').fadeOut(3600, function(){
		$(this).remove();
	});
	
});



$('.topsclub').hover(function(){
	$(this).transition({ scale: 1.025 });
	}, function() {
    $(this).transition({ scale: 1 });
  });

$('.logocurve').transition({ scale:.8, opacity: 0},0).transition({ scale: 1, opacity: 1},700);

$('.eyeproh2').css({"opacity":0,"scale":"50%"}).delay(700).transition({ scale: 1.1, opacity: 1 }, 700).transition({ scale: .8 }, 400).transition({ rotate: '90deg', scale: .4, x: -20, y: 00}).fadeOut(400);















/////////////////////////////// No Tocar
});


