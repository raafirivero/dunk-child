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
	       	<img src="http://media.ledunk.com/img/ebbets/bldg-bw.jpg">
	       	<img src="http://media.ledunk.com/img/ebbets/ec-bk-cap.png">
       	</div>


<section id="slide-1" class="homeSlide">
<div class="bcg" 
	data-center="background-position: 50% -50px;"
	data-top-bottom="background-position: 50% -0px;" 
	data-anchor-target="#slide-1">
	
	<div class="hsContainer">
		<div class="row">
		  <div class="small-5 large-3 small-centered center columns">
		  	<img src="http://media.ledunk.com/img/logo-curve-drop.png" class="imgtop" alt="Le Dunk" />
		  </div>
		</div>
		<div class="row">
		  <div class="small-12 large-7 small-centered center columns">
		  	<img src="http://media.ledunk.com/img/ebbets/ebbets-crown.png" class="crowntitle" alt="The Ebbets Crown" />
		  </div>
		</div>
		
		<div class="row">
			<h4 class="center"><span class="label linebg center">Inspired by Brooklyn Legends</span></span></h4>
		</div>    	

		<div class="row heroes" data-center="bottom: 150px; opacity: 1" data-top-bottom="bottom: 120px; opacity: 0">
			<div class="small-1 large-2 columns">&nbsp;</div>
			<div class="small-10 large-4 columns small-centered large-uncentered center twins">
				<img src="http://media.ledunk.com/img/ebbets/pic-jr-bw.jpg" class="twinspic" alt="Jackie Robinson" />
				<div class="labeldiv"><span class="label linebg center">Jackie Robinson</span></div>
			</div>
			<div class="small-10 large-4 columns small-centered large-uncentered center twins">
				<img src="http://media.ledunk.com/img/ebbets/pic-basq-bw.jpg" class="twinspic" alt="Jean-Michel Basquiat" />
				<div class="labeldiv"><span class="label linebg center">Jean-Michel Basquiat</span></div>
			</div>		
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
	            <div class="cap-clear" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -60px;" data-bottom-top="background-position: 50% 80px;">
	            	<img class="capimg" src="http://media.ledunk.com/img/ebbets/ec-bk-cap.png">
	            </div>
            </div>
        </div>
    </div>
</section>


		    
<section id="slide-3" class="homeSlide">
<div class="bcg" 
	data-center="background-position: 50% 0px;" 
	data-top-bottom="background-position: 50% -100px;" 
	data-bottom-top="background-position: 50% 100px;" data-anchor-target="#slide-3"
	>
	<div class="hsContainer">
		<div class="hsContent" 
			data-bottom-top="opacity: 0;" 
			data-center="opacity: 1" 
			data-anchor-target="#slide-3"
			>
	
			<div class="row">
				<div class="small-12 large-8 small-centered columns eb-copy">
				<p><span class="drop w">W</span>e’ve spent a year perfecting every aspect of this cap and believe it is the best Brooklyn snapback in the world. The custom lettering was inspired by the original Dodgers insignia, but we added the sexy curves. The crown on the side takes a cue from the art of <a href="http://en.wikipedia.org/wiki/Jean-Michel_Basquiat">Jean-Michel Basquiat</a>, a BK native, and 42 is for the most iconic athlete ever to play in the borough, <a href="http://en.wikipedia.org/wiki/Jackie_Robinson">Jackie Robinson</a>.</p>
			
			<p>You’re going to love wearing this hat.</p>
				</div>
			</div>
			
			<div class="row">
				<div class="small-12 large-8 small-centered columns">
				<?php echo do_shortcode( '[block id="ebbets-buy"]' ); ?>
				</div>
			</div>
		
			<div class="row">
				
				<div class="small-8 small-centered columns caprow" 
					data-center="opacity: 1" 
					data--180-bottom="opacity: 1"
					data-top-bottom="opacity: 0" 
					data-bottom-top="opacity: 0"
					>
					<hr />
					<img class="caprow-pic" src="http://media.ledunk.com/img/ebbets/caprow-a.jpg" alt="cap pics" />
					<img class="caprow-pic" src="http://media.ledunk.com/img/ebbets/caprow-b.jpg" alt="cap pics" />
					<img class="caprow-pic" src="http://media.ledunk.com/img/ebbets/caprow-c.jpg" alt="cap pics" />
					<hr />
				</div>
			</div>
		
		</div>
	</div>
</div>
</section>
			
<section id="slide-4" class="homeSlide">
<div class="bcg" 
	data-center="background-position: 50% 0px;" 
	data-top-bottom="background-position: 50% -40px;" 
	data-bottom-top="background-position: 50% 200px;" 
	data-anchor-target="#slide-4"
	>
	<div class="hsContainer">

		<div class="row bottomrow" 
			data-center="opacity: 1" 
			data-bottom-top="opacity: 0"
			>
				
				<h4 class="center"><span class="label linebg center">Dedicated to Brooklyn Streets</span></span></h4>
				
				<div class="small-10 large-8 small-centered columns brownsville">
				<p>Brownsville, Brooklyn is the area with the highest percentage of public housing residents in the country. Rising above the neighborhood, the Langston Hughes Apartments stand at 22 stories. A line from one of Hughes’ famous poems is printed on the underside of the cap.</p>

				<blockquote>
					<p class="serif">I’ve known rivers:<br>
					Ancient, dusky rivers.</p>
					
					<p class="serif">My soul has grown deep like the rivers.</p>
				</blockquote>
			
					<div class="sealdiv">
					<a href="/shop/" class="seallink center">
						<img class="seal" src="http://media.ledunk.com/img/sticker-blog.png" width="160" height="160" alt="le dunk seal" 
							data-bottom-top="opacity: 0;" 
							data--106-bottom="opacity: 1"
							/>
					</a>
					</div>
				</div>
			</div>
		
		<h5 class="spidertext"><span>&copy; Le Dunk - Brooklyn, NYC - "All Day Son."</span></h5>
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
