<?php 
/*
* Template Name: Fullpage
*/

get_header(); ?>

<div class="container" id="main-content">
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
		<div class="large-12 medium-12 small-12 columns">
			<div class="main-content">
			<?php
				if( have_posts() ): while( have_posts() ): the_post();
					the_content(); 
				endwhile;
				endif;
			?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>