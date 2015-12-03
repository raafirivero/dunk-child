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

				<?php 
				
				/* the_content(); */ 
				// get product id from SKU
				$sku = 'LDK001';
				$int = wc_get_product_id_by_sku( $sku );				
				$product = get_product($int);

				?>
				
		<div id="preload">
	       	<img src="http://media.ledunk.com/img/ebbets/bldg-bw.jpg">
	       	<img src="http://media.ledunk.com/img/ebbets/ec-bk-cap.png">
       	</div>


<section id="slide-1" class="homeSlide">
<div class="bcg" 
	data-center="background-position: 50% 50%;" 
	data-anchor-target="#slide-1"
	data-top-bottom="background-position: 50% 75%;"
	>
	<div class="hsContainer">
		<div class="row toplogo">
		  		<div class="small-3 large-5 columns">&nbsp;</div>
				<div class="small-6 small-centered large-2 large-centered columns">
					<a href="/" class="toplink"><img src="http://media.ledunk.com/img/logo-curve-drop-retina.png" class="imgtop" alt="Le Dunk" /></a>
				</div>
				<div class="small-3 large-5 columns">&nbsp;</div>
		</div>

					
		<div class="row container top-buy" data-center="opacity: 1" data-top-bottom="opacity: 0">
			<div class="small-12 small-centered columns smallholder">
				<div class="large-6 medium-4 small-12 columns nothingshort">
					<h1>The best Brooklyn baseball cap in the world.</h1>
				</div>
				<div class="large-4 medium-4 small-12 small-centered columns ">
					<a href="/?add-to-cart=<?php echo $int;?>" class="button large alt-button gold buy-corner">Buy Now</a>
				</div>
			</div>
		</div>
					
	</div>
</div>

</section>

<section id="slide-2" class="homeSlide">
<div class="bcg"
	data-bottom-top="background-position: 50% -20px;" 
	data-center="background-position: 50% -50px;"
	data-top-bottom="background-position: 50% -80px;" 
	data-anchor-target="#slide-2">
	
	<div class="hsContainer">		
		<div class="twins-container">
			
			<div class="row">
			  <div class="hide-for-small large-2 columns">&nbsp;</div>
			  <div class="small-12 small-centered large-8 center columns">
			  	<img src="http://media.ledunk.com/img/ebbets/ebbets-crown.png" class="crowntitle" alt="The Ebbets Crown" />
			  </div>
			   <div class="hide-for-small large-2 columns">&nbsp;</div>
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
				<div class="small-10 large-4 columns small-centered large-uncentered center twins basq">
					<img src="http://media.ledunk.com/img/ebbets/pic-basq-bw.jpg" class="twinspic" alt="Jean-Michel Basquiat" />
					<div class="labeldiv"><span class="label linebg center">Jean-Michel Basquiat</span></div>
				</div>
				<div class="small-1 large-2 columns">&nbsp;</div>	
			</div>
		
		</div>
	</div>
</div>
</section>


<section id="slide-3" class="homeSlide" 
    	data-top-bottom="height: 540px;"
    	>
    <div class="bcg" 
    	data-anchor-target="#slide-3"
    	>
        <div class="hsContainer">
            <div class="hsContent" 
	            data-200-center="opacity: 1" 
	            data-top="opacity: 1" 
	            data-bottom-top="opacity: 0;"
	            data-anchor-target="#slide-2">
	            <div class="cap-clear" data-top-bottom="background-position: 50% -20px;" data-bottom-top="background-position: 50% 70px;">
	            	<img class="capimg" src="http://media.ledunk.com/img/ebbets/ec-bk-cap.png">
	            </div>
            </div>
        </div>
    </div>
</section>


		    
<section id="slide-4" class="homeSlide">
<div class="bcg" 
	data-center="background-position: 50% 0px;" 
	data-top-bottom="background-position: 50% -100px;" 
	data-bottom-top="background-position: 50% 100px;" data-anchor-target="#slide-3"
	>
	<div class="hsContainer">
		<div class="hsContent" 
			data-bottom-top="opacity: 0;" 
			data-center="opacity: 1" 
			data-anchor-target="#slide-4"
			>
	
			<div class="row">
				<div class="hide-for-small large-2 columns">&nbsp;</div>
				<div class="small-12 large-8 small-centered columns eb-copy">
				<p><span class="drop w">W</span>e’ve spent a year perfecting every aspect of this cap. The custom lettering was inspired by the original Brooklyn Dodgers insignia, but we added the sexy curves. The crown on the side takes a cue from <a href="http://www.google.com/images?q=basquiat" target="_blank">Jean-Michel Basquiat</a>, a BK native, and 42 is for the most iconic athlete ever to play in the borough, <a href="http://en.wikipedia.org/wiki/Jackie_Robinson" target="_blank">Jackie Robinson</a>. We call it The Ebbets Crown. And it is the best Brooklyn snapback in the world.	</p>
			
			<p>You’re going to love wearing this hat.</p>
				</div>
				<div class="hide-for-small large-2 columns">&nbsp;</div>
			</div>
			
			<div class="row">
				<div class="hide-for-small large-2 columns">&nbsp;</div>
				<div class="small-12 large-8 small-centered columns">
						
					<div id="ebbets-buy" class="ux_block ">
						<div class="row container ebbets-buy">
							<div class="large-6 columns ">
								<span class="price"><?php echo $product->get_price_html(); ?></span>
							</div>
							<div class="large-6 columns ">
								<a href="/?add-to-cart=<?php echo $int;?>" class="button large alt-button gold">Buy Now</a>
							</div>
						</div>
					</div>


				</div>
				<div class="hide-for-small large-2 columns">&nbsp;</div>
			</div>
		
			<div class="row">
				<div class="small-2 columns">&nbsp;</div>
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
				<div class="small-2 columns">&nbsp;</div>
			</div>
		
		</div>
	</div>
</div>
</section>
			
<section id="slide-5" class="homeSlide">
<div class="bcg" 
	data-top-bottom="background-position: 50% -40px;" 
	data-bottom-top="background-position: 50% 200px;" 
	data-anchor-target="#slide-5"
	>
	<div class="hsContainer">

		<div class="row bottomrow" 
			data-center="opacity: 1" 
			data-bottom-top="opacity: 0"
			>
				
				<h4 class="center"><span class="label linebg center">Dedicated to Brooklyn Streets</span></span></h4>
				
				
				
				<div class="row">
					<div class="small-1 large-2 columns">&nbsp;</div>
					<div class="small-10 large-8 small-centered columns brownsville">
						<p>The Langston Hughes Tower, one of the tallest public housing projects in Brooklyn, stands in the Brownsville neighborhood. We've reprinted a line from one of Hughes’ famous poems on the underside of the cap.</p>
						
	
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
					<div class="small-1 large-2 columns">&nbsp;</div>
				</div>
			</div>
		
		<h5 class="spidertext"><span>&copy; <strong>Le Dunk</strong> - "For hardwood poets. And donut lovers."</span></h5>
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
