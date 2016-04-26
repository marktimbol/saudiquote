<?php 
/* 
*	Template Name: Blog Page
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
					'cat' => get_field('category_id'),
					'posts_per_page' => -1,
					'orderby' => 'DATE',
					'order' => 'DESC'
					);
				query_posts( $args );

				if( have_posts() ): while( have_posts() ): the_post();?>
					<article>
						<div class="small-12 medium-3 large-3 columns">
							<?php
								if( has_post_thumbnail() ) {
									the_post_thumbnail( 'full', array('class' => 'th') );
								}
							?>
						</div>
					
						<div class="small-12 medium-9 large-9 columns">
							<h3><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							<span class="entry-date"><?php echo get_the_date(); ?></span>
							<?php the_excerpt(); ?>

							<span class='st_linkedin_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
							<span st_via='saudiquote' st_username='saudiquote' class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
							<span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
						</div>				

													
					</article>	

					<div class="clearfix"></div>


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