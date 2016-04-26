<?php 
/* 
	Template Name: Account Opening
*/
get_header(); 
echo $_ENV['DB_NAME'];
?>

<div class="container" id="main-content">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<nav class="breadcrumbs">','</nav>');
			} 	
			?>				
			<h1 class="page-title wow fadeInUp"><?php the_title(); ?></h1>			
		</div>
	</div>
	<div class="row">
		<?php if( ICL_LANGUAGE_CODE == 'ar' ) { ?>
			<div class="small-12 medium-12 large-12 columns">
				<section class="account-opening section1" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section1-ar.jpg)  no-repeat  center top ;">
					<div class="time wow fadeInDown"><span dir="">ص ٩:٠٠  </span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<div class="box-content wow ">
								<h3>التقي بعبدالله</h3>
								<p>عبدالله كان يتصفح موقع <strong>"SaudiQuote"</strong> وقرر فتح حساب حقيقي</p>
							</div>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<div class="screenshot left  wow ">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section1-screenshot-bg_ar.png" class="img-shadow" />
							</div>
						</div>
					</div>
				</section>

				<section class="account-opening section2">
					<div class="time wow fadeInUp"><span>ص ٩:٠٥</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<figure class="left wow ">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section2-sarah-ar.png" />
								<figcaption>
									<h3>وهذه هي سارة</h3>
									<p>فهي جزء من فريق الدعم عند <strong>"SaudiQuote"</strong></p>
								</figcaption>
							</figure>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<div class="left">
								<p class="lead">
									سارة تتلقى طلب عبدالله، و ترسل لعبدالله إشعاراً
								</p>

								<table class="gmail_table wow ">
									<tbody>
										<tr>
											<td><img class="p-gmail_ico" src="<?=get_bloginfo('stylesheet_directory');?>/images/p-gmail.png" alt="">تسجيل لحساب جديد: عبدالله الحمد</td>
											<td><b>ص ٩:١٠</b></td>
										</tr>
									</tbody>
								</table>

							</div>

						</div>
					</div>
				</section>

				<section class="account-opening section3" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section3-ar.jpg)  no-repeat  center top ;">
					<div class="time wow fadeInUp"><span>ص ٩:١٠</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<div class="box-content wow ">
								<p>سارة تبدأ بعملية الموافقة على الحساب الذي يستغرق ١-٢ أيام من العمل.</p>
							</div>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							
						</div>
					</div>
				</section>	

				<section class="account-opening section4">
					<div class="time wow fadeInUp"><span>اليوم التالي  &nbsp; &nbsp; &nbsp; م ١:٠٠</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<figure class="left wow ">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section4-abdulla-ar.png" />
								<figcaption>
									<h3>عبدالله</h3>
								</figcaption>
							</figure>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<div>
								<p class="lead">
									عبدالله يتلقى رسالة تأكيد عن الموافقة على فتح الحساب على بريده الالكتروني التي تتضمن تفاصيل تسجيل الدخول الى غرفة التداول.
								</p>


								<p class="lead">
									غرفة التداول تمكنه من تحميل منصة MT4.
								</p>	

								<div class=" ">
									<img src="https://saudiquote.com/wp-content/uploads/2014/12/Download-MetaTrader-4-Screenshot-Arabic.png" class="img-shadow" />
								</div>														

								<br /><br /><br />
								<p class="lead">
									وتفاصيل حساب التمويل
								</p>		

								<div class="">
									<img src="https://saudiquote.com/wp-content/uploads/2014/12/Deposit-Funds-Screenshot-Arabic.png" class="img-shadow" />
								</div>
							</div>

						</div>
					</div>
				</section>				

				<section class="account-opening section5" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section5-ar.jpg)  no-repeat  center top ;">
					<div class="time wow fadeInUp"><span>عندما يتم تمويل الحساب</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<div class="box-content wow ">
								<p>عندما اودع في حسابه، قام باستلام بريد الكتروني يحتوي على تفاصيل الدخول الى منصة MT4.</p>
								<p>وهو الآن جاهز للتداول</p>
							</div>
						</div>

						<div class="small-12 medium-7 large-7 columns">

						</div>					
					</div>
				</section>

				<section class="account-opening section6">
					<div class="time wow fadeInUp"><span>م ٢:٠٠</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<figure class="left wow ">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section6-abdulla-ar.png" />
								<figcaption>
									<h3>لدى عبدالله سؤال</h3>
									<p>يذهب إلى قسم "التواصل" في موقع <strong>"SaudiQuote"</strong> و تتم حل جميع استفساراته.</p>
								</figcaption>
							</figure>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/contact-us-ar.png"  class="img-shadow" />
						</div>
					</div>
				</section>	

				<section class="account-opening section7" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section7-ar.jpg)  no-repeat  center top ;">
					<div class="time"><span>م ٢:٠٥</span></div>
					<div class="row">
						
						<div class="small-12 medium-7 large-7 columns">
							<div class="abdulla-satisfied wow ">
								<h2>عبدالله</h2>
								<h2>راضٍ عن خدماتنا</h2>
							</div>
						</div>

						<div class="small-12 medium-5 large-5 columns">
							
						</div>
					</div>
				</section>			

			</div>
		<?php } else { ?>
			<div class="small-12 medium-12 large-12 columns">
				<section class="account-opening section1" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section1.jpg)  no-repeat  center top ;">
					<div class="time wow fadeInDown"><span>9:00 am</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<div class="box-content wow fadeInLeft">
								<h3>Meet Abdullah</h3>
								<p>Abdullah has been browsing through <strong>"SaudiQuote"</strong> website and decided to open a live account.</p>
							</div>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<div class="screenshot right  wow fadeInRight">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section1-screenshot-bg.png" class="img-shadow" />
							</div>
						</div>
					</div>
				</section>

				<section class="account-opening section2">
					<div class="time wow fadeInUp"><span>9:05 am</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<figure class="left wow fadeInLeft">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section2-sarah.png" />
								<figcaption>
									<h3>This is Sara</h3>
									<p>She is part of the <strong>"SaudiQuote"</strong> Support Team</p>
								</figcaption>
							</figure>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<div class="right">
								<p class="lead">
									Sara receives Abdullah’s request, and sends Abdullah a notiﬁcation
								</p>

								<table class="gmail_table wow fadeInRight">
									<tbody>
										<tr>
											<td><img class="p-gmail_ico" src="<?=get_bloginfo('stylesheet_directory');?>/images/p-gmail.png" alt=""> New live account registration: <b>Abdullah Al Hammad</b></td>
											<td><b>9:10 am</b></td>
										</tr>
									</tbody>
								</table>

							</div>

						</div>
					</div>
				</section>

				<section class="account-opening section3" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section3.jpg)  no-repeat  center top ;">
					<div class="time wow fadeInUp"><span>9:10 am</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<div class="box-content wow fadeInLeft">
								<p>Sara begins with the account approval process which usually takes 1 - 2 working days.</p>
							</div>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							
						</div>
					</div>
				</section>	

				<section class="account-opening section4">
					<div class="time wow fadeInUp"><span>Next Day &nbsp; &nbsp; 1:00 pm</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<figure class="left wow fadeInLeft">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section4-abdulla.png" />
								<figcaption>
									<h3>Abdullah</h3>
								</figcaption>
							</figure>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<div class="">
								<p class="lead">
									Abdullah's account is approved. He receives his Trader's Room login details where:
								</p>

								<p class="lead">
									He can download MetaTrader 4
								</p>

								<div class="wow fadeInRight">
									<img src="https://saudiquote.com/wp-content/uploads/2014/12/Download-MetaTrader-41.jpg" class="img-shadow" />
								</div>	
											
								<br /><br />
								<div class="clearfix"></div>

								<p class="lead">
									And  view the account funding details
								</p>		

								<div class="wow fadeInRight">
									<img src="https://saudiquote.com/wp-content/uploads/2014/12/Account-Funding-Details.jpg" class="img-shadow" />
								</div>
							</div>

						</div>
					</div>
				</section>				

				<section class="account-opening section5" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section5.jpg)  no-repeat  center top ;">
					<div class="time wow fadeInUp"><span>When account is funded</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<div class="box-content wow fadeInLeft">
								<p>Abdullah funds his account, and then receives his MT4 account login credentials.</p>
								<p>He is now ready to trade</p>
							</div>
						</div>

						<div class="small-12 medium-7 large-7 columns">

						</div>					
					</div>
				</section>

				<section class="account-opening section6">
					<div class="time wow fadeInUp"><span>2:00 pm</span></div>
					<div class="row">
						<div class="small-12 medium-5 large-5 columns">
							<figure class="left wow fadeInLeft">
								<img src="<?=get_bloginfo('stylesheet_directory');?>/images/section6-abdulla.png" />
								<figcaption>
									<h3>Abdullah has an enquiry</h3>
									<p>He goes to the Contact Us section of the “SaudiQuote” website and has all his inquiries solved.</p>
								</figcaption>
							</figure>
						</div>
						<div class="small-12 medium-7 large-7 columns">
							<img src="<?=get_bloginfo('stylesheet_directory');?>/images/contact-us.png"  class="img-shadow" />
							
						</div>
					</div>
				</section>	

				<section class="account-opening section7" style="background:url(<?=get_bloginfo('stylesheet_directory');?>/images/section7.jpg)  no-repeat  center top ;">
					<div class="time"><span>2:05 pm</span></div>
					<div class="row">
						
						<div class="small-12 medium-7 large-7 columns">
							<div class="abdulla-satisfied wow fadeInLeft">
								<h2>ABDULLAH</h2>
								<h2>IS SATISFIED</h2>
							</div>
						</div>

						<div class="small-12 medium-5 large-5 columns">
							
						</div>
					</div>
				</section>			

			</div>
		<?php } ?>


		
	</div>
</div>


<?php get_footer(); ?>