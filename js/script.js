jQuery( document ).ready(function()
{
	ddt_navbar ();
});

// define a new function
function ddt_navbar()
{

	var num = 100; //number of pixels before modifying styles

	//not a very smooth transition

	jQuery(window).bind(
		'scroll', function () 
		{
    		if (jQuery(window).scrollTop() > num) 
    		{
        	jQuery('.navbar').addClass('fixed');
    		} 
    		else {
        	jQuery('.navbar').removeClass('fixed');
    		}
});
};
