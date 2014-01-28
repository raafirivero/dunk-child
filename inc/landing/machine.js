jQuery(document).ready(function($) {
	$('#arttypeform input:radio').addClass('input_hidden');
	//use to remove default selection on dropdown
	$("#hatsize").attr("selectedIndex", -1);
	if (!pottyMouth) {
		var pottyMouth = false;
	}
	var dots = 0;
	//the form wrapper (includes all forms)
	var $form_wrapper = $('#form_wrapper'),
		//the current form is the one with class active
		$currentForm = $form_wrapper.children('form.active, div.active'),
		//the change form links
		$linkform = $form_wrapper.find('.linkform');
	//get width and height of each form and store them for later						
	$form_wrapper.children('form, div').each(function(i) {
		var $theForm = $(this);
		//solve the inline display none problem when using fadeIn fadeOut
		if (!$theForm.hasClass('active')) $theForm.hide();
	});
	//set width and height of wrapper (same of current form)
	setWrapperWidth();
	$linkform.bind('click', function(e) {
		var $link = $(this);
		var target = $link.attr('rel');
		if ($link.parent().hasClass('yourname')) {
			// validate name for cuss words
			var sentName = $link.siblings('input').val();
			if (!sentName) {
				$('.firsttry .error').css({
					"visibility": "visible",
					"opacity": "0"
				}).fadeTo(400, 1);
				target = "firsttry";
				return
			} else {
				if (!/fuc|fuk|shit|bitch|ass|dick|dik|pussy/.test(sentName)) {
					// no curses
					$currentForm.addClass('namepass');
				} else {
					if ($link.parent().hasClass('nicetry')) {
						// load pottymouth img
						var getSrc = $("img.golazy").attr("data-src");
						$("img.golazy").attr("src", getSrc);
						target = "doublecurse";
						pottyMouth = true;
					} else {
						target = "nicetry";
					}
				}
			}
		}
		// add name to welcome statement
		if ($('.nicetry input').val()) {
			var $fullname = $('.nicetry input').val();
		} else {
			var $fullname = $('.yourname input').val();
		}
		$('#nameresp').text($fullname);
		if (($link.parent().hasClass('emailform'))) {
			// validate		
			var testEmail = $link.siblings('input').val();
			if (IsEmail(testEmail)) {
				$('#bg').fadeOut();
				if (!pottyMouth) {
					// submit
					var $form = $link.parents('#form_wrapper');
					$.ajax({
						type: 'POST',
						url: $form.attr('action'),
						data: $form.serialize()
					});
				}
			} else {
				$('.error').css({
					"visibility": "visible",
					"opacity": "0"
				}).fadeTo(400, 1);
				target = "emailform";
				return;
			}
		}
		$('#bg').fadeOut();
		// make bg transparent
		$('#bg').attr("src", 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7')
		if (target == 'welcome') {
			setTimeout(function() {
				$('#bg').smartBackgroundResize({
					image: 'http://media.ledunk.com/img/temp/waterbelly.jpg' // relative or absolute path to background image file				
				});
			}, 800);
		};
		$currentForm.fadeOut(400, function() {
			//remove class active from current form
			$currentForm.removeClass('active');
			//new current form
			$currentForm = $form_wrapper.children('div.' + target);
			$('.fanga').hide();
			//animate the wrapper
			rollForm($currentForm);
		});
		e.preventDefault();
	});
	// options for select form
	$('#hatsizeform').change(function(e) {
		var $form = $(this);
		$currentForm.fadeOut(400, function() {
			//remove class active from current form
			$currentForm.removeClass('active');
			//new current form
			$currentForm = $form_wrapper.children('.welcome');
			$('.fanga').hide();
			//animate the wrapper
			rollForm($currentForm);
		});
		e.preventDefault();
	});
	$('#arttypeform label').click(function() {
		var sendVal = $(this).next().val();
		$(this).next().trigger("change", [sendVal]);
	});
	// options for radio form
	$('#arttypeform').change(function(e, sendVal) {
		if (!sendVal) {
			// if radio button clicked do nothing
		} else {
			// the picture was clicked
			$('#' + sendVal).prop('checked', 'checked');
		}
		$currentForm.fadeOut(400, function() {
			//remove class active from current form
			$currentForm.removeClass('active');
			//new current form
			if (pottyMouth == false) {
				$currentForm = $form_wrapper.children('.emailform.nocurse');
				$('.dunkpoints').text('You have earned 5 Dunk Points.');
				$('#bg').smartBackgroundResize({
					image: 'http://media.ledunk.com/img/temp/smokebg.jpg' // relative or absolute path to background image file				
				});
			} else {
				$currentForm = $form_wrapper.children('.outmsg');
				var $cursename = $('.nicetry input').val();
				var dunktxt = "You have earned 0 Dunk Points " + $cursename;
				$('.dunkpoints').text(dunktxt);
				// submit	
				var $form = $(this).parents('#form_wrapper');
				var $messagebox = $('#hide-message');
				var $successmessage = "";
				$.ajax({
					type: 'POST',
					url: $form.attr('action'),
					data: $form.serialize()
				});
			}
			//animate the wrapper
			rollForm($currentForm);
		});
		e.preventDefault();
	});

	function rollForm($currentForm) {
		$form_wrapper.stop().animate({
			width: $currentForm.data('width') + 'px',
			height: $currentForm.data('height') + 'px'
		}, 500, function() {
			//new form gets class active
			$currentForm.addClass('active');
			//show the new form
			$currentForm.fadeIn(400);
			$currentForm.children('input').focus();
		});
		if ($currentForm.hasClass('outmsg')) {
			setInterval(type, 550);
			setTimeout(function() {
				location.href = '/manifesto/'
			}, 2300);
		}
	}

	function type() {
		if (dots < 3) {
			$('#dots').append('.');
			dots++;
		} else {
			// silence
		}
	}
	//hover mouse		
	$('.retreat').bind('mouseover', function(e) {
		$(this).children('.fanga').fadeIn(400);
		e.preventDefault();
	});
	$('.retreat').bind('mousemove', function(e) {
		$('.retreat .fanga').css({
			'top': e.pageY + 70,
			'left': e.pageX - 84
		});
		e.preventDefault();
	});
	$('.retreat').bind('mouseleave', function(e) {
		$('.retreat .fanga').fadeOut("fast");
		e.preventDefault();
	});

	function IsEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	function setWrapperWidth() {
		$form_wrapper.css({
			width: $currentForm.data('width') + 'px',
			height: $currentForm.data('height') + 'px'
		});
	}
	// Disable the submit buttons, form submitted via ajax
	$form_wrapper.find('input[type="submit"]').click(function(e) {
		e.preventDefault();
	});
	/// Window Resize functions
	$(document).ready(function() {
		$('#bg').smartBackgroundResize({
			image: 'http://media.ledunk.com/img/nuns-balling-nusq.jpg' // path to background image file				
		});
	});
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
			// preload images on manifesto page
			"http://media.ledunk.com/img/products/smokeloop-neue.gif", 
			"http://media.ledunk.com/img/topsclub-flat.png", 
			"http://media.ledunk.com/img/eye-pro.png"
			], {
				// no callbacks
			});
		});
	}
	// fire preload a few seconds after the page loads
	setTimeout(firePreload, 5000);
});
