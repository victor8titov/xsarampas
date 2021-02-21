var $ = jQuery;
jQuery(function ($) {
	/*
   *	отработка событий от пользователя на странице
	*/

	//	событие показать маску с контентом
  $(".row").on("mouseenter", ".item_content", function (event) {
    var content = $(this).text(),
      pattern = /\w+/gi;

    if (!pattern.test(content)) return false;
    $(this).css("opacity", "1.0");
  });

  //	событие убрать маску с конентом
  $(".row").on("mouseleave", ".item_content", function (event) {
    $(this).css("opacity", "0.0");
  });

  //	Глобальный объект где будут лежать все загруженные картинки галерей
  var stackPic = new Object();

  $(".row").on("click", ".box_item", function (event) {
    
		//	ajax request php func. ajax_request_stackPic()
    var id = $(this).attr("data-ID"),
      	data = {
					action: "stackPic",
					id: id,
				},
				url = location.protocol + "//" + location.hostname;

    //	проверяем загружены ли фото или нет
    if (id in stackPic) initAndShowGallery(stackPic[id]);
    else {
      $.ajax({
        url: url + "/wp-admin/admin-ajax.php",
        data: data,
        type: "POST",
        success: function (data) {
          //box_gallery.toggleClass("loading_gif");
          var urls = JSON.parse(data);

          stackPic[id] = new Array();

          for (var i = 0; i < urls.length; i++) {
            stackPic[id].push((new Image().src = urls[i]));
          }
          initAndShowGallery(stackPic[id]);
        },
        beforeSend: function () {},
        error: function (obj, textStatus, errorThrown) {
          console.log(textStatus);
          console.log(errorThrown);
        },
      });
    }

		function initAndShowGallery(stackPic) {
			$.fancybox.open(
				stackPic.map(item => ({
					src  : item,
				})), {
				loop : false
			});
		} 

  });

  /*
   * ------------- ОБРАБОТКА СОБЫТИЯ ЗАГРУЗИТЬ ЕЩЁ -----------
   */
  $("#true_loadmore").click(function () {
    $(this).text("Загружаю..."); // изменяем текст кнопки, вы также можете добавить прелоадер
    var data = {
        action: "loadmore",
        //'query': true_posts,
        page: dataForAjax.current_page,
      },
      url = location.protocol + "//" + location.hostname;
    $.ajax({
      url: dataForAjax.ajaxurl, // обработчик
      data: data, // данные
      type: "POST", // тип запроса
      success: function (data) {
        if (data) {
          $("#true_loadmore").text("Загрузить ещё");
          dataForAjax.current_page++; // увеличиваем номер страницы на единицу
          $(".projects .row").append(data);
          if (dataForAjax.current_page === dataForAjax.max_pages)
            $("#true_loadmore").remove(); // если последняя страница, удаляем кн
        } else {
          $("#true_loadmore").remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      },
    });
  });



  /*
   *	
	 *	ADMIN PANEL
	 *
   *	Блок работа с интерфейсом для загрузки изображений на странице каталог
   *	действие при нажатии на кнопку загрузки изображения
	 * 
	 * 
   */

  //	событие нажатия кнопки загрузить
  $(".upload_image_button").click(function () {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = $(this);
    var img = $(this).parent().parent().find(".img_box #img_park");
    var input = $(this).prev();
    wp.media.editor.send.attachment = function (props, attachment) {
      //	записываем адрес картинки для отображения в админке
      img.attr("src", attachment.url);
      //	устанавливаем значение в форме для сохранения в базу данных
      input.val(attachment.id);
      wp.media.editor.send.attachment = send_attachment_bkp;
    };
    wp.media.editor.open(button);
    return false;
  });
  /*
   * событие нажатия на кнопку удалить.
   * если быть точным, то мы просто удаляем value у input type="hidden"
   */
  $(".remove_image_button").click(function () {
    var img = $(this).parent().parent().find(".img_box #img_park");
    var src = img.attr("data-src");
    img.attr("src", src);
    $(this).prev().prev().val("");

    return false;
  });

  $(".box_meta_data_gallery").on(
    "click",
    ".item_gallery .item_button_upload",
    function () {
      var send_attachment_bkp = wp.media.editor.send.attachment;
      var button = $(this);
      var img = $(this).parent().parent().find("#item_img");
      var input = $(this).parent().parent().find("#item_input");
      //console.log(img);
      //console.log(input);
      wp.media.editor.send.attachment = function (props, attachment) {
        //	записываем адрес картинки для отображения в админке
        img.attr("src", attachment.url);
        //	устанавливаем значение в форме для сохранения в базу данных
        input.val(attachment.id);
        wp.media.editor.send.attachment = send_attachment_bkp;
      };
      wp.media.editor.open(button);
      return false;
    }
  );
  $(".box_meta_data_gallery").on(
    "click",
    ".item_gallery .item_button_remove",
    function () {
      if ($(".box_meta_data_gallery .item_gallery").size() === 1) {
        var img = $(this).parent().parent().find("#item_img");
        var src = img.attr("data-src");
        img.attr("src", src);
        $(this).parent().parent().find("#item_input").val("");
        return false;
      } else {
        $(this).parent().parent().remove();
        return false;
      }
    }
  );
  $(".box_meta_data_gallery .item_button_new_item").on(
    "click",
    function (event) {
      //	копируем первый элелемент
      var clone_item = $(".item_gallery").filter(":first").clone();
      clone_item.insertAfter(".item_gallery:last");
      //	чистим src картинки и вставляем шаблон с data-src
      clone_item
        .find("#item_img")
        .attr("src", clone_item.find("#item_img").attr("data-src"));
      // 	поскольку ячека новая очишаем значение атрибута value в input
      clone_item.find("#item_input").val("");
      return false;
    }
  );
});
