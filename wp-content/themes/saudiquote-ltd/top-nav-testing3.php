		<nav class="top-nav">
			<div class="row">
				<div class="lang">
					<?=get_search_form(); ?>
					<a href="http://saudiquote.com">العربية</a>
				</div>
				<?php /*				
				<div class="small-12 medium-12 large-12 columns">
					<div class="small-7 medium-7 large-7 columns">
						<ul>
							<li>
								<a href="<?=get_bloginfo('url');?>">Home</a>
							</li>

							<li>
								<a href="<?=get_permalink(1611);?>">Contact Us</a>
							</li>
						</ul>
					</div>	

					<div class="small-5 medium-5 large-5 columns  ">
								
					</div>
				</div>
				*/ ?>
			</div>
		</nav>	

		<div id="wrapper">
			<header>
				<div class="container">
					<div class="row">
						<div class="small-12 medium-5 large-5 columns ">
							<h1 class="logo"><a href="<?=get_bloginfo('url');?>"><img src="<?=get_bloginfo('stylesheet_directory');?>/images/logo.png" alt="SaudiQuote" title="SaudiQuote" /></a></h1>
						</div>

						<div class="small-12 medium-7 large-7 columns">
							<div class="login-button">
								<p>Login to your account</p>
								<ul>
									<li><a href="https://secure.saudiquote.com/" target="_blank" class="button tiny radius individual">Individual</a></li>
									<li><a href="<?=get_permalink(2824);?>" class="button tiny radius corporate">Corporate</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="show-for-small-only">
				<div class="hamburger-icon">
					<a href="#menu"><i class="fa fa-bars fa-3"></i></a> 
					<a href="http://saudiquote.com" class="login">العربية</a>
				</div>
				
				<nav id="menu">
					<?php wp_nav_menu( array('menu' => 'MainMenu' )); ?>
					<?php //include('menu-mobile-en.php'); ?>
				</nav>
				
			</div>

			<nav class="main-nav show-for-medium-up">	
				<div class="row">	
					<?php wp_nav_menu( array('menu' => 'MainMenu' )); ?>
					<?php //include('menu-en.php');?>
				</div>
			</nav>

			<div id="main-slideshow" style="height: 356px;">
				<div class="row">
					<div class="fadein">
						
						<img src="<?=get_bloginfo('stylesheet_directory');?>/images/new/slide1.jpg" alt="Slide 1" />
						<img src="<?=get_bloginfo('stylesheet_directory');?>/images/new/slide3.jpg" alt="Slide 3" />
						<img src="<?=get_bloginfo('stylesheet_directory');?>/images/new/slide4.jpg" alt="Slide 4" />
					
					</div>
				</div>
			</div>

			<div id="help-you">
				<div class="row help-you">
					<div class="small-12 medium-9 large-9 columns">
						<div class="help-content">
							<div class="help-text">
								<h5>How May We Help You?</h5>
							</div>
							<form method="POST">
								<select id="form-select">
									<option value="">I want to...</option>
									<option value="<?=get_permalink(1109);?>">Open a live account</option>
									<option value="<?=get_permalink(1107);?>">Open a demo account</option>
									<option value="<?=get_permalink(1071);?>">Know more about SaudiQuote</option>
									<option value="<?=get_permalink(2059);?>">Know more about funds deposit</option>
									<option value="<?=get_permalink(2293);?>">Know the account opening process</option>
									<option value="<?=get_permalink(1611);?>">Request a call</option>
								</select>
			            		<input type="submit" name="submit" class="button theme radius tiny" value="Go" />
							</form>
						</div>
					</div>
					<div class="small-3 medium-3 large-3 columns show-for-medium-up">
						<div class="social-icons">
							<a href="https://www.facebook.com/SaudiQuote" target="_blank" class="facebook-square"><i class="fa fa-facebook-square fa-2x"></i></a>
							<a href="https://twitter.com/saudiquote" target="_blank" class="twitter-square"><i class="fa fa-twitter-square fa-2x"></i></a>
							<a href="http://linkd.in/13vm0bo" target="_blank" class="linkedin-square"><i class="fa fa-linkedin-square fa-2x"></i></a>
						</div>
					</div>
				</div>
			</div>