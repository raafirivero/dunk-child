jQuery(document).ready(function($) {

	$('#bg').smartBackgroundResize({
		image: 'http://media.ledunk.com/img/products/smokeloop-neue.gif' // path to background image file				
	});
	

$('.manny-buy').hide().delay(2000).fadeIn(600);

var paras = $('p, .bullet, .spidertext'),  
    i = 0;  

paras.css("opacity",0).delay(5000);
$('span.price').parent().css("opacity",1)
$(function paraFade() {
	
	$(paras).each(function(i) 
	{
		$(this).delay((i++) * 600).fadeTo(800, 1); 
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
	             opacity: 0,
	             scale: 1.07,
	             rotateX: -95
	        })
$(".deal").delay(4500).transition({
	opacity: 1,
	scale: 1,
	rotateX: 0
	}, 800);
	  
$(window).load(function(){
	// squishy plugin needs to be on window.load 
	$(".deal").squishy({maxSize: 74});
});


$('.eyeproh2')
	.transition({ scale: .7, opacity: 0 },0)
	.delay(1900)
	.transition({ scale: 1.1, opacity: 1 }, 1200, function(){
			// fade #bg on callback from eye transition
			$('#bg').fadeOut(2100, function() {
				// remove bg on callback from fadeOut
				$('#bg').remove()
				});		
		})
	.delay(300)
	.transition({ scale: .8 }, 400)
	.transition({ rotate: '-180deg', scale: .3, x: 0, y:90}, 300)
	.fadeOut(300);


function urlofdoc ( jsfile ) {

    var scriptElements = document.getElementsByTagName('script');
    var i, element, myfile;
 
        for( i = 0; element = scriptElements[i]; i++ ) {
 
            myfile = element.src;
 
            if( myfile.indexOf( jsfile ) >= 0 ) {
                var myurl = myfile.substring( 0, myfile.indexOf( jsfile ) );
            }
        }
    return myurl;
}
var myurl = urlofdoc ( "manny-bullets.js" );

$('.moreinfo').click(function(){
	$.get(myurl+"more-info.html",function(data){
                $(".infobox").append(data);
      });
   $(this).slideUp('slow'); 
   $('html, body').animate({
		scrollTop: $(".infobox").offset().top
	}, 1200);
});


/////////////////////////////// No Tocar
});

