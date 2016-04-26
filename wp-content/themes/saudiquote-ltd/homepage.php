<?php 
/**
*	Template Name: Homepage
**/

get_header(); 

	wp_reset_query();
	
	echo '<div class="homepage">';
	the_content();
	echo '</div>';
	

get_footer(); ?>