		<?php if( ICL_LANGUAGE_CODE == 'ar' ) {
			include('sitemap-ar.php');
		} else {
			include('sitemap-en.php');
		} ?>

		<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
		<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"804f4d9c-808b-4653-8520-b633ce72764b","doNotCopy":true,"hashAddressBar":false,"doNotHash":true});var st_type="wordpress4.0.1";</script>

		<script src="<?=get_bloginfo('stylesheet_directory');?>/js/foundation.min.js"></script>
		<script src="<?=get_bloginfo('stylesheet_directory');?>/js/faq.js"></script>	
		<script type="text/javascript" src="<?=get_bloginfo('stylesheet_directory');?>/js/jquery.mmenu.min.all.js"></script>		
		<script>
	  		$(document).foundation({
				accordion: {
					multi_expand: true
				}
	  		});
		</script>

	    <script type="text/javascript" src="<?=get_bloginfo('stylesheet_directory');?>/js/app.js"></script>

		<?php /*
		<!--Start of Zopim Live Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='//v2.zopim.com/?2c3optqu40dFk0Er9klWZqQIVtscLahT';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
		</script>
		<!--End of Zopim Live Chat Script-->
		*/ ?>
			    
	   	<?php wp_footer(); ?>
			   	
	</body>
</html>