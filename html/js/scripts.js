 

$('.menuMobile').click(function(){
	$('.menu').slideToggle(0);
	$('.menu ul li').click(function(){
		$('.menu').slideToggle(0);
	});
});

