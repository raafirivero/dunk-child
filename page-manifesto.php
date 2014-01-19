<?php
/*
Template name: Manifesto
*/
/* get_header(); */  
get_template_part('header','manifesto');

?>
	<div id="wrapper">
		<div id="main-content" class="site-main light">
		<div class="content">

		<div class="row">
		<div class="large-2 columns">&nbsp;</div>
			<div class="large-8 columns">
			
			<img src="/img/logo-curve.png" class="logocurve" alt="le dunk curve white" />
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
			
			<?php endwhile; // end of the loop. ?>
			</div>
		<div class="large-2 columns">&nbsp;</div>
		</div>	
	</div>
 </div>	
</div>
	
</body>
</html>
