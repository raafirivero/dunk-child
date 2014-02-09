	// Ladda functions
	// Bind progress buttons and simulate loading progress
	 

	Ladda.bind( '.progress-demo button, .progress-demo input, .ladda-button', {
				timeout: 16000,
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.05, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );


	// You can control loading explicitly using the JavaScript API
	// as outlined below:
	// var $l = $( '<button>Submit</button>' ).ladda();
	// $l.ladda( 'start' );
	// $l.ladda( 'stop' );
	// $l.ladda( 'toggle' );
	// $l.ladda( 'setProgress', 0-1 );
	// $l.ladda( 'isLoading' ); // WARNING: Returns a boolean, will not chain.
	
jQuery(document).ready(function($) {

	$('body').on('updated_checkout', function() {
				Ladda.bind( '.ladda-button', {
				timeout: 16000,
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.05, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );
			
	$('#minqueue-helper').show();		
	
	});



	///////////////// NO TOCAR  /////////////////////////////////
	
	
	
});