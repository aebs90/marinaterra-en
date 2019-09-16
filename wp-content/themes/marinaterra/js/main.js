jQuery(document).ready(function($){
	var swiperOptions = {
		autoplay: 5000,
		loop: true,
		speed: 1000,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		effect: 'fade',
	};

	var swiper = new Swiper('.swiper-container', swiperOptions);

	$('.datepicker').each(function(){
		$(this).datepicker();
	});
	
	$( '.menu-primary .featured a, .reservation-close' ).on( 'click', function(e){
		e.preventDefault();
		
		$('#reservation').toggleClass( 'active' );
	});
	
	$(".owl-carousel").owlCarousel({
		margin: 30,
		nav: true,
		navText: [ '<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>' ],
		responsive : {
			0 : {
				items: 1,
			},
			768 : {
				items: 2,
			},
			992 : {
				items: 3,
			},
		},
	});
	
	$('.gallery-link').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});
	
	$.ajax({
		url : "https://api.openweathermap.org/data/2.5/weather?id=3970677&APPID=8a3fe07e6cd6e1c6b1bf0e0e14e83e8d&units=metric",
		dataType : "jsonp",
		success : function(parsed_json) {
			
			var temp = ( $('html').attr('lang') == 'es_MX' )
				? 'temp_c'
				: 'temp_f';
				
			var temp_txt = ( $('html').attr('lang') == 'es_MX' )
				? 'C'
				: 'F';
			
			$('#the-weather').html(
				parsed_json['main']['temp']
				+ '°' + temp_txt + ' <img src="'
				+ 'https://openweathermap.org/img/wn/' + parsed_json['weather'][0]['icon'] + '@2x.png'
				+ '">');
		}
	});

	function calcTime(offset) {
		var d = new Date();
		
		var localTime = d.getTime();
		
		var localOffset = d.getTimezoneOffset() * 60000;
		
		var utc = localTime + localOffset; 
		
		var offset = -7;
		
		var sancarlos = utc + (3600000*offset);
		
		var nd = new Date(sancarlos);

		var hours = nd.getHours();
		var minutes = nd.getMinutes();
		
		var m = ( hours < 12 ) ? 'AM' : 'PM';
		
		if ( hours > 12 ) {
			hours = hours - 12;
		}
		
		if ( hours < 10) { hours = "0" + hours ; }
		if ( minutes < 10) { minutes = "0" + minutes ; }
		
		return  hours + ':' + minutes + ' ' + m;
	}
	
	$('#the-time').html( calcTime( '+7' ) );

	$('.menu-toggle-btn').on( 'click', function(){
		$('#menu').toggleClass( 'active' );
	});
});