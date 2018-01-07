jQuery( document ).ready(function() {

//begin slide-to-reveal info data
jQuery('.slider-post-info').hide();
jQuery('.slider-item').hover(function(){jQuery(this).find('.slider-post-info').fadeIn().show();},function(){jQuery(this).find('.slider-post-info').fadeOut().hide();});

});