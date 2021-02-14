//		проблема!
//		не определяется переменная при инициализации jquery
//		делаем это в ручную.
var $ = jQuery;

$(document).ready(function () {
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

  /* 
  
    BUTTON ON TOP 

  */

  $.fn.UItoTop = function (options) {
    var defaults = {
        text: "To Top",
        min: 200,
        inDelay: 600,
        outDelay: 400,
        containerID: "toTop",
        containerHoverID: "toTopHover",
        scrollSpeed: 1200,
        easingType: "linear",
      },
      settings = $.extend(defaults, options),
      containerIDhash = "#" + settings.containerID,
      containerHoverIDHash = "#" + settings.containerHoverID;

    $("body").append(
      '<a href="#" id="' + settings.containerID + '">' + settings.text + "</a>"
    );
    $(containerIDhash)
      .hide()
      .on("click.UItoTop", function () {
        $("html, body").animate(
          { scrollTop: 0 },
          settings.scrollSpeed,
          settings.easingType
        );
        $("#" + settings.containerHoverID, this)
          .stop()
          .animate({ opacity: 0 }, settings.inDelay, settings.easingType);
        return false;
      })
      .prepend('<span id="' + settings.containerHoverID + '"></span>')
      .hover(
        function () {
          $(containerHoverIDHash, this).stop().animate(
            {
              opacity: 1,
            },
            600,
            "linear"
          );
        },
        function () {
          $(containerHoverIDHash, this).stop().animate(
            {
              opacity: 0,
            },
            700,
            "linear"
          );
        }
      );

    $(window).scroll(function () {
      var sd = $(window).scrollTop();
      if (typeof document.body.style.maxHeight === "undefined") {
        $(containerIDhash).css({
          position: "absolute",
          top: sd + $(window).height() - 50,
        });
      }
      if (sd > settings.min) $(containerIDhash).fadeIn(settings.inDelay);
      else $(containerIDhash).fadeOut(settings.Outdelay);
    });
  };

  $().UItoTop();
});