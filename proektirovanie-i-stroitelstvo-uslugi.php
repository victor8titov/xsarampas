<?php
/**
 * The template for displaying all pages
 * Template Name: Proektirovanie-i-Stroitelstvo-Uslugi
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
				//	comments_template();
				//endif;

			endwhile; // End of the loop.
			?>
			
			<div class="entry-content">

				<div class="flexslider">
				<ul class="slides">
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_896157b6124640ce8795c91fcb4da313.jpg" alt="Скейт-парк проект XSA Ramps, фото 1" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_ca83ad328939431690ba1ea3a145ffe4.jpg" alt="Скейт-парк проект XSA Ramps, фото 2" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_6337ec08e8f24a15bc5d69c91bdbc078.jpg" alt="Скейт-парк проект XSA Ramps, фото 3" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_a8866f1db92149d3a50faee803d6b66f.jpg" alt="Скейт-парк проект XSA Ramps, фото 4" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_ca498945e42b49beaba090e93012856d.jpg" alt="Скейт-парк проект XSA Ramps, фото 5" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_a4b05c66e3a547e58e03dfe4156549ed.jpg" alt="Скейт-парк проект XSA Ramps, фото 6" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_8ddcc832953a44829ea3a10a2339312a.jpg" alt="Скейт-парк проект XSA Ramps, фото 7" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_6b1aff87072740acb54734479be688df.jpg" alt="Скейт-парк проект XSA Ramps, фото 8" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_c857680a086c4cbf8b5c704b31a8ea00.jpg" alt="Скейт-парк проект XSA Ramps, фото 9" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_05a79bf5c5a24a48aa22e097d4413c84.jpg" alt="Скейт-парк проект XSA Ramps, фото 10" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_5c0529fb05844e2785f647c4d9b2a6d8.jpg" alt="Скейт-парк проект XSA Ramps, фото 11" /><div class="s14imageItemtitle"></div></li>
				 <li><img src="/wp-content/themes/xsarampas/assets/images/sliders/uslugi/bbdd64_1be55c4ab46c494e829feb1792c40fe3.jpg" alt="Скейт-парк проект XSA Ramps, фото 12" /><div class="s14imageItemtitle"></div></li>
				</ul>
				</div>

				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				 <div class="s6"><h2 class="font_8"><span style="font-size: 16px; line-height: 1.2em; font-weight: bold;">ДИЗАЙН</span></h2></div>
				 <div class="s39"><div class="s39line"></div></div>
				 <div class="s6" style="padding: 12px 0 20px 0;">
				  <p class="font_8 font_14" style="margin-bottom: 5px;">При проектировании и в процессе строительства наша команда сама полна энтузиазма по отношению к скейт-площадкам от XSA ramps, потому что они настолько креативные, удобные и красивые, что в них хочется прогрессировать и кататься целыми днями.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Подход к дизайну и продумыванию всех линий, используемых в скейт-площадках — основная задача нашей компании.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Мы идем в ногу со временем и используем передовые мировые разработки в фигурах, чтобы дать нашим клиентам и катающимся место, которое превзойдет их ожидания.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">А сама скейт-площадка идеально впишется в архитектуру города и станет одним из мест городского дизайна, которое будет пользоваться популярностью у обычных жителей вашего города.</p>
				 </div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				 <div class="s6"><h2 class="font_8"><span style="font-size: 16px; line-height: 1.2em; font-weight: bold;">КАЧЕСТВО СТРОИТЕЛЬСТВА</span></h2></div>
				 <div class="s39"><div class="s39line"></div></div>
				 <div class="s6" style="padding: 12px 0 20px 0;">
				  <p class="font_8 font_14" style="margin-bottom: 5px;">После 14 лет успешной экспериментальной работы и изготовления более 40 скейт-площадок по всей России, мы по-настоящему стали профессионалами и лидерами в этой индустрии. Наша команда строителей, проектировщиков и дизайнеров окончательно сформировалась. В нее вошли лучшие специалисты в своем деле со всех частей России и стран СНГ.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">От Киева до Нового Уренгоя, от Санкт-Петербурга до Краснодара. Каждый из которых профессионально катается на доске, велосипеде или роликах. И наши знания, профессионализм, креативность позволяют получать на выходе качественный продукт, который так ценится большинством райдеров.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Мы используем технологии сборки фигур в 2 раза прочнее и надежнее.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Даем гарантию 2+1, что в 2,5 раза больше, чем гарантия на существующем рынке.</p>
				 </div>
				</div>
				</div>
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				 <div class="s6"><h2 class="font_8"><span style="font-size: 16px; line-height: 1.2em; font-weight: bold;">ГАРАНТИЯ ОБСЛУЖИВАНИЕ</span></h2></div>
				 <div class="s39"><div class="s39line"></div></div>
				 <div class="s6" style="padding: 12px 0 20px 0;">
				  <p class="font_8 font_14" style="margin-bottom: 5px;">На наши скейт-площадки распространяется гарантия 2+1</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">2 года бесплатно + 1 год в половину цены годового обслуживания.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Также многие заказчики впервые сталкиваются с задачей поставки скейт-площадки и проблемой, с чего начать ее оборудование.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Ответы на все эти вопросы и решение этих задач входит в нашу услугу:</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">- Какое основание площадки выбрать</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">- Функционирование площадки</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">- Безопасность и правила парка</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">- Проведение соревнований, обучающих мастер классов, показательных выступлений</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">&nbsp;</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">&nbsp;</p>
				 </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				 <div class="s6"><h2 class="font_8"><span style="font-size: 16px; line-height: 1.2em; font-weight: bold;">ПРОЕКТИРОВАНИЕ</span></h2></div>
				 <div class="s39"><div class="s39line"></div></div>
				 <div class="s6" style="padding: 12px 0 20px 0;">
				  <p class="font_8 font_14" style="margin-bottom: 5px;">У нас можно купить умные скейт-площадки, которые заставляют думать и развивать свое воображение и творчество всем занимающимся в них: от новичка до профессионала.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Мы создаем 3-е место между учебой и домом.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Место, где молодежь проводит большую часть своего времени.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Наши скейт-площадки в 2 раза больше при той же стоимости.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">А гарантия в 2 раза дольше, что говорит о надежности и долговечности наших фигур.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">И самое главное – наша команда не занимается только закладкой фундамента (изготовление купленной скейт-площадки), а берет под свой контроль все мероприятия и жизнь в парке.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">А это 2/3 от работы скейт площадки.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">Наша профессиональная команда проводит в нем обучающие семинары, показательные выступления и соревнования любого уровня.</p>
				  <p class="font_8 font_14" style="margin-bottom: 5px;">&nbsp;</p>
				 </div>
				</div>
				</div>

				<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу расчёт</a></div>

				<br /><br />
				
				<!-- видео -->
				<div class="video" style="width: 100%; margin: 0; padding: 0;">
					<iframe width="100%" height="455" src="https://www.youtube.com/embed/WmHrg503WPU" frameborder="0" allowfullscreen></iframe>
				</div>						
				

				
			</div>
			
			<div class="row">
				<div style="height: 29px; margin: 10px 0;" class="s32" id="comp-ion142hg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg"><div id="comp-ion142hgcont" class="s32cont" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0"><div id="comp-ion142hgline" class="s32line" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0.0"></div></div></div>
			</div>
	
			<div class="row">
					
					<h2 class="main_h1">Скейт-парки и скейт площадки</h2>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div style="width: 294px; line-height: 36px;" class="s6" id="comp-ioqw4zpp" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqvwuw0.1.$mediairjh6tf81/=1$mediairjh6tf81.1.$comp-ioqxt60d.0.$comp-ioqw4zpp"><p class="font_8" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;">ГОСУДАРСТВЕННЫМ ЗАКАЗЧИКАМ</span></span></p>
							
							<p class="font_8 font_18"><span style="font-size:18px;"><span style="font-weight:bold;"><span class="wixGuard">&#8203;</span></span></span></p>
							
							<p class="font_8 font_14"><span style="font-size:14px;">Приобретение скейт-парка для нужд</span></p>
							<p class="font_8 font_14"><span>муниципального образования,</span></p>
							<p class="font_8 font_14"><span>один из самых частых способов&nbsp;</span></p>
							<p class="font_8 font_14"><span>работы с нашей организацией.</span></p>
							<p class="font_8 font_14"><span>Аукционная документация, грамотное ТЗ</span></p>
							<p class="font_8 font_14"><span>в кратчайшие сроки -&nbsp;основная проблема</span></p>
							<p class="font_8 font_14"><span>с которой сталкивается  государственный заказчик.</span></p>
							
							<br>
							
							<a href="/goszakaz" class="s7link-ver-2">Подробнее</a>
						
						</div>			
						
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div style="width: 290px;" class="s6" id="comp-ioqwf0rv" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqvwuw0.1.$mediairjh6tf81/=1$mediairjh6tf81.1.$comp-ioqxt60d.0.$comp-ioqwf0rv"><p class="font_8" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;">КОРПОРАТИВНЫМ КЛИЕНТАМ</span></span></p>
							
							<p class="font_8 font_14" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;"><span class="wixGuard">&#8203;</span></span></span></p>
							
							<p class="font_8 font_14"><span>У вас крупное массовое мероприятие&nbsp;</span></p>
							<p class="font_8 font_14"><span>&nbsp;и вы хотите экстрима, но не знаете,</span></p>
							<p class="font_8 font_14"><span>где заказать качественное шоу с готовыми&nbsp;фигурами под ключ?</span></p>
							<p class="font_8 font_14"><span>Вы застройщик жилого квартала и вы ищите новые идеи взамен однотипных детских площадок?</span></p>
							<p class="font_8 font_14"><span>Вы хотите сделать свой бизнес в экшн спорте и открыть</span></p>
							<p class="font_8 font_14"><span>коммерческий скейт-парк?</span></p>
							<p class="font_8 font_14"><span>Мы то, что вам нужно...</span></p>
							
							<br>
							
							<a href="/korporativzakaz" class="s7link-ver-2">Подробнее</a>
							
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div style="width: 294px;" class="s6" id="comp-ioqwf8ll" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqvwuw0.1.$mediairjh6tf81/=1$mediairjh6tf81.1.$comp-ioqxt60d.0.$comp-ioqwf8ll"><p class="font_8" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;">ЧАСТНЫМ ЗАКАЗЧИКАМ</span></span></p>
							
							<p class="font_8 font_14" style="font-size:16px;"><span style="font-size:16px;"><span style="font-weight:bold;"><span class="wixGuard">&#8203;</span></span></span></p>
							
							<p class="font_8 font_14"><span>Если вы мечтаете о минирампе на своем заднем дворе&nbsp;</span></p>
							<p class="font_8 font_14"><span>или хотите заполучить переносную перилку&nbsp;</span></p>
							<p class="font_8 font_14"><span>с регулируемой высотой для отточки</span></p>
							<p class="font_8 font_14"><span>трюков, вы попали по адресу…</span></p>
							
							<br>
							
							<a href="/chastniyzakaz" class="s7link-ver-2">Подробнее</a>
							
						</div>			
					</div>
				</div>
			
			<div class="row">
				<div style="height: 29px; margin: 10px 0;" class="s32" id="comp-ion142hg" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg"><div id="comp-ion142hgcont" class="s32cont" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0"><div id="comp-ion142hgline" class="s32line" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$zrq61.1.$comp-ioqxryks.0.$comp-ion142hg.0.0"></div></div></div>
			</div>		
			
			<div style="text-align: center; padding: 20px 0; margin: 30px auto 0 auto;"><a style="text-align: center; margin: 0 auto; white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу консультацию по скейт-паркам</a></div>

			<!-- наши работы -->
			<style>
			.projects .flexslider .slides img, .flexslider2 .slides img {
				height: 200px;
				-moz-user-select: none;
			}
			.projects .flexslider .slides > li, .flexslider2 .slides > li{
				max-height: 220px !important;
			}
			</style>
			
			<div class="projects">
				<div class="row" style="padding-top: 20px;">
				
				<h3 style="text-align: center;">Наши работы</h3>
				
				<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><strong>Наши работы</strong></div> -->
				
				</div>
				<div class="row" style="padding-top: 40px;">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<?php echo do_shortcode('[gallery type="flexslider" ids="277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,298,297,296"]'); ?>
				<h6 class="font_6" style="font-size: 16px; line-height: 1.3em;"><span style="font-size: 16px;">House of Vans Москва</span></h6>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<?php echo do_shortcode('[gallery type="flexslider" ids="303,304,305,306,307,308,309,310,311,312,313"]'); ?>
				<h6 class="font_6" style="font-size: 16px; line-height: 1.3em;"><span style="font-size: 16px;">XSA парк Краснодар</span></h6>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

				<?php echo do_shortcode('[gallery type="flexslider" ids="321,322,323,324,325"]'); ?>
				<h6 class="font_6" style="font-size: 16px; line-height: 1.3em;"><span style="font-size: 16px;">Минирампа курорт Роза Хутор​</span></h6>
				</div>
				</div>
			</div>

			<br /><br />
			<div style="margin: 0 auto;">

			<div style="text-align: center; padding: 20px 0; margin: 30px auto 0 auto;"><a style="text-align: center; margin: 0 auto; white-space: nowrap; width: 300px;" href="http://www.xsaramps.com/projects/" class="s7link-ver-2">Посмотреть другие работы</a></div>
						
			<br /><br /><br /><br />
			
			<!-- скейт-парки в цифрах -->
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
				<div class="font_2" style="font-size:16px; text-align:center;"><span style="color:#ffffff;">скейт-парков</span></div>
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
			
<!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
