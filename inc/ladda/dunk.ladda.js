jQuery(window).load(function($) {
	// Ladda functions
	// Bind progress buttons and simulate loading progress
	/* $('section.progress-demo .button, section.progress-demo input'). */
	Ladda.bind( 'input[type=submit]', {
		timeout: 5000,
		callback: function($el) {
			var progress = 0;
			var interval = setInterval(function() {
				progress = Math.min(progress + Math.random() * 0.1, 1);
				$el.ladda('setProgress', progress);
				if (progress === 1) {
					$el.ladda('stop');
					clearInterval(interval);
				}
			}, 200);
		}
	});
	// You can control loading explicitly using the JavaScript API
	// as outlined below:
	// var $l = $( '<button>Submit</button>' ).ladda();
	// $l.ladda( 'start' );
	// $l.ladda( 'stop' );
	// $l.ladda( 'toggle' );
	// $l.ladda( 'setProgress', 0-1 );
	// $l.ladda( 'isLoading' ); // WARNING: Returns a boolean, will not chain.
	
	
		
	
});
