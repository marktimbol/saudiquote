<?php 
/**
*	Template Name: Homepage Testing
**/

get_header('testing'); 

	wp_reset_query();
	
	echo '<div class="homepage">';
	the_content();
	echo '</div>';
	

get_footer(); ?>