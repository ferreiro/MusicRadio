/*
	jQuery for All-AJAX theme
	Original JavaScript by Chris Coyier
	Updated October 2010 by Stewart Heckenberg & Chris Coyier
	Updated May 2011 by Chris Coyier
	Updated Sep 2012 by Jeff Starr
*/

// Self-Executing Anonymous Function to avoid more globals
(function(){

	var primeraCarga = 0;

	// set variables
	var 
	$mainContentCenter = $("#ajaxCenterContainer"),
	// $mainContentLeft = $("#ajaxLeftContainer"),
	// $mainContentRight = $("#ajaxRightContainer"),
	$footer     = $(".footer"),
	$loader     = $("#loading"),
	$searchInput     = $(".HeaderSearchInput"), 
	$allLinks        = $("a"),
	$el;

	var loadInsidePage; // Variable bool que en 1, hace que la página carge el contenido solo en la izquierda (y que el bloque derecho siga igual y no cambie)

	// auto-clear search field
	$searchInput.focus(function(){
		if ($(this).val() == "Search..."){
			$(this).val("");
		}
	});

	// query search results
	$('.searchform').submit(function(){
		var s = $searchInput.val().replace(/ /g, '+');
		if (s){
			var query = '/?s=' + s;
			$.address.value(query);  
			$('.HeaderSearchInput').blur().val('');
		}

		return false;
	});
 
	// URL internal is via plugin http://benalman.com/projects/jquery-urlinternal-plugin/
	$('a:urlInternal').live('click', function(e){ 

		var path = $(this).attr('href').replace(base, '');

		$el = $(this); // Caching
		loadInsidePage = 0;


		$('.HeaderMenu').hide(0);
		$('.HeaderWhiteBg').hide(0);
		$('#closemobile').hide(0);


		if ($el.parents('.pagination').length == 1) {
			loadInsidePage = 1;
			$.address.value(path); // 1 = Just load left
			return false;
		}
		if (!$el.hasClass("noAjax")) {	

			$('.HeaderMenu-submenu').hide(); // Hide the menu 
			$.address.value(path); // 0 = Load left and right
			
			$('.HeaderMenu-submenu ul li').removeClass("selected");
			$el.parent().addClass("selected");
			
			if($el.parent('.HeaderLogo').length == 1)
			{
				$('.Menu li:first-child').addClass("selected");
			}
 
			return false;
		}

		// Default action (go to link) prevented for comment-related links (which use onclick attributes)
		e.preventDefault();
	});

	// Fancy ALL AJAX Stuff
	$.address.change(function(event){ 
 
		// Change the page URL
		var pageTitle = event.value; 

		if(pageTitle.indexOf("electro") > -1) 
		{
			$('.currentText').replaceWith("<span class='currentText'>Electro</span>");
			$('.HeaderMenu-submenu ul li:nth-child(3)').addClass("selected");
		}
		else if(pageTitle.indexOf("progressive") > -1)
		{
			$('.currentText').replaceWith("<span class='currentText'>Progressive</span>");
		}
		else if(pageTitle.indexOf("dubstep") > -1)
		{
			$('.currentText').replaceWith("<span class='currentText'>Dubstep</span>");
		} 
		else if(pageTitle.indexOf("mixes") > -1)
		{
			$('.currentText').replaceWith("<span class='currentText'>Mixes</span>");
		} 
		else
		{
			$('.currentText').replaceWith("<span class='currentText'>Featured</span>");
		}

		if (event.value){
			$loader.show(0);
			$footer.hide(0);

			$mainContentCenter.empty().load(base + event.value + ' #ajaxCenterContainerint', function(){
				$loader.fadeOut(300);
				$mainContentCenter.fadeIn('fast');
				$footer.show(0);
			});
		}	
		else {
			console.log("No existe");
		} 

		// Animate to top
		$("html, body").animate({ scrollTop: 0 }, 400);

		
		// if (primeraCarga == 0) 
		// {
		// 	var string = event.value;
			
		// 	if(string.indexOf("electro") > -1)
		// 	{
		// 		$(".electro_m").addClass("selected");
		// 		primeraCarga++;
		// 	}
		// 	else if(string.indexOf("progressive") > -1)
		// 	{
		// 		$(".progressive_m").addClass("selected");
		// 		primeraCarga++;
		// 	}
		// 	else if(string.indexOf("dubstep") > -1)
		// 	{
		// 		$(".dubstep_m").addClass("selected");
		// 		primeraCarga++;
		// 	}
		// 	else if(string.indexOf("trending") > -1)
		// 	{
		// 		$(".trending_m").addClass("selected");
		// 		primeraCarga++;
		// 	}
		// 	else
		// 	{
		// 		$(".novedades_m").addClass("selected");
		// 		primeraCarga++;
		// 	}
		// }
			
		var current = location.protocol + '//' + location.hostname + location.pathname;
		if (base + '/' != current) {
			var diff = current.replace(base, '');
			location = base + '/#' + diff;
		}	


	});

})(); // End SEAF