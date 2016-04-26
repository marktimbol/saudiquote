<?php
get_header(); ?>

<div class="container" id="main-content">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h3 class="page-title wow fadeInUp"><?php printf( __( '<small>Search Results for:</small> %s', 'twentythirteen' ), get_search_query() ); ?></h3>
		</div>
	</div>
	<div class="row">
		<div class="large-8 medium-8 small-12 columns">
			<div class="main-content">
			<?php
				if( have_posts() ): while( have_posts() ): the_post();
				?>
					<article>

						<?php 
							if( has_post_thumbnail() ) {	
						?>
								<div class="small-12 medium-3 large-3 columns">
									<?php
										the_post_thumbnail( 'full', array('class' => 'th') );
									?>
								</div>

								<div class="small-12 medium-9 large-9 columns">
						<?php } else { ?> 
							<div class="small-12 medium-12 large-12 columns">
						<?php } ?>
							<h3><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							<span class="entry-date"><?php echo get_the_date(); ?></span>
							<?php the_excerpt(); ?>

							<span class='st_linkedin_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
							<span st_via='saudiquote' st_username='saudiquote' class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
							<span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
						</div>				

													
					</article>	
				<?php
					endwhile;
				else: 
				?>
					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfourteen' ); ?></p>
					<?php get_search_form(); ?>
			<?php
				endif;
			?>

			<div class="clearfix"></div>

	     	<?php 
				if(function_exists('wp_pagenavi')) {
					wp_pagenavi();
				}
			?>

			</div>
		</div>
		<?php get_sidebar(); ?>		
	</div>
</div>

<?php get_footer(); ?>