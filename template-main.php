<?php
/*
Template Name: Главная страница
*/

get_header(); ?>

<!-- content -->
<div class="content">
	<?php get_template_part('template-parts/parts-main-page/flawless_skatepark'); ?>
	<?php get_template_part('template-parts/parts-main-page/social_tasks'); ?>
	<?php get_template_part('template-parts/parts-main-page/skatepark_in_numbers'); ?>
	<?php get_template_part('template-parts/parts-main-page/type_clients'); ?>
	<?php get_template_part('template-parts/parts-main-page/show_video'); ?>
	<?php get_template_part('template-parts/parts-main-page/slider'); ?>
	<?php get_template_part('template-parts/parts-main-page/our_projects'); ?>
	<?php get_template_part('template-parts/parts-main-page/team'); ?>
	<?php get_template_part('template-parts/parts-main-page/clients'); ?>
	<?php get_template_part('template-parts/parts-main-page/about_skatepark'); ?>
</div>

<?php get_footer();
