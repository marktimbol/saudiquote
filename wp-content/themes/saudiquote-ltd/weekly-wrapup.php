<?php 
/* 
*	Template Name: Weekly Wrapup
*/
get_header(); ?>

<div class="container" id="main-content">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h1 class="page-title wow fadeInUp large-12 medium-12 small-12 columns"><?php the_title(); ?></h1>
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<nav class="breadcrumbs">','</nav>');
			} 	
			?>
		</div>
	</div>
	<div class="row">
		<div class="large-8 medium-8 small-12 columns">
			<div class="main-content">
			<?php
				$args = array(
					'cat' => 50,
					'posts_per_page' => -1,
					'orderby' => 'DATE',
					'order' => 'DESC'
					);
				query_posts( $args );

				if( have_posts() ): while( have_posts() ): the_post();?>
					<article>
						<h3><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<span class="entry-date"><?php echo get_the_date(); ?></span>
						<?php the_excerpt(); ?>

						<span class='st_linkedin_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
						<span st_via='saudiquote' st_username='saudiquote' class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
						<span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
													
					</article>	


				<?php		
				endwhile;
				endif;
			?>
			</div>
		</div>
		<?php get_sidebar(); ?>		
	</div>
</div>


<?php get_footer(); ?>