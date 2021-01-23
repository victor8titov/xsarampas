<?php
/**
 * The template for displaying all pages
 * Template Name: News
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

add_filter( 'wpseo_title', 'my_title', 100);
add_filter( 'wpseo_metadesc', 'my_description', 100);

function my_title($title) {
	$title = 'Новости компании XSA Ramps';
    return $title;
}

function my_description($description) {
	$description = 'Новости о строительстве и проектировании скейт парков компанией XSA Ramps';
    return $description;
}

get_header(); ?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="entry-title font5">Новости</h1>
			<div class="s39"><div class="s39line"></div></div>
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<?php
			
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'cat' => 3, 'posts_per_page' => 10, 'paged' => $page);
			query_posts( $args );
			
			while ( have_posts() ) : the_post();
				
				$post = get_post( get_the_ID() );
				$post->post_name;

				?>
				
				<div class="row"> 
					<h2 class="entry-title font5"><a href="http://www.xsaramps.com/news/<?php echo $post->post_name; ?>"><?php the_title(); ?></a></h2>

					<div class="entry-meta font_9" style="padding: 4px 0 22px 0;">
						<?php echo twentyseventeen_time_link();
						?>
					</div><!-- .entry-meta -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php if (has_post_thumbnail()) { ?>
						<a href="http://www.xsaramps.com/news/<?php echo $post->post_name; ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('news_thumb'); ?>
						</a>
					<?php } else {?>
						<a href="http://www.xsaramps.com/news/<?php echo $post->post_name; ?>"><img src="/wp-content/themes/xsarampas/assets/images/no_image_available.png" alt="no-photo" width="300" /></a>
					<?}?>
					</div>
					<div class="s16_richTextContainer s16richTextContainer col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<?
			endwhile; // End of the loop.
			?>
			
			<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
				<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
			</nav><!-- #<?php echo $html_id; ?> .navigation -->
			
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<?php get_sidebar(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
