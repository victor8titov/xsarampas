<?php
/**
 * The template for displaying all pages
 * Template Name Posts: kak-sdelat-tramplin-svoimi-rukami
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


				<p>Скейтбординг и катание на BMX-велосипедах с каждым днём становятся всё более популярными. В связи с этим возникает необходимость строительства специальных площадок для занятий этими видами спорта.</p>
				<p>Любой профессиональный спортсмен и новичок мечтают о скейт-парке в своём районе. Жить в непосредственной близости с такой площадкой очень удобно, из-за этого у многих возникает желание построить трек и трамплин для BMX своими руками. Помочь в этом могут многочисленные инструкции из Интернета. Однако если вы всерьёз решили взять это дело под свой контроль, вам нужно основательно подготовиться. Вам нужно будет сделать правильные расчёты заездов и транзита, подготовить грамотный чертёж, купить качественные материалы. Особое внимание уделите расчёту радиуса, так как от этого параметра зависит возможность выполнения разнообразных трюков. Предусмотреть всё это крайне сложно, поэтому неопытному любителю скейтбординга сделать «работающий» трек будет очень сложно.</p>

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
				
				<p>Трамплин является важным и незаменимым атрибутом скейт-парка. Сегодня существует несколько видов этого элемента, которые позволяют выполнять зрелищные трюки. Как сделать трамплин для скейта и избежать ошибок? Вы достигнете этой цели, только если обратитесь к профессионалам. Многих в этом решении оттолкнёт отсутствие необходимой суммы. Однако можно попросить выступить в качестве спонсора администрацию города или населённого пункта. Сегодня это достаточно распространённая практика. Городское руководство, как правило, идёт навстречу молодым спортсменам и старается всячески поддерживать их начинания и инициативу.</p>
				<p>Только профессионалам под силу создать качественный спортивный объект, который поможет раскрыть таланты новичков и улучшить результаты профессионалам. В России таких компаний немного, и команда XSA входит в это число.</p>

				
				<br />
				
				<div style="margin: 0 auto;"><a style="text-decoration: underline; color: #000;" href="http://www.xsaramps.com/projects/"><strong>Посмотреть другие работы</strong></a>
				</div>
				
				<br /><br />
				
				<p>Более 11 лет мы строим парки, рампы и мини-рампы. Наши спортсмены и мастера в одном лице постоянно получают новые знания, осваивают новые технологии строительства, участвуют в международных программах, берут обратную связь от скейтбордистов, катающихся на построенных нами площадках.
				<p>Мы разработаем уникальный проект для вашего района, который удовлетворит запросы спортсменов разного уровня мастерства и направления.
				<p>Заказать строительство рампы и скейт-парка вы можете, позвонив по телефону 8-800-500-90-46.

				<br />

				<div style="text-align: center; padding: 20px 0; margin: 0 auto;"><a style="text-align: center; margin: 0 auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Расчитать стоимость скейт парка</a></div>
				
				<br />
				
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php get_sidebar(); ?></div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
