<?php
/**
 * The template for displaying all pages
 * Template Name: Skejt-Parki-Extrim-Parki
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

			<a style="text-align: center; margin: 30px auto;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу расчёт</a>	
	
			<br />
			
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

			<a style="text-align: center; margin: 30px auto 100px;  white-space: nowrap; width: 300px;" href="http://www.xsaramps.com/projects/" class="s7link-ver-2">Посмотреть другие работы</a>

			<?php get_template_part('template-parts/parts-main-page/skatepark_in_numbers'); ?>

			<a style="text-align: center; margin: 80px auto 30px;  white-space: nowrap; width: 300px;" href="/feedback" class="s7link-ver-2">Хочу консультацию по скейт-паркам</a>	
			<br /><br />
			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
