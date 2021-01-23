<?php
/**
 * The template for displaying all pages
 * Template Name: Skejt-Parki
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3 style="text-align: center;">Наши работы</h3></div>
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
			<a style="text-align: center; margin: 30px auto;  white-space: nowrap; width: 300px;" href="http://www.xsaramps.com/projects/" class="s7link-ver-2">Посмотреть другие работы</a>

			<br /><br /><br /><br />
			
			<!-- video -->
			<div class="video">
				<iframe width="100%" height="455" src="https://www.youtube.com/embed/WmHrg503WPU" frameborder="0" allowfullscreen></iframe>
			</div>
			
			<a style="text-align: center; margin: 30px auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу расчёт</a>
			
			<p style="font-size: 18px; text-align: left;">Люди всех возрастов всегда находятся в поиске острых ощущений, а активное подрастающие поколение – особенно. Поэтому такой популярностью по всему миру пользуются дисциплины экшн-спорта – скейтбординг, ролики, BMX, самокаты.</p>
			<p style="font-size: 18px; text-align: left;">К сожалению, даже в больших городах молодые люди не всегда могут найти место для занятий экстримом. Что уж говорить о небольших населенных пунктах, где зачастую сложно отыскать даже просто ровную дорогу для езды на роликах. Что делать в такой ситуации? Купить оборудование для скейт-парков. Тем самым вы предоставите молодёжи прекрасную возможность вести здоровый образ жизни.</p>
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
			
			<p style="font-size: 18px;text-align: left;">Выбрать оборудование для скейт-парка вам поможет опытный специалист, знающий, какое оборудование необходимо именно вам. Выбор конкретного скейт-оборудования зависит от ряда факторов:</p>
			
			<ul style="font-size: 18px; padding-left: 16px; text-align: left; list-style: disc;">
				<li>Преобладающие направления спорта.</li>
				<li>Месторасположение площадки.</li>
				<li>Площадь парка.</li>
				<li>Уровень мастерства катающихся.</li>
				<li>Бюджет.</li>
			</ul>
			
			<p style="font-size: 18px;text-align: left;">Универсального ответа на вопрос, какое купить оборудование для скейт-парка, нет. Точный ответ можно получить только после анализа.</p>
			
			<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу консультацию по скейт-паркам</a></div>
			<br />
			
			<p style="font-size: 18px;text-align: left;">Оборудование скейт-парка – это фигуры, которые располагаются на площадке:</p>
			
			<table width="100%">
			<tr><td width="50%">
			<ul style="font-size: 18px; padding-left: 16px; list-style: disc; text-align: left;">
				<li>Фанбокс ВМХ.</li>
				<li>Секция ВМХ-разгонок.</li>
				<li>Секция степ-ап с квотерпайпом и фанбоксами.</li>
				<li>Спайн.</li>
				<li>Cкейт-фанбокс с пирамидой.</li>
				<li><a href="http://www.xsaramps.com/katalog/pamp-treki-bmx/">Памптрек</a>.</li>
				<li>Стрит-хабб.</li>
				<li>Квотерпайп с воллрайдом.</li>
				<li>Скейтбордическая разгонка с воллрайдом.</li>
				<li>Поледжем.</li>
				<li>Трамплин.</li>
				<li>Грайнд-бокс.</li>
			</ul>
			</td><td width="50%">
			<ul style="font-size: 18px; padding-left: 16px; list-style: disc; text-align: left;">
				<li>Мини-рампа.</li>
				<li>Миди-рампа.</li>
				<li>Боул.</li>
				<li>Воллрайд.</li>
				<li>Секция скейт-разгонок с квотерпайпом</li>
				<li>Прямая перила.</li>
				<li>Квотерпайп с хип-трансфером.</li>
				<li>Прямой бенк с хип-трансфером.</li>
				<li>Скейт-плаза.</li>
				<li>Мануалбокс.</li>
				<li>Скейт-книжка.</li>
				<li>Скейт-фанбокс и т. д.</li>
			</ul>
			</td>
			</tr></table>

			<div class="seo-text-preview" style="margin-top: 40px;">

				<p>Строительство скейт-парков является настоящей наукой, постичь которую дано не каждому, так как здесь необходимо быть профессионалом во всём. К сожалению, не все современные площадки соответствуют необходимым требованиям. Связано это с тем, что владелец такого бизнеса закрывает глаза на техническое задание.</p>
				<p>Чтобы вы не вошли в число тех, кто пострадал от деятельности неблагонадёжных поставщиков скейт-парков, компания ХSA Ramps подготовила для вас рекомендации по данному вопросу. Мы учитывали наш 10-летний опыт в сфере строительства и раскрутки скейт парков.</p>

			</div>

			<div class="seo-text" style="display: block">

				<h2>Как купить скейт-парк</h2>

				<ul style="list-style: disc; margin-left: 18px; font-size: 18px;">
					<li><p>Если вы решили купить скейт-парк, первым делом обратите внимание на поставщика</p>
						<p>Важно, чтобы он разбирался в строительстве спортивных объектов и скейт парков. Идеальный скейт-парк сможет построить строитель, который сам профессионально занимался скейтбордингом, агрессивными роликами или катался на велосипеде BMX.</p>
						<p>Если радиус, угол или линия будут выставлены неправильно, фигура не будет работать. Обычный строитель может не обратить на это внимание, однако такой промах испортит репутацию всего скейт-парка и сделает его небезопасным.</p>
					</li>
					<li><p>Попросите фотографии «до» и «после».</p>
						<p>Если скейт парк построила действительно профессиональная компания, то яркая и красивая картинка со дня открытия или макет парка, которую вы увидели на их сайте, мало чем будет отличаться от реальных фото, сделанных через год или два.</p>
					</li>
				</ul>
				
			</div>

			<div class="seo-text" style="display: block">
				
				<h2>Можно ли купить скейт-площадку без участия райдеров</h2>

				<p>Без участия райдеров купить скейт-площадку надлежащего качества не получится. Очень важно получить от них рекомендации по выбору поставщика и пожелания по поводу будущей площадки. Ваша задача – тщательно проанализировать информацию и прислушаться к мнению профессионалов.</p>

				<p>На какие параметры обращать внимание<br />при строительстве скейт-парка</p>

				<p>То, сколько стоит скейт-парк, не является главным критерием, который поможет выбрать застройщика. Всегда обращайте внимание на три компонента:</p>

				<ol style="list-style: disc; margin-left: 18px; font-size: 18px;">
					<li>Материалы. Очень важно то, из какого материала будут сделаны фигуры, и количество слоёв фанеры.</li>
					<li>Гарантия. Чем больше гарантия, тем продавец увереннее в своём товаре, соответственно, и площадка прослужит дольше.</li>
					<li>Деятельность компании. Главная задача обычного продавца – продать скейт-парк и заработать. При этом продукт может быть не самого лучшего качества. Когда компания проводит мероприятия и чемпионаты, поддерживает спортсменов и занимает активную социальную позицию, то она готова предоставить клиентам самый лучший продукт.</li>
				</ol>

				<p>XSA Ramps поможет стать обладателем качественной и безопасной скейт-площадки. Получить консультацию вы можете по бесплатной горячей линии 8 (800) 500-90-46.</p>
				
				<br />
				<br />
			</div>      

			
			<p style="font-size: 18px;text-align: left;">Если вас интересует полный список оборудования для скейт-парка и стоимость – <a href="http://www.xsaramps.com/feedback/">закажите</a> коммерческое предложение в компании XSA RAMPS.</p>
			
			<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Заказать коммерческое предложение</a></div>

			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
