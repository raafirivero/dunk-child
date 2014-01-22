jQuery(document).ready(function($) {


$(window).load(function(){
	$(".deal").css({
                 transform: "rotateX(-180deg)",
                 opacity: 0,
                 scale: .85
            });
	$(".deal").squishy({maxSize: 74}).delay(1900).transition({
	  perspective: '100px',
	  rotateX: '0deg',
	  opacity: 1,
	  scale: 1,
	  y: -5
	}, 700);
});

	$('#bg').smartBackgroundResize({
		image: 'http://dunk.site/img/products/smokeloop-neue.gif' // relative or absolute path to background image file	
		// image: 'http://dunk.site/img/nuns-balling-nusq.jpg' // relative or absolute path to background image file				
				
	});


$('.manny-buy').hide().delay(2000).fadeIn(600);

var paras = $('p'),  
    i = 0;  

paras.css("opacity",0).delay(5000);

$(function paraFade() {
	
	$(paras).each(function(i) 
	{
		$(this).delay((i++) * 300).fadeTo(800, 1); 
	});
	// console.log('callback');
	$('#bg').fadeOut(5500, function(){
		$(this).remove();
	});
	
});



$('.topsclub').hover(function(){
	$(this).transition({ scale: 1.025 });
	}, function() {
    $(this).transition({ scale: 1 });
  });

$('.logocurve').transition({ scale:.6, opacity: 0},0).delay(1400).transition({ scale: .9, opacity: 1},1600);

$('.eyeproh2').transition({ scale: .8, opacity: 0 },0).delay(2500).transition({ scale: 1.1, opacity: 1 }, 1000).delay(300).transition({ scale: .8 }, 400).transition({ rotate: '90deg', scale: .3, x: 0, y:0}).fadeOut(300);


// $('.topsflat').delay(7000).transition({ scale: .7, opacity: .8 },800)












/////////////////////////////// No Tocar
});


