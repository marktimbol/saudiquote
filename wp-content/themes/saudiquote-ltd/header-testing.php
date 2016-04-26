<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?php
			global $page, $paged;
			
			wp_title( '|', true, 'right' );
			
			//bloginfo( 'name' );

		?></title>		
		
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C900%7CRoboto%7CRoboto+Slab%3A300%2C400&#038;ver=3.7.1" type="text/css" media="all" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/css/normalize.css" />
		<link rel="icon" type="image/png" href="<?=get_bloginfo('stylesheet_directory');?>/favicon.ico">
		<meta name="robots" content="index, follow" />
		<meta name="author" content="SaudiQuote" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/css/foundation.min.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/css/faq.css" />
		<link type="text/css" rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/css/jquery.mmenu.all.css" />
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/style.css" />	
		<link rel="stylesheet" href="<?=get_bloginfo('stylesheet_directory');?>/app.css" />
		
		<script src="<?=get_bloginfo('stylesheet_directory');?>/js/jquery.js"></script>
		<script src="<?=get_bloginfo('stylesheet_directory');?>/js/modernizr.js"></script>


		<?php wp_head(); ?>
	</head>
	<body>
	

		<a href="https://plus.google.com/+SaudiQuote/posts" rel="publisher"></a>

		<?php if( ICL_LANGUAGE_CODE == 'ar' ) {
			include('top-nav-ar.php');
		} else {
			include('top-nav-testing3.php');
		} ?>