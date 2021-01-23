<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage xsarampas
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<!-- content -->
	<div class="row content">
	
		<?php $videoIframe = get_post_meta(get_query_var('page_id'), 'videoIframe', true); if ( $videoIframe ): ?>	
		<div class="video" >
		<?php echo $videoIframe; ?>
		</div>
		<?php else: ?>
		<div style="width:100%; height: 1px;"></div>
		<?php endif; ?>
		
		<!-- slider -->
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
						<li><img src="<?php echo $url;?>" alt="" /><div class="s14imageItemtitle"><?php echo $text; ?> </div></li>
						<?php
					} 
				}
			  ?>
			   
             			  
		  </ul>
		</div>
	
	</div>
	<!-- 3 columns -->
	<div class="row" style="margin-top: 60px;">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="s6">
				<div class="font_6" style="line-height:1.3em; font-size:19px;">
					<span style="font-size:19px;">Наши проекты</span>
				</div>
			</div>
			<div style="width: 300px; height: 230px;" data-exact-height="230" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s35" id="comp-ion142et" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142et">
				<div style="width: 300px; height: 230px;" id="comp-ion142etlink" class="s35link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142et.0">
					<div id="comp-ion142etimg" data-style="" class="s35img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142et.0.0" style="position: relative; width: 300px; height: 230px;">
						<div class="s35imgpreloader" id="comp-ion142etimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142et.0.0.0"></div>
						<img id="comp-ion142etimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142et.0.0.$image" style="width: 300px; height: 230px; object-fit: cover;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_e35ab0b01f72c4f09a01f1269e9b8f58.jpg">
					</div>
				</div>
			</div>			
			<div id="comp-ion142gr" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" style="position: absolute; left: 183px; top: 194px; height: 48px; min-height: 16px; width: 102px;" class="s7" data-state="desktop shouldUseFlex center" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gr" data-prev-text="Смотреть" data-prev-min-width="44" data-prev-width="102"><a href="http://www.xsaramps.com/projects" target="_self" id="comp-ion142grlink" class="g-transparent-a s7link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gr.0"><span id="comp-ion142grlabel" class="s7label" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gr.0.0">Смотреть</span></a></div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="s6">
				<div class="font_6" style="line-height:1.3em; font-size:19px;">
					<span style="font-size:19px;">Проектирование</span>
				</div>
			</div>
			<div style="width: 300px; height: 240px;" class="s35" id="comp-ion142gc">
				<div style="width: 300px; height: 240px;" id="comp-ion142gclink" class="s35link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gc.0">
					<div id="comp-ion142gcimg" data-style="" class="s35img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gc.0.0" style="position: relative; width: 300px; height: 240px;">
						<div class="s35imgpreloader" id="comp-ion142gcimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gc.0.0.0"></div>
						<img id="comp-ion142gcimgimage" alt="Скейт парк проект" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gc.0.0.$image" style="width: 300px; height: 240px; object-fit: cover;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_de8530e2cc0be902c0ac88ae84b19393.jpg">
					</div>
				</div>
			</div>
			<div id="comp-ion142gy" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" style="position: absolute; left: 190px; top: 195px; height: 48px; min-height: 16px; width: 108px;" class="s7" data-state="desktop shouldUseFlex center" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gy" data-prev-text="Читать" data-prev-min-width="44" data-prev-width="108"><a href="http://www.xsaramps.com/process-cihc" target="_self" id="comp-ion142gylink" class="g-transparent-a s7link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gy.0"><span id="comp-ion142gylabel" class="s7label" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gy.0.0">Читать</span></a></div>					
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="s6">
				<div class="font_6" style="line-height:1.3em; font-size:19px;">
					<span style="font-size:19px;">Что мы продаем?</span>
				</div>
			</div>
			<div style="width: 300px; height: 471px;" class="s40" id="comp-ion142gf" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gf"><div id="comp-ion142gfbg" class="s40bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gf.0"></div><div id="comp-ion142gfinlineContent" class="s40inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gf.1"><div style="left: 26px; width: 254px; position: absolute; top: 0px;" class="s6" id="comp-ion142gh" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142gf.1.$comp-ion142gh"><p class="font_7">&nbsp;</p>
			<div class="font_5" style="line-height:1.2em;"><span><span class="color_11">1 Мечту. </span></span></div>
			<div class="font_5" style="line-height:1.2em;"><span><span class="color_11">Мечту каждого ребенка, который смотрит, как катаются его кумиры видео в супер скейт парках и мечтает оказаться в таком месте.</span></span></div>
			<div class="font_5" style="line-height:1.2em;"><br>
			<span><span class="color_11">2 мы продаем 3-е место между учебой и домом, где ребята проводят все свое свободное время.</span></span></div>
			<div class="font_5" style="line-height:1.2em;">&nbsp;</div>
			<p class="font_8"><span class="color_15" style="font-family:courier new; font-size:19px; font-style:normal; font-weight:normal;"><span class="color_11">3 мы продаем интеллект, который развивается в наших умных скейт парках. &nbsp;</span></span><span class="color_11">&#8203;</span></p>
			</div></div></div>				
		</div>							
	</div>
	
	<!-- shaddow  -->
	<div class="row">
		<div style="height: 29px; margin: 10px 0;" class="s32" id="comp-ion142hg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg"><div id="comp-ion142hgcont" class="s32cont" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0"><div id="comp-ion142hgline" class="s32line" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0.0"></div></div></div>
	</div>
	
	<!-- 3 columns 2 -->
	<div class="row">
		
		<h1 class="main_h1">Скейт-парки и скейт площадки</h1>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div style="width: 294px; line-height: 36px;" class="s6" id="comp-ioqw4zpp" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqvwuw0.1.$mediairjh6tf81/=1$mediairjh6tf81.1.$comp-ioqxt60d.0.$comp-ioqw4zpp"><p class="font_8" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;">ГОСУДАРСТВЕННЫМ ЗАКАЗЧИКАМ</span></span></p>
				
				<p class="font_8 font_18"><span style="font-size:18px;"><span style="font-weight:bold;"><span class="wixGuard">&#8203;</span></span></span></p>
				
				<p class="font_8 font_14"><span style="font-size:14px;">Приобретение скейт парка для нужд</span></p>
				<p class="font_8 font_14"><span>муниципальньного образования,</span></p>
				<p class="font_8 font_14"><span>один из самых частых способов&nbsp;</span></p>
				<p class="font_8 font_14"><span>работы нашей организации.</span></p>
				<p class="font_8 font_14"><span>Аукционная документация, грамотное ТЗ</span></p>
				<p class="font_8 font_14"><span>в кратчайшие сроки -&nbsp;основная проблема</span></p>
				<p class="font_8 font_14"><span>в рамках работы с Государственным Заказом.</span></p>
				
				<br />
				
				<a href="/goszakaz" class="s7link-ver-2">Подробнее</a>
			
			</div>			
			
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div style="width: 290px;" class="s6" id="comp-ioqwf0rv" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqvwuw0.1.$mediairjh6tf81/=1$mediairjh6tf81.1.$comp-ioqxt60d.0.$comp-ioqwf0rv"><p class="font_8" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;">КОРПОРАТИВНЫМ КЛИЕНТАМ</span></span></p>
				
				<p class="font_8 font_14" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;"><span class="wixGuard">&#8203;</span></span></span></p>
				
				<p class="font_8 font_14"><span>У вас крупное массовое мероприятие&nbsp;</span></p>
				<p class="font_8 font_14"><span>&nbsp;и хотите экстрима, но не знаете,</span></p>
				<p class="font_8 font_14"><span>где заказать качественное шоу с готовыми&nbsp;фигурами под ключ?</span></p>
				<p class="font_8 font_14"><span>Вы застройщик жилого квартала и вы ищите новые идеи взамен однотипных детских площадок?</span></p>
				<p class="font_8 font_14"><span>Вы хотите сделать свой бизнес в экшн спорте и открыть</span></p>
				<p class="font_8 font_14"><span>коммерческий скейт парк?</span></p>
				<p class="font_8 font_14"><span>Мы то, что вам нужно...</span></p>
				
				<br />
				
				<a href="/korporativzakaz" class="s7link-ver-2">Подробнее</a>
				
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div style="width: 294px;" class="s6" id="comp-ioqwf8ll" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqvwuw0.1.$mediairjh6tf81/=1$mediairjh6tf81.1.$comp-ioqxt60d.0.$comp-ioqwf8ll"><p class="font_8" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;">ЧАСТНЫМ ЗАКАЗЧИКАМ</span></span></p>
				
				<p class="font_8 font_14" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;"><span class="wixGuard">&#8203;</span></span></span></p>
				
				<p class="font_8 font_14"><span>Если вы мечтаете о минирампе на своем заднем дворе&nbsp;</span></p>
				<p class="font_8 font_14"><span>или заполучить переносную перилку&nbsp;</span></p>
				<p class="font_8 font_14"><span>с регулируемой высотой для отточки</span></p>
				<p class="font_8 font_14"><span>трюков, вы попали по адресу…</span></p>
				
				<br />
				
				<a href="/chastniyzakaz" class="s7link-ver-2">Подробнее</a>
				
			</div>			
		</div>
	</div>

	<!-- shaddow  -->
	<div class="row">
		<div style="height: 29px; margin: 10px 0;" class="s32" id="comp-ion142hg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg">
			<div id="comp-ion142hgcont" class="s32cont" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0">
				<div id="comp-ion142hgline" class="s32line" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0.0">
				</div>
			</div>
		</div>
	</div>
	
	<!-- what is rsa -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">					
					
					<div class="s24" style="padding-top: 43px;">
					<div id="comp-ioqxg9m6inlineContent" class="s24inlineContent">
					
					<div><div style="text-align: center;" class="s6" id="comp-ion142hl">				
						<div style="font-size:24px;" class="font_2"><span style="font-size:24px;">ЧТО ТАКОЕ</span></div>
					</div>
					<div class="s6" id="comp-ion142hp" style="padding-bottom: 73px; text-align: center;">
						<div style="font-size:36px;" class="font_2"><span style="color:#1BB7EE;"><span style="font-size:36px;">БЕЗУПРЕЧНЫЙ СКЕЙТ ПАРК</span></span></div>
					</div></div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						
						<div style="float: left; width: 62px; height: 70px;" title="" class="s5" id="comp-ion142id">
							<div style="width: 62px; height: 70px;" id="comp-ion142idlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxg9m6.0.$comp-ion142id.0">
								<div id="comp-ion142idimg" class="s5img" style="position: relative; width: 62px; height: 70px;"><div class="s5imgpreloader" id="comp-ion142idimgpreloader"></div>
									<img id="comp-ion142idimgimage" alt="" style="width: 62px; height: 70px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_2dd06df1b1b34c64993de20e44f7ccd5.png" alt="" />
								</div>
							</div>
						</div>
						
						<div style="margin-left: 70px;width: 218px;" class="s6" id="comp-ion142i9"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">АКТУАЛЬНЫЕ ПЛОЩАДКИ</span></span></div></div>
						<div style="margin-left: 70px;width: 182px; height: 5px;" class="s17" id="comp-ion142jh"><div id="comp-ion142jhline" class="s17line"></div></div>					
						<div style="margin-left: 70px; margin-bottom: 70px; width: 182px;" class="s6" id="comp-ion142ip"><p class="font_8">В нашей коллекции более 40 площадок по всей России! И все они они уникальны и единственны в своем стиле.</p></div>
						
						<div style="float: left; width: 62px; height: 66px;" title="" class="s5" id="comp-ion142j2">
							<div style="width: 62px; height: 66px;" id="comp-ion142j2link" class="s5link">
								<div id="comp-ion142j2img" class="s5img" style="position: relative; width: 62px; height: 66px;">
									<div class="s5imgpreloader" id="comp-ion142j2imgpreloader">
									</div>
									<img id="comp-ion142j2imgimage" alt="" style="width: 62px; height: 66px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_7a8e71689678434f9e7801c06e23cc09.png" />
								</div>
							</div>
						</div>
						
						<div style="margin-left: 70px;width: 218px;" class="s6" id="comp-ion142iy"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ПРИЯТНАЯ СМЕТА</span></span></div></div>
						<div style="margin-left: 70px;width: 182px; height: 5px;" class="s17" id="comp-ion142jh"><div id="comp-ion142jhline" class="s17line"></div></div>
						<div style="margin-left: 70px;margin-bottom: 70px;width: 182px;" class="s6" id="comp-ion142iu" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxg9m6.0.$comp-ion142iu"><p class="font_8">В наших сметах нет скрытых доплат и комиссий.</p><p class="font_8">Мы работаем без НДС.</p></div>						
									
								
						<div style="float: left; width: 62px; height: 62px;" title="" class="s5" id="comp-ion142jw">
							<div style="width: 62px; height: 62px;" id="comp-ion142jwlink" class="s5link">
								<div id="comp-ion142jwimg" class="s5img" style="position: relative; width: 62px; height: 62px;">
									<div class="s5imgpreloader" id="comp-ion142jwimgpreloader"></div>
									<img id="comp-ion142jwimgimage" alt="" style="width: 62px; height: 62px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_ade5b1c855d14626bb9f284d5f22a4fe.png" />
								</div>
							</div>
						</div>

						<div style="margin-left: 70px; width: 218px;" class="s6" id="comp-ion142jc"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ПРОЕКТ +</span></span></div></div>
						<div style="margin-left: 70px; width: 182px; height: 5px;" class="s17" id="comp-ion142jh"><div id="comp-ion142jhline" class="s17line"></div></div>
						<div style="margin-left: 70px; margin-bottom: 70px; width: 182px;" class="s6" id="comp-ion142j8"><p class="font_8">Мы предоставляем разработку проекта совершенно бесплатно.</p></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div style="width: 302px; height: 182px; padding-top: 90px;" title="" class="s5" id="comp-ion142i4">
							<a style="cursor: pointer; width: 302px; height: 182px;" href="http://www.xsaramps.com/2glavnaya" target="_self" id="comp-ion142i4link" class="s5link">
								<div id="comp-ion142i4img" data-style="" class="s5img">
									<div class="s5imgpreloader" id="comp-ion142i4imgpreloader"></div>
									<img id="comp-ion142i4imgimage" alt="" style="width: 250px; height: 182px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_44bbd4d32ddd4356957c0ca67b4caefc.png" />
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div style="float: right; width: 60px; height: 68px;" title="" class="s5" id="comp-ion142l0">
							<div style="width: 60px; height: 68px;" id="comp-ion142l0link" class="s5link">
								<div id="comp-ion142l0img" class="s5img" style="position: relative; width: 60px; height: 68px;">
									<div class="s5imgpreloader" id="comp-ion142l0imgpreloader"></div>
									<img id="comp-ion142l0imgimage" alt="" style="width: 60px; height: 68px; object-fit: fill;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_144eb8bb662044428d128609bca3f488.png">
								</div>
							</div>
						</div>
						<div style="margin-right: 70px; width: 233px;" class="s6" id="comp-ion142kv"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ОРИГИНАЛЬНЫЙ СКЕЙТ ПАРК</span></span></div></div>
						<div style="margin-right: 70px; width: 180px; height: 5px;" class="s17" id="comp-ion142lg"><div id="comp-ion142lgline" class="s17line"></div></div>
						<div style="margin-right: 70px; margin-bottom: 36px; width: 180px;" class="s6" id="comp-ion142kp"><p class="font_8" >Мы не строим шаблонных скейт парков, а разрабатываем индивидуальные, исходя из исследования вашего региоа и потребностей катающихся</p></div>
						<div style="float: right; width: 60px; height: 100px;" title="" class="s5" id="comp-ion142l5">
							<div style="width: 60px; height: 100px;" id="comp-ion142l5link" class="s5link">
								<div id="comp-ion142l5img" class="s5img" style="position: relative; width: 60px; height: 100px;">
									<div class="s5imgpreloader" id="comp-ion142l5imgpreloader"></div>
									<img id="comp-ion142l5imgimage" alt="" style="width: 60px; height: 100px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_3cee82100a5c4fdfbac11afae4e75e34.png">
								</div>
							</div>
						</div>
						<div style="margin-right: 70px; width: 266px;" class="s6" id="comp-ion142kl"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ПОСТАВКА В КРАТЧАЙШИЕ СРОКИ</span></span></div></div>
						<div style="margin-right: 70px; width: 210px; height: 5px;" class="s17" id="comp-ion142lu"><div id="comp-ion142luline" class="s17line"></div></div>
						<div style="margin-right: 70px; margin-bottom: 5px; width: 180px;" class="s6" id="comp-ion142kg"><p class="font_8">После поступления предоплаты, команда первоклассных строителей выезжает к вам на объект и в течение 2-3-х недель изготавливает скейт парк.</p></div>
						<div style="float: right; width: 60px; height: 60px;" title="" class="s5" id="comp-ion142la">
							<div style="width: 60px; height: 60px;" id="comp-ion142lalink" class="s5link">
								<div id="comp-ion142laimg" data-style="" class="s5img" style="position: relative; width: 60px; height: 60px;">
									<div class="s5imgpreloader" id="comp-ion142laimgpreloader">
									</div>
									<img id="comp-ion142laimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxg9m6.0.$comp-ion142la.0.0.$image" style="width: 60px; height: 60px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_ad62bb46abd4468fa708778e3ca42bab.png" />
								</div>
							</div>
						</div>
						<div style="margin-right: 70px;width: 216px;" class="s6" id="comp-ion142kc"><div style="font-size:16px;" class="font_2"><span style="font-size:16px;"><span style="color:#1BB7EE;">ГАРАНТИЯ 2+1</span></span></div></div>
						<div style="margin-right: 70px;width: 130px; height: 5px;" class="s17" id="comp-ion142ln"><div id="comp-ion142lnline" class="s17line"></div></div>
						<div style="margin-right: 70px; margin-bottom: 70px; width: 180px;" class="s6" id="comp-ion142k8"><p class="font_8"><span style="font-family:'open sans', sans-serif; font-size:12px; line-height:normal;">2 года бесплатно + 1 год в половину цены годового обслуживания.</span></p></div>
					</div>
			</div>
		</div>
		</div>
	</div>

	<div class="row">
		<div style="height: 5px;" class="s8" id="comp-ion142m8" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142m8"><div id="comp-ion142m8line" class="s8line" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142m8.0"></div></div>
	</div>
	
	<!-- what is rsa 2 -->
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<div class="s6" id="comp-ion142mf" style="text-align: center; padding: 60px 0;">
					<div>
					<div style="font-size:24px;" class="font_2"><span style="font-size:24px;">СКЕЙТ ПАРК, КАК</span></div>
					<div style="text-align: center;" class="s6" id="comp-ion142mk"><div style="font-size:36px;" class="font_2"><span style="color:#1BB7EE;"><span style="font-size:36px;">РЕШЕНИЕ СОЦИАЛЬНЫХ ЗАДАЧ</span></span></div></div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<img id="comp-ion142ogimgimage" alt="Школа экстремальных видов спорта" style="width: 300px; height: 229px; object-fit: cover;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_8b44f6224d5e45a480e1415b3370c504.jpg">
					<div style="width: 302px; padding: 23px 0;" class="s6" id="comp-ion142nc"><div style="line-height:1.2em; text-align:center;" class="font_5"><span style="color:#1BB7EE;"><span style="line-height:1.2em;">ПРЕЗЕНТАЦИОННЫЕ ЗАДАЧИ</span></span></div></div>
					<ul class="font_8" style="list-style: disc;">
						<li><p style="font-size:14px;" class="font_8"><span style="font-family:arial, helvetica,sans-serif;"><span style="font-size:14px;">Тренинги</span></span></p></li>
						<li><p style="font-size:14px;" class="font_8"><span style="font-family:arial, helvetica,sans-serif;"><span style="font-size:14px;">Семинары</span></span></p></li>
						<li><p style="font-size:14px;" class="font_8"><span style="font-family:arial, helvetica,sans-serif;"><span style="font-size:14px;">Обучающие &nbsp;мастер классы</span></span></p></li>
						<li><p style="font-size:14px;" class="font_8"><span style="font-family:arial, helvetica,sans-serif;"><span style="font-size:14px;">Школа уличных видов</span></span>&nbsp;<span style="font-family:arial, helvetica,sans-serif;"><span style="font-size:14px;">спорта</span></span></p></li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<img id="comp-ion142o1imgimage" alt="Показательные выступления" style="width: 300px; height: 229px; object-fit: cover;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_55c88249fedc405886faa01783a09aa8.jpg">
					<div style="width: 300px; padding: 23px 0;" class="s6" id="comp-ion142nn"><div style="line-height:1.3em; text-align:center;" class="font_6"><span style="color:#1BB7EE;"><span style="line-height:1.3em;">ОБУЧАЮЩИЕ ЗАДАЧИ</span></span></div></div>				
					<ul class="font_8" style="list-style: disc;">
						<li><p style="font-size:14px;" class="font_8"><span style="font-family:arial, helvetica,sans-serif;"><span style="font-size:14px;">Показательные выступления от лучших спортсменов страны</span></span></p></li>
						<li><p style="font-size:14px;" class="font_8"><span style="font-family:arial, helvetica,sans-serif;"><span style="font-size:14px;">Торжественное открытие</span></span></p></li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<img id="comp-ion142piimgimage" alt="Фестиваль экстремальных видов спорта" style="width: 300px; height: 229px; object-fit: cover;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_502d7e77ad7d4931ae53da57cb8458d2.jpg">
					<div style="width: 300px; padding: 23px 0;" class="s6" id="comp-ion142pc" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxlyat.0.$comp-ion142pc"><div style="line-height:1.3em; text-align:center; font-size:18px;" class="font_6"><span style="line-height:1.3em;"><span style="font-size:18px;"><span style="color:#1BB7EE;">ПОПУЛЯРИЗАЦИОННЫЕ ЗАДАЧИ</span></span></span></div></div>
					<ul class="font_8" style="list-style: disc;">
						<li><p style="font-size:14px;" class="font_8"><span style="font-family:arial, helvetica, sans-serif;">Соревнования и фестивали уличных видов спорта любого уровня (от районных до всероссийских)</span></p></li>
					</ul>
				</div>
			</div>
	</div>
	
	<!-- what is rsa nums -->
	
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<div class="s16" id="comp-ion142px">
					<div data-type="bgimage" id="comp-ion142pxbg" class="s16bg" style="background-image: none;">
					</div>
					<div id="comp-ion142pxinlineContent" class="s16inlineContent">
					</div>
				</div>

				<div style="height: 346px;" class="s24" id="comp-ion142w9">
					<div id="comp-ion142w9inlineContent" class="s24inlineContent">
					
					<br />
					
					<div style="width: 402px; position: absolute; left: 278px; top: 0px; height: 39px;" class="s25" id="comp-ion142wj">
						<div class="s25_left s25_shd"></div>
						<div class="s25_right s25_shd"></div>
						<div id="comp-ion142wjbg" class="s25bg"></div>
						<div id="comp-ion142wjinlineContent" class="s25inlineContent"><div style="text-align: center;" class="s6" id="comp-ion142wp"><div class="font_2">СКЕЙТ-ПАРКИ В ЦИФРАХ</div></div></div>
					</div>
				
				<div style="width: 230px; position: absolute; left: 55px; top: 66px;" class="s6" id="comp-ion142x0"><div style="text-align:right; font-size:28px;" class="font_2"><span class="color_11"><span style="font-size:28px;">XSA RAMPS</span></span></div>

				<div style="font-size:16px; text-align:right;" class="font_2"><span class="color_11"><span style="font-size:16px;"><span style="font-style:italic;">Команда профессионалов</span></span></span></div>
				</div><div style="width: 8px; position: absolute; left: 347px; top: 76px; height: 8px;" class="style-ion142x6" id="comp-ion142x4" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142x4"><style type="text/css">.style-ion142x6 svg {width:100%;height:100%;position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;fill:#FFFFFF;fill-opacity:1;stroke:rgba(255, 255, 255, 1);stroke-width:1px;}
				.style-ion142x6 svg * {vector-effect:non-scaling-stroke;}</style><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="-14.285714285714278 -14.285714285714278 228.57142857142856 228.57142857142856" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
				<g><path d="M200 100c0 55.228-44.772 100-100 100S0 155.228 0 100 44.772 0 100 0s100 44.772 100 100z"></path></g>
				</svg></div><div style="width: 8px; position: absolute; left: 599px; top: 76px; height: 8px;" class="style-ion142xc" id="comp-ion142xa" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xa"><style type="text/css">.style-ion142xc svg {width:100%;height:100%;position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;fill:#FFFFFF;fill-opacity:1;stroke:rgba(255, 255, 255, 1);stroke-width:1px;}
				.style-ion142xc svg * {vector-effect:non-scaling-stroke;}</style><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="-14.285714285714278 -14.285714285714278 228.57142857142856 228.57142857142856" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;"><g><path d="M200 100c0 55.228-44.772 100-100 100S0 155.228 0 100 44.772 0 100 0s100 44.772 100 100z"></path></g></svg></div><div style="width: 142px; position: absolute; left: 408px; top: 102px; height: 34px;" class="s28" id="comp-ion142xf" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf"><b class="s28_tl" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.0"></b><b class="s28_tr" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.1"></b><b class="s28_bl" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.2"></b><b class="s28_br" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.3"></b><div id="comp-ion142xfbg" class="s28bg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.4"></div><div id="comp-ion142xfinlineContent" class="s28inlineContent" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.5"><div style="left: 32px; width: 92px; position: absolute; top: 6px;" class="s6" id="comp-ion142xj" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xf.5.$comp-ion142xj"><div style="font-size:18px;" class="font_2"><span style="font-size:18px;"><span class="color_11"><span style="font-style:italic;">Основано</span></span></span></div>
				</div></div></div><div style="width: 130px; position: absolute; left: 412px; top: 58px;" class="s6" id="comp-ion142xu" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xu"><div style="text-align:right; font-size:48px;" class="font_2"><span style="font-size:48px;"><font color="#ffffff">200</font></span><span style="font-size:50px;"><font color="#ffffff">6</font></span></div>
				</div><div style="width: 260px; position: absolute; left: 664px; top: 66px;" class="s6" id="comp-ion142xz" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142xz"><div class="font_2" style="font-size:28px;"><span style="color:#ffffff;">10 ЛЕТ ОПЫТА</span></div>
				<div class="font_2" style="font-size:16px;"><span style="color:#ffffff;">строительства лучших парков</span></div>
				</div><div style="position: absolute; left: 477px; top: 179px; width: 38px; height: 40px;" data-exact-height="40" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142y4" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4"><div style="width: 38px; height: 40px;" id="comp-ion142y4link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0"><div id="comp-ion142y4img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0.0" style="position: relative; width: 38px; height: 40px;"><div class="s5imgpreloader" id="comp-ion142y4imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0.0.0"></div><img id="comp-ion142y4imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142y4.0.0.$image" style="width: 38px; height: 40px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="width: 170px; position: absolute; left: 0px; top: 231px;" class="s6" id="comp-ion142ya" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142ya"><div class="font_2" style="font-size:50px; text-align:center;"><span style="font-size:50px;"><span class="color_11">60</span></span></div>
				<div class="font_2" style="font-size:16px; text-align:center;"><span style="color:#ffffff;">уникальных</span></div>
				<div class="font_2" style="font-size:16px; text-align:center;"><span style="color:#ffffff;">скейт парков</span></div>
				</div><div style="width: 182px; position: absolute; left: 188px; top: 245px;" class="s6" id="comp-ion142yf" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142yf"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11">10000</span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>человек начали&nbsp;</i></font><i style="color:rgb(255, 255, 255);">заниматься</i></div>
				</div><div style="width: 170px; position: absolute; left: 387px; top: 233px;" class="s6" id="comp-ion142yj" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142yj"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11">250</span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>человек</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>на вашей площадке</i></font></div>
				</div><div style="width: 170px; position: absolute; left: 575px; top: 236px;" class="s6" id="comp-ion142z2" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142z2"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11">15</span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>профессионалов</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>в команде</i></font></div>
				</div><div style="width: 190px; position: absolute; left: 763px; top: 234px;" class="s6" id="comp-ion142z7" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142z7"><div style="font-size:50px; text-align:center;" class="font_2"><span style="font-size:50px;"><span class="color_11">40000</span></span><span class="color_11"><span style="font-size:18px;">м²</span></span></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>передовой</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>экспериментальной</i></font></div>
				<div style="font-size:16px; text-align:center;" class="font_2"><font color="#ffffff"><i>базы</i></font></div>
				</div><div style="position: absolute; left: 439px; top: 176px; width: 42px; height: 48px;" data-exact-height="48" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zc" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc"><div style="width: 42px; height: 48px;" id="comp-ion142zclink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0"><div id="comp-ion142zcimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0.0" style="position: relative; width: 42px; height: 48px;"><div class="s5imgpreloader" id="comp-ion142zcimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0.0.0"></div><img id="comp-ion142zcimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zc.0.0.$image" style="width: 42px; height: 48px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_7a8e71689678434f9e7801c06e23cc09.png"></div></div></div><div style="position: absolute; left: 599px; top: 192px; width: 26px; height: 28px;" data-exact-height="28" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zi" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi"><div style="width: 26px; height: 28px;" id="comp-ion142zilink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0"><div id="comp-ion142ziimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0.0" style="position: relative; width: 26px; height: 28px;"><div class="s5imgpreloader" id="comp-ion142ziimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0.0.0"></div><img id="comp-ion142ziimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zi.0.0.$image" style="width: 26px; height: 28px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 629px; top: 192px; width: 26px; height: 28px;" data-exact-height="28" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zn" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn"><div style="width: 26px; height: 28px;" id="comp-ion142znlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0"><div id="comp-ion142znimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0.0" style="position: relative; width: 26px; height: 28px;"><div class="s5imgpreloader" id="comp-ion142znimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0.0.0"></div><img id="comp-ion142znimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zn.0.0.$image" style="width: 26px; height: 28px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 689px; top: 192px; width: 26px; height: 27px;" data-exact-height="27" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zt" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt"><div style="width: 26px; height: 27px;" id="comp-ion142ztlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0"><div id="comp-ion142ztimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0.0" style="position: relative; width: 26px; height: 27px;"><div class="s5imgpreloader" id="comp-ion142ztimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0.0.0"></div><img id="comp-ion142ztimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zt.0.0.$image" style="width: 26px; height: 27px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 659px; top: 192px; width: 26px; height: 27px;" data-exact-height="27" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion142zz" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz"><div style="width: 26px; height: 27px;" id="comp-ion142zzlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0"><div id="comp-ion142zzimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0.0" style="position: relative; width: 26px; height: 27px;"><div class="s5imgpreloader" id="comp-ion142zzimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0.0.0"></div><img id="comp-ion142zzimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion142zz.0.0.$image" style="width: 26px; height: 27px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_38e40c6ecaf345568d689d36554bde9b.png"></div></div></div><div style="position: absolute; left: 815px; top: 175px; width: 40px; height: 48px;" data-exact-height="48" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion14304" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304"><div style="width: 40px; height: 48px;" id="comp-ion14304link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0"><div id="comp-ion14304img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0.0" style="position: relative; width: 40px; height: 48px;"><div class="s5imgpreloader" id="comp-ion14304imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0.0.0"></div><img id="comp-ion14304imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14304.0.0.$image" style="width: 40px; height: 48px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_7d9e7cbbb5324f7a9f29d3d8e4792048.png"></div></div></div><div style="position: absolute; left: 193px; top: 181px; width: 18px; height: 21px;" data-exact-height="21" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430g" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g"><div style="width: 18px; height: 21px;" id="comp-ion1430glink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0"><div id="comp-ion1430gimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0.0" style="position: relative; width: 18px; height: 21px;"><div class="s5imgpreloader" id="comp-ion1430gimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0.0.0"></div><img id="comp-ion1430gimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430g.0.0.$image" style="width: 18px; height: 21px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 193px; top: 201px; width: 18px; height: 21px;" data-exact-height="21" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430m" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m"><div style="width: 18px; height: 21px;" id="comp-ion1430mlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0"><div id="comp-ion1430mimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0.0" style="position: relative; width: 18px; height: 21px;"><div class="s5imgpreloader" id="comp-ion1430mimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0.0.0"></div><img id="comp-ion1430mimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430m.0.0.$image" style="width: 18px; height: 21px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 212px; top: 202px; width: 20px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430t" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t"><div style="width: 20px; height: 22px;" id="comp-ion1430tlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0"><div id="comp-ion1430timg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0.0" style="position: relative; width: 20px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1430timgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0.0.0"></div><img id="comp-ion1430timgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430t.0.0.$image" style="width: 20px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 231px; top: 202px; width: 18px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1430z" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z"><div style="width: 18px; height: 22px;" id="comp-ion1430zlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0"><div id="comp-ion1430zimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0.0" style="position: relative; width: 18px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1430zimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0.0.0"></div><img id="comp-ion1430zimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1430z.0.0.$image" style="width: 18px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 250px; top: 201px; width: 20px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion14315" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315"><div style="width: 20px; height: 22px;" id="comp-ion14315link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0"><div id="comp-ion14315img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0.0" style="position: relative; width: 20px; height: 22px;"><div class="s5imgpreloader" id="comp-ion14315imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0.0.0"></div><img id="comp-ion14315imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14315.0.0.$image" style="width: 20px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 269px; top: 201px; width: 18px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1431c" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c"><div style="width: 18px; height: 22px;" id="comp-ion1431clink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0"><div id="comp-ion1431cimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0.0" style="position: relative; width: 18px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1431cimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0.0.0"></div><img id="comp-ion1431cimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431c.0.0.$image" style="width: 18px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 326px; top: 181px; width: 20px; height: 23px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1431m" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m"><div style="width: 20px; height: 23px;" id="comp-ion1431mlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0"><div id="comp-ion1431mimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0.0" style="position: relative; width: 20px; height: 23px;"><div class="s5imgpreloader" id="comp-ion1431mimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0.0.0"></div><img id="comp-ion1431mimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431m.0.0.$image" style="width: 20px; height: 23px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 345px; top: 202px; width: 18px; height: 22px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1431t" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t"><div style="width: 18px; height: 22px;" id="comp-ion1431tlink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0"><div id="comp-ion1431timg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0.0" style="position: relative; width: 18px; height: 22px;"><div class="s5imgpreloader" id="comp-ion1431timgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0.0.0"></div><img id="comp-ion1431timgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1431t.0.0.$image" style="width: 18px; height: 22px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 345px; top: 181px; width: 18px; height: 23px;" data-exact-height="22" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion14329" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329"><div style="width: 18px; height: 23px;" id="comp-ion14329link" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0"><div id="comp-ion14329img" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0.0" style="position: relative; width: 18px; height: 23px;"><div class="s5imgpreloader" id="comp-ion14329imgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0.0.0"></div><img id="comp-ion14329imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion14329.0.0.$image" style="width: 18px; height: 23px; object-fit: contain;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_118828daa26841beb8f6b550994ce6e4.png"></div></div></div><div style="position: absolute; left: 44px; top: 179px; width: 80px; height: 63px;" data-exact-height="63" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="s5" id="comp-ion1432g" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g"><div style="width: 80px; height: 63px;" id="comp-ion1432glink" class="s5link" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0"><div id="comp-ion1432gimg" data-style="" class="s5img" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0.0" style="position: relative; width: 80px; height: 63px;"><div class="s5imgpreloader" id="comp-ion1432gimgpreloader" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0.0.0"></div><img id="comp-ion1432gimgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ion142w9.0.$comp-ion1432g.0.0.$image" style="width: 80px; height: 63px; object-fit: fill;" src="/wp-content/themes/xsarampas/assets/images/bbdd64_144eb8bb662044428d128609bca3f488.png"></div></div></div></div></div>

			</div>
	</div>

		
	<!-- team -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
			
			<div style="padding: 40px 0;">
				<div>
				<div class="s6" id="comp-ion142sy"><div class="font_2">КОМАНДА</div></div>
				<div class="s6" id="comp-ion142sh"><div style="font-size:36px; text-align:center;" class="font_2"><span style="color:#1BB7EE;"><span style="font-size:36px;">XSA RAMPS</span></span></div></div>
				</div>
			</div>
			
			<!-- carousel -->
			<div style="height: 300px;">
				<ul id="mycarousel" class="jcarousel-skin-tango">
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/taranov_konstantin.jpg" widht="300" height="300" alt="Таранов Константин" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/hromov_vyacheslav.jpg" widht="300" height="300" alt="Хромов Вячеслав" /></li>			
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/grigorash_nikita.jpg" widht="300" height="300" alt="Григораш Никита" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/lobko_grigory.jpg" widht="300" height="300" alt="Лобко Григорий" /></li>			
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/korolevich_yulia.jpg" widht="300" height="300" alt="Королевич Юлия" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/kulagin_denis.jpg" widht="300" height="300" alt="Кулагин Денис" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/bakulin_pavel.jpg" widht="300" height="300" alt="Бакулин Павел" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/antonov_yuri.jpg" widht="300" height="300" alt="Антонов Юрий" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/kirilenko_dariya.jpg" widht="300" height="300" alt="Кириленко Дарья" /></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/team/martynov_viktor.jpg" widht="300" height="300" alt="Мартынов Виктор" /></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="row" style="padding-top: 40px;">
		<div style="text-align: center;" class="s6" id="comp-ion142u8"><div style="font-size:36px; text-align:center; padding: 20px;" class="font_2">КЛИЕНТЫ</div></div>
	</div>
	
	<!-- clients -->
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://www.gazprom.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_43cf8e97b4ae44629e43cc831ddbe900.jpg" alt="" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.sochiolympicpark.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_7e44448392ce46b2bdaf63d98b7c824e-mv2_d_3712_2181_s_2.png" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.redbull.com/ru/ru"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_406ffcfa7dd14ff9a5badffd35a5f98e-mv2.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://krasnodar.beeline.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_b9a642eb4fcb4c08a7a091e428102259-mv2.png" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://rosaski.com/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_1f700ffef76f4e43a56c82667a8b1347-mv2.jpg" alt="" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://sochiautodrom.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_49d6abf216b6484f8e24e6169cc1b75e-mv2.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://molodinfo.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_b01968ae83a5405aba4a6e33879d1b59.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="https://vans.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_646d38d1a942424181054f0b201c9bf8.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://sport.mos.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_2372618d9f1a41d3b1d2784c36e9350e.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.sochiadm.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_8dad374871bd47f3936d687a669b29c2.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.lukoil.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_91c6e998ed5b4688ae30f9ca0eaec420.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://www.dcshoes.com/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_6222fb83a21b496caa3bedb432d08e8c-mv2.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_d5c8cf6903b24aba89586634bd1a0a10-mv2.png" /></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="https://www.krd.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_a776926a32f4453ba207fa5e803391b1.jpg" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://xsastore.com/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_6f31bb2eb1654b6c9ce406f7a3f48b5f.png" /></a></noindex></div>
			<div class="logo"><noindex><a rel="nofollow" href="http://z-games.com.ua/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_562d7b0900e34ad790663a9d9bdc2a66.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
	</div>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
			<div class="logo"><noindex><a rel="nofollow" href="http://develug.ru/"><img src="/wp-content/themes/xsarampas/assets/images/bbdd64_8fe19dc8252c488a81236bc92865fbfc-mv2.jpg" /></a></noindex></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
	</div>
	
	<div class="row">

			<div class="main_1 container">
				
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 main_1_slogan">
					<div>Скейтбординг<br />набирает<br />обороты.</div>
				</div>
				
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 main_1_icons">
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-2.png" width="80" alt="" /></div>
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-4.png" width="80" alt="" /></div>
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-1.png" width="80" alt="" /></div>
					<div class="icons"><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/icon-3.png" width="80" alt="" /></div>
				</div>
			
			</div>
			
			<div class="row container seo_text_block">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<p>Никого уже не удивляет огромное количество людей, которые передвигаются по улицам на досках, велосипедах BMX, самокатах или роликовых коньках. Но улица – не то место, чтобы совершенствовать мастерство. Обеспечить качественные условия для тренировок помогают специализированные площадки – крытые и уличные скейт-парки.</p>
					<p>Скейт-парк – это оборудованная площадка для катания на скейтбордах, роликовых коньках, самокатах, трюковых велосипедах BMX.</p>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				</div>
			</div>
				
			<div class="row container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="delimiter"></div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
			</div>

			<div class="row container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="main_1_slogan_black"><div style="font-weight: bold;">Скейт-парки делятся на несколько категорий:</div></div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
			</div>
			
			<div class="row container list-item">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 main_2">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="list-item-text block_left">
						<h3 class="slogan_black">Стрит-парк</h3>
						<br />
						имитирует уличную архитектуру, отличается универсальностью и подходит для катания на роликах, скейтах, самокатах и велосипедах BMX.					
						<br />
						<div class="delimiter_mini" style="float: left;"></div>
					</div>
				</div>
			</div>

			<div class="row container list-item">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="list-item-text block_right">
						<h3 class="slogan_black">В BMX-парке</h3>
						<br />
						устанавливают высокие радиусные разгонки, рампы, трамплины для амплитудных трюков. Он предназначен для катания на трюковых велосипедах BMX, роликовых коньках, самокатах.
						<br />
						<div class="delimiter_mini" style="float: right;"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 main_3">
				</div>
			</div>

			<div class="row container list-item">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 main_4">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="list-item-text block_left">
						<h3 class="slogan_black">MIX-скейтпарк</h3>
						<br />
						объединяет элементы стрит- и BMX-фристайла, площадки для катания на скейтбордах и велосипедах. Это оптимальный вариант, если нужно учесть интересы разных целевых групп.
						<br />
						<div class="delimiter_mini" style="float: left;"></div>
					</div>
				</div>
			</div>
			
			<div class="row container list-item">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="list-item-text block_right">
						<h3 class="slogan_black">Мини-рампа и пул (имитация бассейна)</h3>
						<br />
						отдельно стоящие сооружения небольшой площади. Подходят для установки на задних дворах, использования на праздничных мероприятиях.
						<br />
						<div class="delimiter_mini" style="float:right;"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 main_5">				
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="block_grey">
						<p>Минимальный размер площадки для скейт-парка – 30 метров в длину. Самые маленькие площадки-рампы занимают около 10 метров в длину и 5 метров в ширину, самые большие – сотни квадратных метров. Размер скейт-парка определяется набором фигур и бюджетом строительства.</p>
					</div>
				</div>
			</div>
		
			<div class="row container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="main_1_slogan_black"><div>Скейт-парки под ключ</div></div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
			</div>

			<div class="row container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="delimiter"></div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
			</div>

			<div class="row container seo_text_block">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<p>Команда XSA Ramps занимается проектированием и строительством скейт-парков под ключ. Мы сами занимаемся экшн-спортом, отлично знаем вашу целевую аудиторию и гарантируем, что парк будет пользоваться популярностью.</p>
					<p>Мы строим деревянные каркасные скейт-площадки любой степени сложности, от мини-рамп и пулов до объектов для соревнований федерального значения. В рамках строительства подбираем оборудование, создаём проект и обслуживаем скейт-парк в течение 2 лет.</p>
					<p>Чтобы обсудить проект и рассчитать предварительную стоимость строительства, обращайтесь по телефону 8-800-500-90-46. </p>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				</div>
			</div>
			
			<div class="row container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="delimiter"></div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				</div>
			</div>
			
			<br /><br /><br /><br /><br /><br />
				
	</div>
	
<?php get_footer();
