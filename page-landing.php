<?php
/*
Template name: Landing Page
*/
/* get_header(); */  
get_template_part('header','landing');

?>
	<div id="wrapper">
	<img id="bg" src="/img/nuns-balling-sq.jpg" class="nuns" alt="nuns balling le dunk" />
		<div id="main-content" class="site-main light">
		<div class="content">

	

			<form  id="form_wrapper" class="form_wrapper" action="<?php echo get_stylesheet_directory_uri(); ?>/inc/landing/process.php" method="post">
			
				<div class="bigtxt active">
					<h1><a href="#" class="linkform advance" rel="firsttry" >Advance</a> or <a href="#" class="retreat">Retreat<img src="/img/fanga.png" class="fanga" alt="pixelated middle finger" /></a></h1>
				</div>
			
		
				<div  class="yourname firsttry" >
					<h3>What's your name?</h3>
				
					<input type="text" name="yourname" rel="welcome" /></input>
					<span class="error">This is an error</span>
					

					<input type="submit" class="linkform hidden" rel="welcome" value="go"></input>

				</div>
					
				<div class="nicetry yourname">
						<h3>We know how to curse, too, asshole.</h3>
						<h3>You alright tho.</h3>
						<h3>What's your name?</h3>
						<input type="text" name="cursename" /></input>
						<input type="submit" class="linkform hidden" rel="welcome" value="go"></input>
				</div>
				
				<div class="doublecurse">
						<h3>Oh, you fancy, huh?</h3>
						<input type="text" name="curseresp" /></input>
						<input type="submit" class="linkform hidden" rel="triplecurse" value="go"></input>
				</div>
				
				<div class="triplecurse emailform">
						<h3>Mm-hmm</h3>
						<img src="http://gifrific.com/wp-content/uploads/2012/09/Samuel-L-Jackson-Drinking-Sprite-Pulp-Fiction.gif" alt="sip" />
						<h4>Cool. We're gonna call you Stan.</h4>
						<h4>What's your email?</h4>
						<input type="text" name="pottyemail" rel="welcome" />
						
						<input type="submit" class="linkform hidden" rel="welcome" value="go"></input>
						<span class="error">not a valid email</span>
				</div>


				
				<div id="welcome" class="welcome" >
					<p>Welcome to Le Dunk <span id="nameresp"></span></p>
					<h1><a href="#" class="linkform advance" rel="arttype" >Advance</a> or <a href="#" class="retreat">Retreat<img src="/img/bunny-hiding.jpg" class="fanga bunny" alt="bunny hiding sad little face" /></a></h1>
				</div>
		
			
			
				<div id="arttypeform" class="arttype" >
					<div id="arttype">
						<div class="selection">
						<label for="tiger"><img src="http://dunk.site/img/products/tiger-icon.jpg" alt="Tiger" /></label>
						<input type="radio" name="tribe" id="tiger" value="tiger">
						</div>
						
<!--
						<div class="selection">
						<label for="boobs"><img src="http://dunk.site/img/products/cleave-icon.jpg" alt="Boobs" /></label>
						<input type="radio" name="tribe" id="boobs" value="boobs">	
						</div>
						
-->
						
						<div class="selection">
						<label for="donut"><img src="http://dunk.site/img/products/donut-icon.jpg" alt="Donut" /></label>
						<input type="radio" name="tribe" id="donut" value="donut">	
						</div>
						
						<div class="selection">
						<label for="tesla"><img src="http://dunk.site/img/products/car-icon.jpg" alt="Tesla" /></label>
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
					<h1>configuring site</h1>
				</div>
			
				<div class="clear"></div>
		</form>
			
	</div>
 </div>

		
</div>
	
</body>
</html>
