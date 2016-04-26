jQuery(document).ready(function () {
    jQuery( 'nav.main-nav li.menu-item-has-children' ).hover(
        function(){
            jQuery(this).children('ul.sub-menu').slideDown(200);
        },
        function(){
            jQuery(this).children('ul.sub-menu').slideUp(200);
        }
    );

    jQuery('a.sitemap-link').on('click', function(e) {
		var offset = jQuery(this).offset().top;
		jQuery('body,html').animate({ scrollTop: offset }, 900); 
    	jQuery('.sitemap-list').slideToggle(200);
    });

});

$(function(){

    $('nav#menu').mmenu();

    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut('slow')
         .next('img').fadeIn('slow')
         .end().appendTo('.fadein');}, 
      5000);

    jQuery("#form-select").change(function () {
        location.href = jQuery(this).val();
    })

});