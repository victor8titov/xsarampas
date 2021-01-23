<?php
/**
 * The template for displaying all pages
 * Template Name Posts: chto-takoe-rampa-i-minirampa
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
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					//if ( comments_open() || get_comments_number() ) :
					//	comments_template();
					//endif;

				endwhile; // End of the loop.
				?>
				
				<p>Понятие «рампа» имеет множество определений, но для скейтбордистов и велосипедистов это спортивный объект, позволяющий выполнять различные трюки. Иногда рамуа называют халфпайпом (англ. half pipe – «половина трубы»). В действительности, если взглянуть на первые чертежи мини-рамп и рамп можно увидеть половинчатую трубу. За счёт гравитации скейтбордист двигался по скатам и при каждом перемещении мог совершать разнообразные трюки.</p>
				
				<p></p>
				
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="http://www.xsaramps.com/wp-content/themes/xsarampas/assets/images/rampy-1.jpg" width="90%" />
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<img src="http://www.xsaramps.com/wp-content/themes/xsarampas/assets/images/rampy-2.jpg" width="90%" />
					</div>
				</div>
				
				<p></p>
				
				<p>С 80-х годов рампы претерпели некоторые изменения: между наклонными стенками дно расширилось. Благодаря этому у спортсменов после приземления появилась возможность восстановить равновесие и успеть подготовиться к новому трюку. Именно такие чертежи рамп для скейтборда используются сегодня в нашей стране.</p>

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
					<h6 class="font_6" style="font-size: 16px; line-height: 1.3em;"><span style="font-size: 16px;">Минирампа курорт Роза Хутор?</span></h6>
					</div>
					</div>
				</div>
				
				<br />

				<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Расчитать стоимость рампы</a></div>
				
				<br />

				<h2>Описание мини-рамп</h2>
				
				<p>Ещё одна популярная разновидность – мини-рампы. Изначально их с рампами относили к разным фигурам, но сегодня они являются аналогами. Их различает лишь высота радиусов. Эти элементы не занимают много места, в отличие от скейт-парка, и не нуждаются в создании фундамента. Однако вместе с этим они являются отличными тренировочными объектами для райдеров и скейтбордистов.</p>

				<p>С каждым годом спрос на рампы и мини-рампы растёт в связи с популяризацией экстремальных видов спорта. Нередко спортсмены задаются вопросом, из чего делают рампы для скейтборда и как построить их своими руками.</p>

				<p>Если вы надумали взять решение этого вопроса под свой контроль, первым делом найдите грамотные чертежи таких объектов. Крайне важно правильно рассчитать размеры рампы для скейтбординга. Затем позаботьтесь о приобретении качественных материалов. Бетон – более долговечный материал, по сравнению с фанерой, но вызывает немалую сложность в реализации. К тому же далеко не все спортсмены предпочитают кататься на бетонных рампах. Для создания рампы фанера используется намного чаще. Это более простой, удобный материал, любимый райдерами и скейтбордистами.</p>

				<p>При подготовке чертежей уделите особое внимание расчётам радиуса, транзита и заездов. От этих параметров будет зависеть качество выполняемых трюков. Выполнить эти расчёты достаточно сложно, поэтому намного проще и правильнее будет обратиться к профессионалам с многолетним опытом.</p>

				<p>Команда XSA Ramps более 11 лет занимается созданием точных чертежей мини-рамп для скейт-парков и их возведением. Мы подготовим индивидуальный проект исходя из ваших пожеланий и бюджета.</p>

				<p>Заказать разработку чертежей мини-рамп для скейта вы можете по телефону 8-800-500-90-46.</p>

				<br />
				
				<div style="margin: 0 auto;"><a style="text-decoration: underline; color: #000;" href="http://www.xsaramps.com/projects/"><strong>Посмотреть другие работы</strong></a>
				</div>
				
				<br /><br />
			
				
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php get_sidebar(); ?></div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
