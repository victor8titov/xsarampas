//		проблема!
//		не определяется переменная при инициализации jquery
//		делаем это в ручную.
var $ = jQuery;
$(document).ready(function() {
	
	//$(".wpcf7-form-control-wrap.your-phone input[name='your-phone']").mask("+7(999)999-99-99");
	
	$(".flexslider").flexslider({
		animation: 'slide',
		animationLoop: true,
		controlNav: false
	});	
	
	$("#mycarousel").jcarousel({
		wrap: 'circular',
		scroll: 1,
		start: 1, 
		auto: 5,
		animation: 1000,
		easing: 'swing'
	});
	
	$().UItoTop({easingType: 'easeOutQuart'});
	
	$("a.project_item").fancybox({
		'padding'       :   0,
		'margin'        :   0,
		'overlayOpacity':   0.9,
		'overlayShow'	:	true,
		'overlayColor'  :  '#000'
	});
	
	$(".entry-gallery a").fancybox({
		'padding'       :   0,
		'margin'        :   0,
		'overlayOpacity':   0.9,
		'overlayShow'	:	true,
		'overlayColor'  :  '#000'
	});
	
/* 	$('.page-city-gallery').slick({
	  arrows: true,
	});
 */
	function toggleSeoMenu() {
		var button = document.querySelector('.seo-menu-toggler');
		if (button) {
			var menu = document.querySelector('.seo-menu');
			menu.style.height = '0px';
			button.addEventListener('click', function(e) {
				e.preventDefault();
				if (menu.style.height === '0px') {
					menu.style.height = menu.scrollHeight + 'px';
				} else menu.style.height = '0px';
			})
		}
	}
	toggleSeoMenu();

});