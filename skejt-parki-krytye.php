<?php
/**
 * The template for displaying all pages
 * Template Name: Skejt-Parki-Krytye
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

			<!-- video -->
			<div class="video">
				<iframe width="100%" height="455" src="https://www.youtube.com/embed/WmHrg503WPU" frameborder="0" allowfullscreen></iframe>
			</div>

			<br />
			
			<p style="text-align: left; font-size: 18px;">Компания XSA Ramps выполняет строительство крытых скейт-парков на заказ.</p>

			<p style="text-align: left; font-size: 18px;">Закрытый скейт-парк необходим не только для профессиональных спортсменов, но и для тех, кто только начал развиваться в экшн-спорте. Начинающим спортсменам хорошие условия для круглогодичных тренировок нужны не меньше, чем профессионалам.</p>
			
			<div style="text-align: center; padding: 20px 0 40px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу расчёт</a></div>
			
			<p style="text-align: left; font-size: 18px;">Строительство крытого скейт-парка является сегодня весьма актуальной темой. Это связано с тем, что скейтбординг и BMX-фристайл включили в 2016-2017 гг. в олимпийскую программу. Первая Олимпиада состоится в 2020 году в Токио.</p>

			<br />
			
			<!-- slider -->
			<div class="flexslider">
			  <ul class="slides">
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_47158d7c71a64f60bc4d52c06f5dcc74-mv2.jpg" alt="Мини рампа XSA Ramps | Роза хутор" /><div class="s14imageItemtitle">Мини рампа XSA Ramps | Роза хутор</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_a8405b9e45cc43cdbbdec73062501886-mv2.jpg" alt="Мини рампа XSA Ramps Лазаревское" /><div class="s14imageItemtitle">Мини рампа XSA Ramps Лазаревское</div></li>
					<li><img src="<?php echo get_site_url();?>/wp-content/themes/xsarampas/assets/images/sliders/main/bbdd64_097bf915b9d44c7ea3b386d85a8b021e-mv2.jpg" alt="Анапа Скейт-Парк" /><div class="s14imageItemtitle">Анапа Скейт-Парк</div></li>
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

			<p style="text-align: left; font-size: 18px;">Не секрет, что для тренировок в открытых скейт-парках необходимы благоприятные погодные условия. Во время дождя, снега или в холодное время года  тренировки невозможны. А без систематических занятий нельзя обеспечить гарант развития спортсменов. Исходя из этого, для формирования достойной сборной региона или города необходимо наличие крытого скейт-парка.</p>
			
			<p style="text-align: left; font-size: 18px;">Крайне важно создать для спортсменов условия для их прогресса. Перерывы на зимние каникулы, длящиеся 3-4  месяца, не только не позволят развиваться, но и негативно скажутся на уровне мастерства спортсменов.</p>

			<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу консультацию по скейт-паркам</a></div>
			
			<h2>Как построить закрытую площадку</h2>

			<p style="text-align: left; font-size: 18px;">Построить крытый скейт-парк – задача важная. Здесь необходим внимательный подход.</p>

			<p style="text-align: left; font-size: 18px;">1. Выберите помещение для будущей площадки</p>

			<p style="text-align: left; font-size: 18px;">При выборе обратите внимание на размер помещения, вентиляцию, возможность создания раздевалок и туалетов, наличие места для размещения зрительских трибун, освещение и самое главное – наличие высоких потолков.</p>

			<p style="text-align: left; font-size: 18px;">2. Выберите фигуры</p>

			<p style="text-align: left; font-size: 18px;">В закрытых скейт-парках можно установить следующие фигуры:</p>

			<table width="100%">
			<tr>
			<td width="50%">
				<ul style="font-size: 18px; text-align: left; padding-left: 18px; list-style: disc;">
					<li>Фанбокс ВМХ.</li>
					<li>Секция ВМХ-разгонок.</li> 
					<li>Секция степ-ап с квотерпайпом и фанбоксами.</li> 
					<li>Спайн.</li> 
					<li>Cкейт-фанбокс с пирамидой.</li>
					<li>Памптрек.</li>
					<li>Стрит-хабба.</li>
					<li>Квотерпайп с воллрайдом.</li>
					<li>Скейтбордическая разгонка с воллрайдом.</li> 
					<li>Поледжем.</li> 
					<li>Трамплин.</li> 
					<li>Грайнд-бокс.</li> 
				</ul>
			</td>
			<td width="50%">
				<ul style="font-size: 18px; text-align: left; padding-left: 18px; list-style: disc;">
					<li>Мини-рампа.</li> 
					<li>Миди-рампа.</li> 
					<li>Боул.</li> 
					<li>Воллрайд.</li> 
					<li>Секция скейт-разгонок с квотерпайпом.</li> 
					<li>Прямая перила.</li> 
					<li>Квотерпайп с хип-трансфером.</li> 
					<li>Прямой бенк с хип-трансфером.</li> 
					<li>Скейт-плаза.</li> 
					<li>Мануалбокс.</li> 
					<li>Скейт-книжка.</li>
					<li>Скейт-фанбокс и т. д.</li>
				</ul>
			</td>
			</tr>
			</table>
			
			<br />
			
			<p style="text-align: left; font-size: 18px;">Перечень оборудования для крытого парка и его стоимость вы можете получить, заказав коммерческое предложение в компании XSA RAMPS.</p>
			
			<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Заказать коммерческое предложение</a></div>

			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
