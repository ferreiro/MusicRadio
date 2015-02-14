 

// Executes this when the ajax finish
$( document ).ajaxComplete(function( event,request, settings ) {


	 $('.menuMobile').click(function(){
	 	$('.menu').slideToggle(0);
	 	// $('.menu ul li').click(function(){
	 	// 	$('.menu').slideToggle(0);
	 	// });
	 }); 

});



if(navigator.userAgent.match(/Android/i)
  	|| navigator.userAgent.match(/webOS/i)
  	|| navigator.userAgent.match(/iPhone/i)
  	|| navigator.userAgent.match(/iPad/i)
  	|| navigator.userAgent.match(/iPod/i)
  	|| navigator.userAgent.match(/BlackBerry/i)
  	|| navigator.userAgent.match(/Windows Phone/i)) {

	// Open the menu
 
}
else
{   

	$(document).scroll(function() {
	    console.log($(window).scrollTop());

	    var scroll_y = scrollY,
	    	nav = $('.menu');

	    	console.log(nav.height());
	    	console.log(scroll_y);

	    if (scroll_y >= nav.height()) {
	    	console.log("yeag");
	    	nav.addClass("menuFixed");
	    }
	    else {
	    	nav.removeClass("menuFixed");
	    }


	});



}