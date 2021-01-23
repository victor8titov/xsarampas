<!-- slider -->
<div class="row slider_main_page">
<div class="flexslider">
		<ul class="slides">
				<?php
					// переменная в которой лежит стек id картинок
					$content = get_post_meta(get_query_var('page_id'), 'stackPic', true);
					//	переменная в которой лежит стек caption для картинок
					$caption = get_post_meta(get_query_var('page_id'), 'stackCaption', true);
					//	если не задана ни одна картинка для слайда то подключим файл с фиксированным слайдом.
					if (!$content || !$content[0]) {
					echo get_template_part('template-parts/page/home_page_not_find_slider');		
					}
					else {
					for( $i=0; $i < count($content); $i++ ) {
					$value = $content[$i];
					$text = $caption[$i];
					$img_object = wp_get_attachment_image_src($value, 'large');
					$url = $img_object[0];						
					?>
				<li>
					<img src="<?php echo $url;?>" alt="" />
					<div class="s14imageItemtitle"><?php echo $text; ?> </div>
				</li>
				<?php
					} 
					}
					?>
		</ul>
	</div>
	</div>
	