jQuery(document).ready(function($) {

/*
$('.deal').textfill({
    maxFontPixels: 0
    
});
*/


$(".deal").squishy({maxSize: 74});



$('#bg').smartBackgroundResize({
	image: 'http://dunk.site/img/products/smokeloop-neue.gif' // relative or absolute path to background image file				
});


//	$('#bg').delay(2000).fadeOut(2000);

$('.manny-buy').hide().delay(2000).fadeIn(600);

var paras = $('p'),  
    i = 0;  

paras.css("opacity",0).delay(3000);

(function paraFade() {  
  $(paras[i++] || []).fadeTo	('200', 1, arguments.callee);  
})();  





























/////////////////////////////// No Tocar
});


