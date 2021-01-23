<?php
/**
 * The template for displaying all pages
 * Template Name: Team
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
			<header class="entry-header font5">
				<h1 class="entry-title">Команда</h1>		
			</header>
			<div class="s39"><div class="s39line"></div></div>
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div>

			<?php if ($_SERVER["REQUEST_URI"] == '/about/') { ?>
			<div class="row s6" style="padding: 40px 0">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p style="font-size:16px;"><span style="font-family:courier new,courier-ps-w01,courier-ps-w02,courier-ps-w10,monospace;">После 11 лет успешной экспериментальной работы и изготовления более 60 скейт парков по всей России, мы по-настоящему стали профессионалами и лидерами в этой индустрии.</span></p>
					<p style="font-size:16px;"><span style="font-family:courier new,courier-ps-w01,courier-ps-w02,courier-ps-w10,monospace;">Наша команда строителей, проектировщиков и дизайнеров окончательно сформировалась и в нее вошли лучшие специалисты в своем деле со всех частей России и стран СНГ.</span></p>
					<p style="font-size:16px;"><span style="font-family:courier new,courier-ps-w01,courier-ps-w02,courier-ps-w10,monospace;">От Киева до Нового Уренгоя, от Санкт-Петербурга до Краснодара. Каждый из которых профессионально катается на доске, велосипеде или роликах. И наши знания, профессионализм, креативность позволяют получать на выходе качественный продукт, который так ценится большинством райдеров.</span></p>
				</div>
			</div>
			<?php }?>
			
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="team-item"><a href="/about/"><img src="/wp-content/themes/xsarampas/assets/images/team/trener.jpg" width="134" height="134" alt="" /></a><span class="font_10">ТРЕНЕР</span></div>
					<div class="team-item"><a href="/about/sam/"><img src="/wp-content/themes/xsarampas/assets/images/team/sem.jpg" width="134" height="134" alt="" /></a><span class="font_10">СЭМ</span></div>
					<div class="team-item"><a href="/about/grisha/"><img src="/wp-content/themes/xsarampas/assets/images/team/grisha.jpg" width="134" height="134" alt="" /></a><span class="font_10">ГРИША</span></div>
					<div class="team-item"><a href="/about/yulia/"><img src="/wp-content/themes/xsarampas/assets/images/team/uliya.jpg" width="134" height="134" alt="" /></a><span class="font_10">ЮЛЯ</span></div>
					<div class="team-item"><a href="/about/pashok/"><img src="/wp-content/themes/xsarampas/assets/images/team/pashok.jpg" width="134" height="134" alt="" /></a><span class="font_10">ПАШОК</span></div>
					<div class="team-item"><a href="/about/mihalich/"><img src="/wp-content/themes/xsarampas/assets/images/team/mihalych.jpg" width="134" height="134" alt="" /></a><span class="font_10">МИХАЛЫЧ</span></div>
					<div class="team-item"><a href="/about/bufer/"><img src="/wp-content/themes/xsarampas/assets/images/team/bufer.jpg" width="134" height="134" alt="" /></a><span class="font_10">БУФЕР</span></div>
					<div class="team-item"><a href="/about/den/"><img src="/wp-content/themes/xsarampas/assets/images/team/denchik.jpg" width="134" height="134" alt="" /></a><span class="font_10">ДЭНЧИК</span></div>
					<div class="team-item"><a href="/about/yurec/"><img src="/wp-content/themes/xsarampas/assets/images/team/yurec.jpg" alt="" width="134" height="134" /></a><span class="font_10">ЮРЕЦ</span></div>
					<div class="team-item"><a href="/about/dasha/"><img src="/wp-content/themes/xsarampas/assets/images/team/dasha.jpg" alt="" width="134" height="134" /></a><span class="font_10">ДАША</span></div>
					<div class="team-item"><a href="/about/"><img src="/wp-content/themes/xsarampas/assets/images/team/vitek.jpg" alt="" width="134" height="134" /></a><span class="font_10">ВИТЕК</span></div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				?>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
