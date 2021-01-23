<?php
/**
 * The template for displaying all pages
 * Template Name: Skejt-Parki-Metalicheskie
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
			
			<p style="font-size: 18px;">Многие ошибочно полагают, что металлические скейт-парки гораздо долговечнее и лучше по сравнению с конструкциями из дерева. Мы постараемся развеять этот миф.</p>

			<p style="font-size: 18px;">Любой скейт-парк, сделанный грамотно, по всем технологиям, всегда покрывается фанерой, а не железом, как на детских горках. Если вам предлагают построить скейт-парк с железным покрытием, стоит насторожиться. Данная компания либо просто пытается вас обмануть, либо ничего не знает о данной индустрии. Спросите любого профессионального райдера, и он скажет, что лучшие парки международного уровня покрыты фанерой.</p>

			<p style="font-size: 18px;">Когда мы говорим о металлическом скейт-парке, то имеем в виду только каркас, а не покрытие фигур. Износ зоны катания из фанеры зависит от 3 ключевых факторов:</p>

			<ol style="list-style: disc; font-size: 18px; padding-left: 16px;">
			<li>Качества деревянного материала.</li>
			<li>Качества установки покрытия.</li>
			<li>Частоты использования конкретной фигуры.</li>
			</ol>

			<p style="font-size: 18px;">Это означает, что сам каркас (будь он железный, деревянный или бетонный) не повлияет на степень износа покрытия фигур, которое рано или поздно всё равно придётся поменять.</p>

			<p style="font-size: 18px;">Современные технологии настолько продвинулись вперёд, что сегодня даже деревянные каркасы ничуть не уступают железным по долговечности. Однако многие заказчики ошибочно полагают, что металлические конструкции превосходят деревянные, и поэтому делают выбор в пользу первых.</p>
			<br />
			
			<!-- slider -->
			<div class="flexslider">
			  <ul class="slides">
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_47158d7c71a64f60bc4d52c06f5dcc74-mv2.jpg" alt="Мини рампа XSA Ramps | Роза хутор" /><div class="s14imageItemtitle">Мини рампа XSA Ramps | Роза хутор</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_a8405b9e45cc43cdbbdec73062501886-mv2.jpg" alt="Мини рампа XSA Ramps Лазаревское" /><div class="s14imageItemtitle">Мини рампа XSA Ramps Лазаревское</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_097bf915b9d44c7ea3b386d85a8b021e-mv2.jpg" alt="Анапа Скейт Парк" /><div class="s14imageItemtitle">Анапа Скейт Парк</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_d16bba32a8a44433810d48ebb58eb2e2-mv2_d_3330_1873_s_2.jpg" alt="House of Vans Face & Laces" /><div class="s14imageItemtitle">House of Vans Face & Laces</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_7d8f1a98f2214f159e23e2b0f5ef675d.jpg" alt="Мини Рампа Роза Хутор" /><div class="s14imageItemtitle">Мини Рампа Роза Хутор</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_2d598f3feab54beea39700d723f6291b-mv2.jpg" alt="" /><div class="s14imageItemtitle">Скейт плаза Краснодар</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_613d12fb995f497daf0201f30f8d7e82.jpg" alt="" /><div class="s14imageItemtitle">Плаза Олимпийский парк</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_87d422993c764b72ae129f9924afe184.jpg" alt="" /><div class="s14imageItemtitle">Bmx парк Олимпийский парк</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_c182a69962f04b169d1964b39bac75e5-mv2.jpg" alt="" /><div class="s14imageItemtitle">Скейт плаза ЖК "Панорама"</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_2d598f3feab54beea39700d723f6291b-mv2.jpg" alt="" /><div class="s14imageItemtitle">Скейт плаза Краснодар</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_81c4c390c99d434799ff9f8520c3acd6.jpg" alt="" /><div class="s14imageItemtitle">Трейл парк Краснодар</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_5cc65935e942434e9b97cb853087d48a.jpg" alt="" /><div class="s14imageItemtitle">Краснодар skate plaza</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_d8c89d033d38441b83426b54c3a27f6a-mv2.jpg" alt="" /><div class="s14imageItemtitle">Сочи skate plaza</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_5ea258e0f7744125954bd2a16527f4e5-mv2.jpg" alt="" /><div class="s14imageItemtitle">XSA training park</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_89074546b9c6cf0319edc7f1fe1b40e0.jpg" alt="" /><div class="s14imageItemtitle">Лаго Наки Mega ramp</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_8b923ffb68709525253ec1d2dcc53c65.jpg" alt="" /><div class="s14imageItemtitle">XSA backyard</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_87d422993c764b72ae129f9924afe184.jpg" alt="" /><div class="s14imageItemtitle">BMX парк Олимпийский парк</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_c182a69962f04b169d1964b39bac75e5-mv2.jpg" alt="" /><div class="s14imageItemtitle">Скейт плаза ЖК "Панорама"</div></li>
				</ul>
			</div>
			
			<br />
			
			<h2 style="text-align: center;">Преимущества и недостатки скейт-парков<br />на металлическом каркасе</h2>

			<p style="font-size: 18px;">Так ли уж плохи металлические скейт-парки? Вовсе нет. У них тоже есть свои плюсы:</p>

			<ul style="list-style: disc; font-size: 18px; padding-left: 16px;">
			<li style="font-size: 18px;">Фигуры с металлическим каркасом намного проще разбирать и собирать непрофессионалам.</li>
			<li style="font-size: 18px;">Если вы планируете перевозить скейт-парк с места на место, и вам нужно обеспечить мобильность, то металлические конструкции будут просто незаменимы.</li>
			<li style="font-size: 18px;">Большая часть оборудования для показательных выступлений или проведения шоу изготавливается именно на металлическом каркасе.</li>
			</ul>

			<p style="font-size: 18px;">Однако в ряде других случаев металлические скейт-парки проигрывают деревянным как минимум по 3 параметрам.</p>

			<ul style="list-style: disc; font-size: 18px; padding-left: 16px;">
			<li><p style="font-size: 18px;">Разнообразие фигур</p>
			<p style="font-size: 18px;">Такой материал, как дерево, предоставляет возможность создавать креативные фигуры и элементы. Например, наша команда XSA Ramps использует именно фанеру, поэтому каждый парк уникален, так как является продуктом ручной работы в отличие от заводских металлических скейт-парков.</p>
			</li>
			<li><p style="font-size: 18px;">Звукоизоляция</p>
			<p style="font-size: 18px;">Покрытия из дерева создают намного меньше шума, чем металлические поверхности. Скейт-парки на железном каркасе издают сильный шум при катании, который отвлекает спортсменов и вызывает негативные эмоции у прохожих. Деревянные конструкции не раздражают слух.</p>
			</li>
			
			<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto; font-size: 14px; white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу расчёт</a></div>
			
			<li><p style="font-size: 18px;">Долговечность покрытия</p>
			<p style="font-size: 18px;">Со временем верхний слой, на котором катаются, начинает отходить от металлического каркаса. Это происходит из-за постоянных нагрузок и вибраций. В результате шурупы выкручиваются, между каркасом и поверхностью образуются промежутки, куда попадает влага. Это приводит к потере герметичности и других важных эксплуатационных свойств покрытия из металла.</p>
			<p style="font-size: 18px;">Деревянный каркас фигур скейт-парка гораздо практичнее. Однородность материала каркаса и поверхности позволяет скрепить элементы надолго. При желании вы можете вкрутить в деревянный каркас любое количество саморезов и нанести между ним и верхним покрытием полиуретановый состав для улучшения герметичности.</p>
			</li>
			<li><p style="font-size: 18px;">Долговечность каркаса</p>
			<p style="font-size: 18px;">Компания XSA постоянно эксперемнтирует с материалами и технологиями – так мы развиваемся и становимся профессиональнее. За долгие годы работы с различными материалами мы сделали вывод, что каркасные скейт-парки всё-таки лучше железных. Однако далеко не все заказчики придерживаются мнения специалистов. Для таких клиентов мы предоставляем альтернативу - премиум вариант каркаса на основе лиственницы. Влага не разрушает древесину лиственницы, а делает её ещё более прочной и твёрдой. Взгляните на современную Венецию – много сотен лет назад город был построен на сваях из лиственницы и до сих пор крепко стоит на них. Благодаря своим уникальным свойствам лиственница  сохраняет все положительные свойства деревянных каркасов.</p>
			</li>
			</ul>
			
			
			
			<!-- video -->
			<div class="video">
				<iframe width="100%" height="455" src="https://www.youtube.com/embed/WmHrg503WPU" frameborder="0" allowfullscreen></iframe>
			</div>

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
				<div class="row" style="padding-top: 40px;">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><strong>Наши работы</strong></div>
				</div>
				<div class="row" style="padding-top: 30px;">
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
			<div style="margin: 0 auto;"><a style="text-decoration: underline; color: #000;" href="http://www.xsaramps.com/projects/"><strong>Посмотреть другие работы</strong></a>
			<br /><br /><br />

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
						<div id="comp-ion142wjinlineContent" class="s25inlineContent"><div style="text-align: center;" class="s6" id="comp-ion142wp"><div class="font_2">СКЕЙТ ПАРКИ В ЦИФРАХ</div></div></div>
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
			

			<h2>Мнение райдеров</h2>

			<p style="font-size: 18px; text-align: left;">XSA Ramps регулярно интересуется мнением спортсменов, катающихся как на металлических площадках, так и на деревянных. В большинстве случаев райдеры говорят, что на фигурах с деревянной основой им кататься гораздо комфортнее, приземляться намного мягче, а степень вибрации не вызывает дискомфорта. Мы поддерживаем это мнение и рекомендуем делать выбор в строну фигур для скейт-парка изготовленных из дерева.</p>

			<p style="font-size: 18px; text-align: left;">Если вы решили установить скейт-парк, команда XSA Ramps поможет вам в этом. Мы занимаемся проектированием, разрабатываем индивидуальный дизайн будущей площадки, устанавливаем, даём гарантию и предоставляем обслуживание.</p>

			<p style="font-size: 18px; text-align: left;">Проконсультироваться по всем вопросам вы можете по телефону 8 (800) 500-90-46.</p>

			
			<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Заказать коммерческое предложение</a></div>

			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
