<?php get_header(); ?>

<div class="container" id="main-content">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<nav class="breadcrumbs">','</nav>');
			} 

			$category = get_the_category(); 
			
			?>			
			<h2 class="page-title wow fadeInUp "><?php echo $category[0]->cat_name; ?></h2>

			<div class="clearfix"></div>
		</div>
	</div>
	<div class="row">
		<div class="large-8 medium-8 small-12 columns">
			<div class="main-content">
			<?php
				if( have_posts() ): while( have_posts() ): the_post();	?>			
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