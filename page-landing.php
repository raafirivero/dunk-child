<?php
/*
Template name: Landing Page
*/
/* get_header(); */  
get_template_part('header','landing');

?>
	<div id="wrapper">
	<img id="bg" src="" class="nuns" alt="nuns balling le dunk" />
		<div id="main-content" class="site-main light">
		<div class="content">

	

			<form  id="form_wrapper" class="form_wrapper" action="<?php echo get_stylesheet_directory_uri(); ?>/inc/landing/process.php" method="post">
			
				<div class="bigtxt active">
					<h1><a href="#" class="linkform advance" rel="firsttry" >Advance</a> or <a href="#" class="retreat">Retreat<img src="http://media.ledunk.com/img/fanga.png" class="fanga" alt="pixelated middle finger" /></a></h1>
					
					<img class="namlogo" src="http://media.ledunk.com/img/ledunk-namlogo-blk.png" alt="Le Dunk logo" />
				</div>
			
		
				<div  class="yourname firsttry" >
					<h3>What's your name?</h3>
					
					<input type="text" name="yourname" rel="welcome" /></input>
					<span class="error">Name, nickname, whatever...</span>
					

					<input type="submit" class="linkform hidden" rel="welcome" value="go"></input>

				</div>
					
				<div class="nicetry yourname">
						<h4>We know how to curse, too, asshole.</h4>
						<!-- <h4>You alright tho.</h4> -->
						<h4>What's your name?</h4>
						
						<input type="text" name="cursename" /></input>
						<input type="submit" class="linkform hidden" rel="welcome" value="go"></input>
				</div>
				
				<div class="doublecurse">
						<h3>Oh, you fancy, huh?</h3>
						
						<input type="text" name="curseresp" /></input>
						<input type="submit" class="linkform hidden" rel="triplecurse" value="go"></input>
				</div>
				
				<div class="triplecurse emailform">
						<h3>Mmm-hmm</h3>
						<img class="golazy" src="" data-src="http://gifrific.com/wp-content/uploads/2012/09/Samuel-L-Jackson-Drinking-Sprite-Pulp-Fiction.gif" alt="sip" />
						<p>We're gonna call you Stan.</p>
						<p>What's your email?</p>
						

						<input type="text" name="pottyemail" rel="welcome" />
						
						<input type="submit" class="linkform hidden" rel="welcome" value="go"></input>
						<span class="error">not a valid email</span>
				</div>


				
				<div id="welcome" class="welcome" >
					<p>Welcome to Le Dunk <span id="nameresp"></span></p>
					<hr />
					<h1><a href="#" class="linkform advance" rel="arttype" >Advance</a> or <a href="#" class="retreat">Retreat<img src="http://media.ledunk.com/img/bunny-hiding.jpg" class="fanga bunny" alt="bunny hiding sad little face" /></a></h1>
					<div style="position: absolute; left: 50%;">
					<p class="credit">photo: Chris Heads</p>
					</div>
				</div>
		
			
			
				<div id="arttypeform" class="arttype" >
					<div id="arttype">
						<h3>Choose:</h3>
						
						<div class="selection">
						<label for="tiger"><img src="http://media.ledunk.com/img/products/tiger-icon.jpg" alt="Tiger" width="144" height="144" /></label>
						<input type="radio" name="tribe" id="tiger" value="tiger">
						</div>
						
						<div class="selection">
						<label for="boobs"><img src="http://media.ledunk.com/img/products/cleave-icon.jpg" alt="Boobs" width="144" height="144" /></label>
						<input type="radio" name="tribe" id="boobs" value="boobs">	
						</div>
						
						
						<div class="selection">
						<label for="donut"><img src="http://media.ledunk.com/img/products/donut-icon.jpg" alt="Donut" width="144" height="144" /></label>
						<input type="radio" name="tribe" id="donut" value="donut">	
						</div>
						
						<div class="selection">
						<label for="tesla"><img src="http://media.ledunk.com/img/products/car-icon.jpg" alt="Tesla" width="144" height="144" /></label>
						<input type="radio" name="tribe" id="tesla" value="tesla">
						</div>
						
					</div>
				</div>
				
							
				
				<div class="emailform nocurse" >
					<h3>Enter your email</h3>
						<input type="text" name="email"/>
						<span class="error">email not formatted properly</span>
						

						<input type="submit" class="linkform hidden" rel="outmsg" value="go"></input>
				</div>	
				
				<div class="outmsg">
					<p class="dunkpoints"></p>
					<h3>configuring site<span id="dots"></span></h3>
				</div>
			
				<div class="clear"></div>
		</form>
			
	</div>
 </div>

		
</div>
<?php wp_footer(); ?>	
</body>
</html>
