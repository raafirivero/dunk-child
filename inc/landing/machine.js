$(function() {

$('#arttypeform input:radio').addClass('input_hidden');
//use to remove default selection on dropdown

$("#hatsize").attr("selectedIndex", -1);
	if(!pottyMouth) {
	var pottyMouth = false;
	}


			//the form wrapper (includes all forms)
		var $form_wrapper	= $('#form_wrapper'),
			//the current form is the one with class active
			$currentForm	= $form_wrapper.children('form.active, div.active'),
			//the change form links
			$linkform		= $form_wrapper.find('.linkform');
				
		//get width and height of each form and store them for later						
		$form_wrapper.children('form, div').each(function(i){
			var $theForm	= $(this);
			//solve the inline display none problem when using fadeIn fadeOut
			if(!$theForm.hasClass('active'))
				$theForm.hide();
			$theForm.data({
				width	: $theForm.width(),
				height	: $theForm.height()
			});
		});
		
		//set width and height of wrapper (same of current form)
		setWrapperWidth();

// console.log (  )		
	
		/*
		clicking a link (change form event) in the form
		makes the current element hide.
		The wrapper animates its width and height to the 
		width and height of the new current form.
		After the animation, the new element is shown
		*/
		$linkform.bind('click',function(e){
			var $link	= $(this);
			var target	= $link.attr('rel');
			
			
			if ($link.parent().hasClass('yourname')) {
				// validate name for cuss words
				var sentName = $link.siblings('input').val();
				
				if ( !/fuck|fuk|shit|bitch|ass|dick|dik|pussy/.test(sentName) ){
						// no curses
						$currentForm.addClass('namepass');
				} else {
					if ($link.parent().hasClass('nicetry')) {
						target = "doublecurse";
						pottyMouth = true;
						
						// console.log( 'pottyMouth is '+pottyMouth );
					} else {
						target = "nicetry";
					}
					
				}
			}

			// add name to welcome statement
			if ( $('.nicetry input').val() ) {
				var $fullname = $('.nicetry input').val();
			} else {
				var $fullname = $('.yourname input').val();
			}
			
			$('#nameresp').text($fullname);


				if ( ($link.parent().hasClass('emailform')) && (!pottyMouth) ) {	
						// validate		
						var testEmail = $link.siblings('input').val();		
						if (IsEmail(testEmail)) {
	
						// submit	
						var $form = $link.parents('#form_wrapper');							
						var $messagebox = $('#hide-message');
						var $successmessage = ""; 
	
						// console.log ( $form.serialize() );
							    $.ajax({
							    type: 'POST',
							    url: $form.attr('action'),
							    data: $form.serialize(),
							    success: function (msg) {
							            $messagebox.append($successmessage);
							            $messagebox.delay(800).fadeIn(550);
							        }
							    });
	
					} else {
						$('.error').css({"visibility":"visible","opacity":"0"}).fadeTo(400,1);
						target = "emailform";
						return;	
					}
			}

			$currentForm.fadeOut(400,function(){
				//remove class active from current form
				$currentForm.removeClass('active');
				//new current form
				$currentForm= $form_wrapper.children('div.'+target);
				$('.fanga').hide();
				//animate the wrapper
				$form_wrapper.stop()
							 .animate({
								width	: $currentForm.data('width') + 'px',
								height	: $currentForm.data('height') + 'px'
							 },500,function(){
								//new form gets class active
								$currentForm.addClass('active');
								//show the new form
								$currentForm.fadeIn(400);
							 });

			});

			e.preventDefault();
		});

		
		// options for select form
		$('#hatsizeform').change(function(e){
			var $form	= $(this);
		
			$currentForm.fadeOut(400,function(){
				//remove class active from current form
				$currentForm.removeClass('active');
				//new current form
				// $currentForm= $form_wrapper.children('.welcome');
				$currentForm= $form_wrapper.children('.welcome');
				$('.fanga').hide();
				//animate the wrapper
				$form_wrapper.stop()
							 .animate({
								width	: $currentForm.data('width') + 'px',
								height	: $currentForm.data('height') + 'px'
							 },500,function(){
								//new form gets class active
								$currentForm.addClass('active');
								//show the new form
								$currentForm.fadeIn(400);
							 });

			});
			e.preventDefault();
		});
		
		
		$('#arttypeform label').click(function() {
			var sendVal = $(this).next().val();
			$(this).next().trigger("change", [ sendVal ]);
		});
			
		// options for radio form
		$('#arttypeform').change( function(e, sendVal){
		
			if(!sendVal){
					// if radio button clicked do nothing
				} else {
					// the picture was clicked
					$('#' + sendVal ).attr('checked', 'checked');
				}				
						
			$currentForm.fadeOut(400,function(){
				//remove class active from current form
				$currentForm.removeClass('active');
				//new current form
								
				if (pottyMouth == false) {
				
						$currentForm= $form_wrapper.children('.emailform.nocurse');
						
					} else {
					
						$currentForm= $form_wrapper.children('.outmsg');
						
						// submit	
						var $form = $(this).parents('#form_wrapper');							
						var $messagebox = $('#hide-message');
						var $successmessage = ""; 
	
						// console.log ( $form.serialize() );
							    $.ajax({
							    type: 'POST',
							    url: $form.attr('action'),
							    data: $form.serialize(),
							    success: function (msg) {
							            $messagebox.append($successmessage);
							            $messagebox.delay(800).fadeIn(550);
							        }
							    });
					
					}
				//animate the wrapper
				$form_wrapper.stop()
							 .animate({
								width	: $currentForm.data('width') + 'px',
								height	: $currentForm.data('height') + 'px'
							 },500,function(){
								//new form gets class active
								$currentForm.addClass('active');
								//show the new form
								$currentForm.fadeIn(400);
							 });

			});
			e.preventDefault();
		});
		
		
		
		//hover mouse
		
		$('.retreat').bind('mouseover', function(e){
		   $('.fanga').fadeIn(400);
		}); 
		
		$('.retreat').bind('mousemove', function(e){
		   $('.fanga').css({'top':e.pageY+25,'left':e.pageX-84, 'z-index':'-1'});
		}); 
				
		$('.retreat').bind('mouseleave', function(e){
		   $('.fanga').fadeOut("fast");
		}); 
		
		
		
		
		
		function IsEmail(email) {
		  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  return regex.test(email);
		}
		
		function setWrapperWidth(){
			$form_wrapper.css({
				width	: $currentForm.data('width') + 'px',
				height	: $currentForm.data('height') + 'px'
			});
		}
		
		/*
		for the demo we disabled the submit buttons
		if you submit the form, you need to check the 
		which form was submited, and give the class active 
		to the form you want to show
		*/
		$form_wrapper.find('input[type="submit"]')
					 .click(function(e){
						e.preventDefault();
					 });	
					 
		
		
				 
					 
	//////////// No Tocar
	});