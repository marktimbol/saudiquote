<?php 
/* 
	Template Name: Contact Us
*/
get_header(); ?>

<div class="container" id="main-content">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h2 class="page-title wow fadeInUp"><?php the_title(); ?>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="main-content contact-us">
				<?php if( ICL_LANGUAGE_CODE == 'ar' ) { ?>
					<div class="small-12 medium-4 large-4 columns omega">
						<h3>معلومات الإتصال</h3>
						<ul>
							<?php /*
							<li class="fa fa-phone">
								<span>+971 4 551 9718</span>
							</li>	
							*/ ?>						
							<li class="fa fa-phone">
								<span>+44 20 3318 5935</span>
							</li>
						
							<li class="fa fa-phone">
								<span>+64 6 824 3922</span>
							</li>	
										
							<li class="fa fa-envelope-o">
								<span><a href="mailto:info@saudiquote.com">info@saudiquote.com</a></span>
							</li>
							<li class="fa fa-globe">
								<span><a href="http://www.saudiquote.com">www.saudiquote.com</a></span>
							</li>
							<li class="fa fa-map-marker">
								<span style="text-align: right;">
								الطابق ١، شارع ديكنس ١، نابير ٤١١٠، نيو زيلندا
								</span>
							</li>
						</ul>
					
					</div>

					<div class="small-12 medium-8 large-8 columns">
						<h3>للمراسلة</h3>
						<?php echo do_shortcode('[gravityform id="2" name="Contact Us - Arabic" title="false" description="false"]') ?>
					</div>
				<?php } else { ?>
					<div class="small-12 medium-4 large-4 columns alpha">
						<h3>Contact Info</h3>
						<ul>
							<?php /*
							<li class="fa fa-phone">
								<span>+971 4 551 9718</span>
							</li>	
							*/ ?>						
							<li class="fa fa-phone">
								<span>+44 20 3318 5935</span>
							</li>
					
							<li class="fa fa-phone">
								<span>+64 6 824 3922</span>
							</li>	
									
							<li class="fa fa-envelope-o">
								<span><a href="mailto:info@saudiquote.com">info@saudiquote.com</a></span>
							</li>
							<li class="fa fa-globe">
								<span><a href="http://www.saudiquote.com">www.saudiquote.com</a></span>
							</li>
							<li class="fa fa-map-marker">
								<span>
								Level 1, 1 Dickens Street<br />Napier 4110, New Zealand
								</span>
							</li>
						</ul>
					
					</div>

					<div class="small-12 medium-8 large-8 columns">
						<h3>Leave us a Message</h3>
						<?php echo do_shortcode('[gravityform id="1" name="Contact Us" title="false" description="false" ajax="true"]'); ?>
					</div>
				<?php } ?>
			</div>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>