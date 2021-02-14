$(document).ready(function () {
  
	$(".slider_main_page__slider").flexslider({
    animation: "slide",
    animationLoop: true,
    controlNav: false,
  });

  $(".team__slider").flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 300,
    minItems: 1,
    maxItems: 3,
		controlNav: false,
		touch: true,
  });

});
