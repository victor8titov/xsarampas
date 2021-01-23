<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
			<section class="error-404 not-found">
				<header class="entry-header font5">
					<h1 class="entry-title">Ошибка 404 - Страница не найдена</h1>		
				</header><!-- .page-header -->
				<div class="s39"><div class="s39line"></div></div>
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
				</div>
				<div class="page-content">
					<br />
					<p>Причины, которые могли привести к ошибке:</p>
					<p></p>
					<p>Неправильно набран адрес.</p>
					<p>Такой страницы никогда не было на этом сайте.</p>
					<p>Такая страница была, но по этому адресу ее больше нет.</p>
					<p>Попробуйте вернуться на главную страницу</p>
					<p></p>
					<br />
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
