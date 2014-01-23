jQuery(document).ready(function($) {


	$('#bg').smartBackgroundResize({
		image: 'http://media.ledunk.com/img/products/smokeloop-neue.gif' // relative or absolute path to background image file	
				
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
	
});



$('.topsclub').hover(function(){
	$(this).transition({ scale: 1.025 });
	}, function() {
    $(this).transition({ scale: 1 });
  });


$('.logocurve').transition({ scale:.6, opacity: 0},0).delay(1400).transition({ scale: .9, opacity: 1},1600);


$('.topsname').transition({ scale:.75, opacity: 0},0).delay(1700).transition({ scale: 1, opacity: 1},1600);

$(".deal").css({
	             transform: "rotateX(-180deg)",
	             opacity: 0,
	             scale: .8
	        });

$(window).load(function(){
	// needs to be on window.load because of squishy plugin
	
	$(".deal").squishy({maxSize: 74}).delay(1900).transition({
	  perspective: '100px',
	  rotateX: '0deg',
	  opacity: .9,
	  scale: 1,
	  y: -5
	}, 700).transition({ scale: 1}, 600);
});


$('.eyeproh2')
	.transition({ scale: .7, opacity: 0 },0)
	.delay(2300)
	.transition({ scale: 1.1, opacity: 1 }, 1200, function(){
			// fade #bg on callback from eye transition
			$('#bg').fadeOut(2100, function() {
				// remove bg on callback from fadeOut
				$('#bg').remove()
				});	
				
		})
	.delay(300)
	.transition({ scale: .8 }, 400)
	.transition({ rotate: '-180deg', scale: .3, x: 0, y:90})
	.fadeOut(300);












/////////////////////////////// No Tocar
});


