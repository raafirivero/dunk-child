// not working yet, but could this go in a jquery file and preload other things??

$.ajax({
  url: "http://ledunk.com/?add-to-cart=1362",
  cache: true
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/dunk-child/style.css?ver=1.6.2",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/dunk-child/style.css?ver=1.6.2",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/flatsome/css/foundation.css",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/dunk-child/css/ledunk.css",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://dmdtrecbrfzyi.cloudfront.net/fonts/haymaker-webfont.ttf",
  cache: true,
  contentType: "application/x-font-ttf"
})


// this part doesn't work either
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
