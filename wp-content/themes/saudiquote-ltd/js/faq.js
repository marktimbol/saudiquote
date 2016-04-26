jQuery(document).ready(function(jQuery){
	//update these values if you change these breakpoints in the style.css file (or _layout.scss if you use SASS)
	var MqM= 768,
		MqL = 1024;

	var faqsSections = jQuery('.cd-faq-group'),
		faqTrigger = jQuery('.cd-faq-trigger'),
		faqsContainer = jQuery('.cd-faq-items'),
		faqsCategoriesContainer = jQuery('.cd-faq-categories'),
		faqsCategories = faqsCategoriesContainer.find('a'),
		closeFaqsContainer = jQuery('.cd-close-panel');
	
	//select a faq section 
	faqsCategories.on('click', function(event){
		event.preventDefault();
		var selectedHref = jQuery(this).attr('href'),
			target= jQuery(selectedHref);
		if( jQuery(window).width() < MqM) {
			faqsContainer.scrollTop(0).addClass('slide-in').children('ul').removeClass('selected').end().children(selectedHref).addClass('selected');
			closeFaqsContainer.addClass('move-left');
			jQuery('body').addClass('cd-overlay');
		} else {
	        jQuery('body,html').animate({ 'scrollTop': target.offset().top - 19}, 200); 
		}
	});

	//close faq lateral panel - mobile only
	jQuery('body').bind('click touchstart', function(event){
		if( jQuery(event.target).is('body.cd-overlay') || jQuery(event.target).is('.cd-close-panel')) { 
			closePanel(event);
		}
	});
	faqsContainer.on('swiperight', function(event){
		closePanel(event);
	});

	//show faq content clicking on faqTrigger
	faqTrigger.on('click', function(event){
		event.preventDefault();
		jQuery(this).next('.cd-faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
	});

	//update category sidebar while scrolling
	jQuery(window).on('scroll', function(){
		if ( jQuery(window).width() > MqL ) {
			(!window.requestAnimationFrame) ? updateCategory() : window.requestAnimationFrame(updateCategory); 
		}
	});

	jQuery(window).on('resize', function(){
		if(jQuery(window).width() <= MqL) {
			faqsCategoriesContainer.removeClass('is-fixed').css({
				'-moz-transform': 'translateY(0)',
			    '-webkit-transform': 'translateY(0)',
				'-ms-transform': 'translateY(0)',
				'-o-transform': 'translateY(0)',
				'transform': 'translateY(0)',
			});
		}	
		if( faqsCategoriesContainer.hasClass('is-fixed') ) {
			faqsCategoriesContainer.css({
				'left': faqsContainer.offset().left,
			});
		}
	});

	function closePanel(e) {
		e.preventDefault();
		faqsContainer.removeClass('slide-in').find('li').show();
		closeFaqsContainer.removeClass('move-left');
		jQuery('body').removeClass('cd-overlay');
	}

	function updateCategory(){
		updateCategoryPosition();
		updateSelectedCategory();
	}

	function updateCategoryPosition() {
		var top = jQuery('.cd-faq').offset().top,
			height = jQuery('.cd-faq').height() - jQuery('.cd-faq-categories').height(),
			margin = 20;
		if( top - margin <= jQuery(window).scrollTop() && top - margin + height > jQuery(window).scrollTop() ) {
			var leftValue = faqsCategoriesContainer.offset().left,
				widthValue = faqsCategoriesContainer.width();
			faqsCategoriesContainer.addClass('is-fixed').css({
				'left': leftValue,
				'top': margin,
				'-moz-transform': 'translateZ(0)',
			    '-webkit-transform': 'translateZ(0)',
				'-ms-transform': 'translateZ(0)',
				'-o-transform': 'translateZ(0)',
				'transform': 'translateZ(0)',
			});
		} else if( top - margin + height <= jQuery(window).scrollTop()) {
			var delta = top - margin + height - jQuery(window).scrollTop();
			faqsCategoriesContainer.css({
				'-moz-transform': 'translateZ(0) translateY('+delta+'px)',
			    '-webkit-transform': 'translateZ(0) translateY('+delta+'px)',
				'-ms-transform': 'translateZ(0) translateY('+delta+'px)',
				'-o-transform': 'translateZ(0) translateY('+delta+'px)',
				'transform': 'translateZ(0) translateY('+delta+'px)',
			});
		} else { 
			faqsCategoriesContainer.removeClass('is-fixed').css({
				'left': 0,
				'top': 0,
			});
		}
	}

	function updateSelectedCategory() {
		faqsSections.each(function(){
			var actual = jQuery(this),
				margin = parseInt(jQuery('.cd-faq-title').css('margin-top').replace('px', '')),
				activeCategory = jQuery('.cd-faq-categories a[href="#'+actual.attr('id')+'"]'),
				topSection = (activeCategory.parent('li').is(':first-child')) ? 0 : Math.round(actual.offset().top);
			
			if ( ( topSection - 20 <= jQuery(window).scrollTop() ) && ( Math.round(actual.offset().top) + actual.height() + margin - 20 > jQuery(window).scrollTop() ) ) {
				activeCategory.addClass('selected');
			}else {
				activeCategory.removeClass('selected');
			}
		});
	}
});