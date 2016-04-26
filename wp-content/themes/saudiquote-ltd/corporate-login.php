<?php 
/*
* Template Name: Corporate Login
*/

get_header(); ?>


<div class="row">
	<div class="large-12 medium-12 small-12 columns">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<nav class="breadcrumbs">','</nav>');
		} 	
		?>			
		<h1 class="page-title wow fadeInUp large-12 medium-12 small-12 columns"><?php the_title(); ?></h1>
	</div>
</div>
<div class="row">
	
	<div class="corporate-login">
	<?php
		if( have_posts() ): while( have_posts() ): the_post();
			the_content(); 
		endwhile;
		endif;
	?>
	</div>
	
</div>



<?php get_footer(); ?>