//		проблема!
//		не определяется переменная при инициализации jquery
//		делаем это в ручную.
var $ = jQuery;

$(document).ready(function () {
  
	$(".slider_main_page__slider").flexslider({
    animation: "slide",
    animationLoop: true,
    controlNav: false,
  });

  let teamSlider = $(".team__slider").flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 300,
    minItems: 1,
    maxItems: 3,
		controlNav: false,
		touch: true,
  });

 /*  $("#mycarousel").jcarousel({
    wrap: "circular",
    scroll: 1,
    start: 1,
    auto: 5,
    animation: 1000,
    easing: "swing",
  }); */

  $().UItoTop({ easingType: "easeOutQuart" });

  $("a.project_item").fancybox({
    padding: 0,
    margin: 0,
    overlayOpacity: 0.9,
    overlayShow: true,
    overlayColor: "#000",
  });

  $(".entry-gallery a").fancybox({
    padding: 0,
    margin: 0,
    overlayOpacity: 0.9,
    overlayShow: true,
    overlayColor: "#000",
  });

  function toggleSeoMenu() {
    var button = document.querySelector(".seo-menu-toggler");
    if (button) {
      var menu = document.querySelector(".seo-menu");
      menu.style.height = "0px";
      button.addEventListener("click", function (e) {
        e.preventDefault();
        if (menu.style.height === "0px") {
          menu.style.height = menu.scrollHeight + "px";
        } else menu.style.height = "0px";
      });
    }
  }
  toggleSeoMenu();
});
