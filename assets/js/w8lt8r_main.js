jQuery(function($){
	
	/*
	*			page template Каталог
	*	Блок работа с интерфейсом для загрузки изображений на странице каталог
	* действие при нажатии на кнопку загрузки изображения	 
	*/
	
	//	событие нажатия кнопки загрузить
	$('.upload_image_button').click(function(){        
		var send_attachment_bkp = wp.media.editor.send.attachment;
		var button = $(this);
		var img =  $(this).parent().parent().find('.img_box #img_park');
		var input = $(this).prev();	
		wp.media.editor.send.attachment = function(props, attachment) {
			//	записываем адрес картинки для отображения в админке			
			img.attr('src',attachment.url)
			//	устанавливаем значение в форме для сохранения в базу данных
			input.val(attachment.id);
			wp.media.editor.send.attachment = send_attachment_bkp;
		}
		wp.media.editor.open(button);
		return false;    
	});
	/*
	 * событие нажатия на кнопку удалить.
	 * если быть точным, то мы просто удаляем value у input type="hidden"
	 */
	$('.remove_image_button').click(function(){
			
			var img = $(this).parent().parent().find('.img_box #img_park');
			var src = img.attr('data-src');
			img.attr('src', src);
			$(this).prev().prev().val('');
		
		return false;
	});

/*
*-------------------------------------------------------------------------------------------
*						Код для админки и для страницы project.php			
*/

	/*
	* ------------------------------ код для админки постов "Проекты"------------------------
	*/
	$('.box_meta_data_gallery').on('click', '.item_gallery .item_button_upload' ,function() {
		var send_attachment_bkp = wp.media.editor.send.attachment;
		var button = $(this);
		var img =  $(this).parent().parent().find('#item_img');
		var input = $(this).parent().parent().find('#item_input');	
		//console.log(img);
		//console.log(input);
		wp.media.editor.send.attachment = function(props, attachment) {
			//	записываем адрес картинки для отображения в админке			
			img.attr('src',attachment.url)
			//	устанавливаем значение в форме для сохранения в базу данных
			input.val(attachment.id);
			wp.media.editor.send.attachment = send_attachment_bkp;
		}
		wp.media.editor.open(button);
		return false;    
	});
	$('.box_meta_data_gallery').on('click', '.item_gallery .item_button_remove' ,function() {
		
		if ( $('.box_meta_data_gallery .item_gallery').size() === 1 ) {
			var img = $(this).parent().parent().find('#item_img');	
			var src = img.attr('data-src');
			img.attr('src', src);
			$(this).parent().parent().find('#item_input').val('');
			return false;
			}
		else {
			$(this).parent().parent().remove();
			return false;
		}	
	});
	$('.box_meta_data_gallery .item_button_new_item').on('click', function(event) {
		//	копируем первый элелемент
		var clone_item = $('.item_gallery').filter(':first').clone();
		clone_item.insertAfter('.item_gallery:last');
		//	чистим src картинки и вставляем шаблон с data-src
		clone_item.find('#item_img').attr('src', clone_item.find('#item_img').attr('data-src') );
		// 	поскольку ячека новая очишаем значение атрибута value в input
		clone_item.find('#item_input').val('');		
		return false;
	});

	/*
	*	отработка событий от пользователя на странице 
	*/
	
	/*
	*	если в блоке контента в админке ничего не задано 
	*	блокируем появления маски с содержимым контента
	*/
	//	событие показать маску с контентом
	$('.row').on('mouseenter', '.item_content', function(event) {		
		var content = $(this).text(),
			pattern = /\w+/gi;		
		
		if ( !pattern.test(content) ) return false;
		$(this).css('opacity','1.0');		
	});
	//	событие убрать маску с конентом
	$('.row').on('mouseleave', '.item_content' ,function(event) {
		$(this).css('opacity', '0.0');		
	});

	//	Глобальный объект где будут лежать все загруженные картинки галерей
	var stackPic = new Object();

	$('.row').on('click', '.box_item', function(event) {
		//	если в нутри контента есть ссылка 
		//	проверяем не нажал ли ее юзер
		//	если нажал остановим обработчик
		if ( $(event.target).attr('href') ) return;
		
		//	блокируем работу скролла
		$(window).on('wheel',function() { return false;});
		// генерируем окно для галереи
		var box_gallery = $('<div class="box_gallery">').appendTo(document.body);
		//	позиционируем окно галереи относительно прокрутки 
		box_gallery.css({
			top: $(window).scrollTop(),
			opacity: 1.0,
		});		

		box_gallery.on('click', function(event) {
			//console.log('event click box-gallery');
			//console.log( $(event.target).is(event.currentTarget) );
			if ( ! $(event.target).is(event.currentTarget) ) return;
			
			//	удаляем бох с галереей
			$(this).css({
				opacity: 0.0,
			});
			
			setTimeout( function() { box_gallery.remove(); } , 300 );
			//	разрешаем скролл колесиком
			$(window).off('wheel');
		});
		
		//	ajax request php func. ajax_request_stackPic()
		var id = $(this).attr('data-ID'),
			data = {
				'action': 'stackPic',
				'id': id,
				},
			url = location.protocol + '//'+ location.hostname ;		
			//	проверяем загружены ли фото или нет		
		if (id in stackPic) 
			generation(stackPic[id]);
		else {
			$.ajax({
				url: url + '/wp-admin/admin-ajax.php',
				data: data,
				type: 'POST',
				success: function(data) {	
					box_gallery.toggleClass('loading_gif');					
					var urls = JSON.parse(data);
					
					stackPic[ id ] = new Array();
					
					for (var i=0; i<urls.length; i++ ) {
						stackPic[id].push( (new Image()).src = urls[i] );
					}	
					generation(stackPic[id]);
				},
				beforeSend: function() {
					box_gallery.toggleClass('loading_gif');
				},
				error: function(obj, textStatus, errorThrown) {
					console.log(textStatus);
					console.log(errorThrown);
				}
			});
		}

		function generation(stackPic) {
			//	генерируем галерею
			var div = $('<div class="flexslider2" >'),
			ul = $('<ul class="slides">').appendTo(div);
			for (i=0; i<stackPic.length; i++) {
				var li = $('<li>'),
					img = $('<img >',{
					src: stackPic[i],
					//width: '800px',
					
					//zIndex: 10,
					}).appendTo(li);
				li.appendTo(ul);	
				}
			box_gallery.prepend(div);
			if (stackPic.length <= 1) {
				li.css('display', 'block');				
				return;
				}
			$(".flexslider2").flexslider({
				slideshow: true,                //Boolean: Animate slider automatically
				slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
				animationSpeed: 600,
				animation: 'slide',
				animationLoop: true,
				controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
				directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
				prevText: "",           //String: Set the text for the "previous" directionNav item
				nextText: "",               //String: Set the text for the "next" directionNav item
				// Usability features
				//pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
				//pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
				//useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
				touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
				//video: false,                  //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
			});
		}
	}); // end event .box_item
	
	/*
	* ------------- ОБРАБОТКА СОБЫТИЯ ЗАГРУЗИТЬ ЕЩЁ -----------
	*/
	$('#true_loadmore').click(function(){
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			//'query': true_posts,
			'page' : dataForAjax.current_page
			},
			url = location.protocol + '//'+ location.hostname ;
		$.ajax({
			url: dataForAjax.ajaxurl, // обработчик
			data: data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) {
					
					$('#true_loadmore').text('Загрузить ещё'); 
					dataForAjax.current_page++; // увеличиваем номер страницы на единицу
					$('.projects .row').append(data);
					if (dataForAjax.current_page === dataForAjax.max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кн
				} else {
					$('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
				
			}
		});
	});

});