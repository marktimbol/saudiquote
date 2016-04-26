<?php

//add_filter('show_admin_bar', '__return_false');

/******************************/
/*
/*		Theme Customization
/*
/******************************/
add_theme_support('post-thumbnails');


/******************************/
/*
/*		Register Menus
/*
/******************************/
if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'main-menu', 'Main Menu' );
}

if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'top-nav', 'Top Nav' );
}

add_action('wp_head', 'show_template');
function show_template() {
    global $template;
    //echo basename($template);
}

function show_feeds( $atts ) {
		
	$atts = shortcode_atts(
		array(
			'lang' => 'ar',
			'desc' => 0,
			'count' => 2
		), $atts );

	$html = '';
	$cat = '';

	if( $atts['lang'] == 'en' ) {
	
		$cat = 54;
	
	} elseif( $atts['lang'] == 'ar') {
	
		$cat = 55;
	}

	$args = array(
		'cat' => $cat,
		'posts_per_page' => $atts['count'],
		'orderby' => 'DATE',
		'order' => 'DESC'
		);
	query_posts( $args );

	if( have_posts() ): while( have_posts() ): the_post();
		if( has_post_thumbnail() ) {
			$thumbnail = get_the_post_thumbnail( $post->ID, 'full', array('class' => 'th') );
		}
		$html .= '<article style="margin: 5px 0px; padding: 5px 0px 0px 0px;">
			<div class="small-12 medium-12 large-12 columns">
				<a href="'.get_the_permalink().'" alt="'. get_the_title() .'">'.$thumbnail.'</a>
				<h5 class="text-center" style="font-size: 17px; margin-bottom: 12px; margin-top: 10px;"><a href="'.get_the_permalink().'" alt="'. get_the_title() .'">'.get_the_title().'</a></h5>
			</div>			
										
		</article>	

		<div class="clearfix"></div>';
	endwhile;
	endif;	

	return $html;
}

add_shortcode( 'show_feed', 'show_feeds' );

function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );