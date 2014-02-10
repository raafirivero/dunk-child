jQuery(document).ready(function($) {

	$('#bg').smartBackgroundResize({
		image: 'http://media.ledunk.com/img/products/smokeloop-neue.gif' // path to background image file				
	});
	

$('.manny-buy').hide().delay(2000).fadeIn(600);

var paras = $('p, .spidertext'),  
    i = 0;  

paras.css("opacity",0).delay(4600);

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
	             opacity: 0,
	             scale: 1.07
	        })
$(".deal").delay(4500).transition({opacity: 1,
  scale: 1}, 800);
	  
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


/////////////////////////////// No Tocar
});

jQuery(window).load(function($) {
	(function($) {
		var imgList = [];
		$.extend({
			preload: function(imgArr, option) {
				var setting = $.extend({
					init: function(loaded, total) {},
					loaded: function(img, loaded, total) {},
					loaded_all: function(loaded, total) {}
				}, option);
				var total = imgArr.length;
				var loaded = 0;
				setting.init(0, total);
				for (var i in imgArr) {
					imgList.push($("<img />").attr("src", imgArr[i]).load(function() {
						loaded++;
						setting.loaded(this, loaded, total);
						if (loaded == total) {
							setting.loaded_all(loaded, total);
						}
					}));
				}
			}
		});
	})(jQuery);

	function firePreload() {
		jQuery(function($) {
			$.preload([
			// preload images on checkout page
			"https://ledunk.com/img/ledunk-namlogo-blk.png", 
			"https://ledunk.com/img/shopping_icon_sprite-64.png",
			"https://ledunk.com/wp-content/plugins/woocommerce/assets/images/chosen-sprite.png",
			"https://ledunk.com/wp-content/plugins/woocommerce/assets/images/ajax-loader@2x.gif",
			"https://ledunk.com/wp-content/plugins/striper-avengers/assets/images/credits.png",
			"https://ledunk.com/wp-content/uploads/2014/01/lat-114x130.jpg"
			], {
				// no callbacks
			});
		});
	}
	// fire preload a few seconds after the page loads
	setTimeout(firePreload, 8000);
	
});


