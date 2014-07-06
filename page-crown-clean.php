<?php
/*
Template name: Crown Clean
*/
/* get_header(); */  
get_template_part('header','crown');

?>
	<div id="wrapper">
	<!-- <img id="bg" src="http://media.ledunk.com/img/products/smokeloop-neue.gif" class="smoke" alt="smoke bg le dunk" /> -->
		<div id="main-content" class="site-main light">
		<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php /* the_content(); */ ?>
				
		<div id="preload">
	       	<img src="/img/ebbets/bldg-bw.jpg">
	       	<img src="/img/ebbets/ec-graphic-bg.jpg">
	       	<img src="/img/ebbets/bg-ebbets.png">
	       	<img src="/img/ebbets/vandyke.jpg">
	       	<img src="/img/ebbets/ec-graphic-cap.png">
       	</div>


<section id="slide-1" class="homeSlide">
<div class="bcg" 
	data-center="background-position: 50% -50px;"
	data-top-bottom="background-position: 50% -0px;" 
	data-anchor-target="#slide-1">
	
	<div class="hsContainer">
		<div class="row">
		  <div class="small-3 small-centered columns"><img src="/img/logo-curve-drop.png" class="imgtop" alt="Le Dunk" /></div>
		</div>
		<div class="row">
		  <div class="small-6 small-centered columns"><img src="/img/ebbets/ebbets-crown.png" class="crowntitle" alt="The Ebbets Crown" /></div>
		</div>

		<h4 class="center"><span class="label linebg center">Inspired by Brooklyn Legends</span></span></h4>
		        	

		<div class="row" data-center="bottom: 150px; opacity: 1" data-top-bottom="bottom: 120px; opacity: 0">
		<div class="small-2 columns">&nbsp;</div>
			<div class="small-4 columns center twins">
				<img src="/img/ebbets/pic-jr-bw.jpg" class="twinspic" alt="Jackie Robinson" />
				<span class="label linebg center">Jackie Robinson</span>
			</div>
			<div class="small-4 columns center twins">
				<img src="/img/ebbets/pic-basq-bw.jpg" class="twinspic" alt="Jean-Michel Basquiat" />
				<span class="label linebg center">Jean-Michel Basquiat</span>
			</div>
		<div class="small-2 columns">&nbsp;</div>
		
		
		</div>
	</div>
</div>
</section>

<section id="slide-2" class="homeSlide" 
		data-bottom-top="height: 20px;" 
		data-50-center="height: 520px;"
    	data-top-bottom="height: 540px;"
    	>
    <div class="bcg" 
    	data-anchor-target="#slide-2"
    	>
        <div class="hsContainer">
            <div class="hsContent" 
	            data-200-center="opacity: 1" 
	            data-top="opacity: 1" 
	            data-bottom-top="opacity: 0;"
	            data-anchor-target="#slide-2">
	            <div class="cap-clear" data-center="background-position: 70% -20px;" data-top-bottom="background-position: 70% -40px;" data-bottom-top="background-position: 50% 20px;">
	            	<img src="/img/ebbets/ec-graphic-cap.png">
	            </div>
            </div>
        </div>
    </div>
</section>


		    
<section id="slide-3" class="homeSlide">
<div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target="#slide-3">
	<div class="hsContainer">
		<div class="hsContent" data-bottom-top="opacity: 0;" data-center="opacity: 1" data-anchor-target="#slide-3">
	
			<div class="row">
				<div class="small-12 large-8 small-centered columns eb-copy">
				We’ve spent a year perfecting every aspect of this cap and believe it is the best Brooklyn snapback in the world. The custom BK lettering was inspired by the original Dodgers insignia, but we added sexy curves. The crown on the side takes a cue from the art of Jean-Michel Basquiat, a Brooklyn native, and 42 is for the most iconic athlete ever to play in the borough, Jackie Robinson.<br />
			
			You’re going to love wearing this hat.
				</div>
			</div>
			
			<?php echo do_shortcode( '[block id="ebbets-buy"]' ); ?>
		
			<div class="row">
				
				<div class="small-8 small-centered columns">
					<hr />
					<img src="/img/ebbets/caprow.png" alt="other cap pics" />
					<hr />
				</div>
			</div>
		
		</div>
	</div>
</div>
</section>
			
<section id="slide-4" class="homeSlide">
<div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target="#slide-4">
	<div class="hsContainer">
		<div >
		<div class="row">
				
				<div class="small-8 small-centered columns">
				<p>Brownsville, Brooklyn, is the area with the highest percentage of public housing residents in the country. Rising above the neighborhood, the Langston Hughes Apartments stand at 22 stories. A line from one of Hughes’ famous poems is printed on the underside of the cap.</p>

<p>I’ve known rivers:<br>
Ancient, dusky rivers.</p>

<p>My soul has grown deep like the rivers.</p>
				<h5 class="spidertext">&copy; Le Dunk - Brooklyn, NYC - "All Day Son."</h5>
				</div>
			</div>
		
		</div>
	</div>
</div>
</section>

			
			<?php endwhile; // end of the loop. ?>
			
			</div>
			

	</div>
 </div>	
</div>
<?php wp_footer(); ?>
<script type='text/javascript' src='https://js.stripe.com/v1/?ver=1.0'></script>
</body>
</html>
