/*
	jQuery for All-AJAX theme
	Original JavaScript by Chris Coyier
	Updated October 2010 by Stewart Heckenberg & Chris Coyier
	Updated May 2011 by Chris Coyier
	Updated Sep 2012 by Jeff Starr
*/

// Self-Executing Anonymous Function to avoid more globals
(function(){

 	$('.HeaderNav ul li').removeClass("selected");

	// set variables
	var 
	$mainContent     = $("#containerAjax"),
	$ajaxSpinner     = $(".loader"),
	$searchInput     = $("#s"),
	$allLinks        = $("a"),
	$el;

	// auto-clear search field
	$searchInput.focus(function(){
		if ($(this).val() == "Search..."){
			$(this).val("");
		}
	});

	// query search results
	$('#searchform').submit(function(){
		var s = $searchInput.val().replace(/ /g, '+');
		if (s){
			var query = '/?s=' + s;
			$.address.value(query);
		}
		return false;
	});


	// URL internal is via plugin http://benalman.com/projects/jquery-urlinternal-plugin/
	$('a:urlInternal').live('click', function(e){ 

		$el = $(this); // Caching
  
		// poner la clase "noAjax" al elemento que quieras que su enlace se abra
		// sin usar ajax, por ejemplo, la publicidad quieres que se abra en un link externo

		if ( !$el.hasClass("noAjax") ){	
			var path = $(this).attr('href').replace(base, '');

			$.address.value(path);

 			$('.HeaderNav ul li').removeClass("selected");
 			
 			// Este condicional sirve para añadir la clase seleccionada
 			// en el caso de que hayamos pulsado dentro del menú Drop down (el que se abre abajo)
 			// mira si el elemento this tiene un padre que sea la clase header menu drop down
 			// y si la longitud es una (es decir, tiene ese padre), añade el estilo al Header nav drop
 			// de lo contrario, se lo añade al padre del a (caso "home", mixes...)

 			if ($el.parents('.HeaderMenuDropDown').length == 1) 
 			{
 				$('.HeaderNavDrop').addClass('selected'); 
 			}
 			else
 			{
 				$el.parent().addClass("selected");
 			}
  
			return false;
		}
		// Default action (go to link) prevented for comment-related links (which use onclick attributes)
		
	});

	// Fancy ALL AJAX Stuff
	$.address.change(function(event){  
		if (event.value){
			var adress = event.value;

			// Animate to top
			$("html, body").animate({ scrollTop: 0 }, 400);

			$mainContent.hide(0);
			$ajaxSpinner.show(0);
			$mainContent.empty().load(base + event.value + ' #containerAjax', function(){
				$ajaxSpinner.delay(300);
				$ajaxSpinner.hide(0);
				$mainContent.delay(0);
				$mainContent.show(0);
			});


			console.log(event.value);

			$('.footer').removeClass("footerHome");
			$('.main').attr('class','main'); // Resetea las clases a main
			$('.content').hide();

			if (adress.indexOf("genero") >= 0) {
				$('.main').addClass("green");
			}
			else if(adress.indexOf("index") >= 0) {
				$('.main').addClass("home");
				$('.content').show();
			}
 			else {
 				$('.main').addClass("green");
 			}
			

		}
		var current = location.protocol + '//' + location.hostname + location.pathname;
		if (base + '/' != current) {
			var diff = current.replace(base, '');
			location = base + '/#' + diff;
		}

		$ajaxSpinner.fadeOut();
	});

})(); // End SEAF