<?php
/**
 * The template for displaying archive pages
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
		
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="entry-title font5">', '</h1>' );
					?>
				</header><!-- .page-header -->
			<?php endif; ?>
			
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
			<?php
			
			while ( have_posts() ) : the_post();
				
				?>
				<div class="row"> 
					<h2 class="entry-title font5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<div class="entry-meta font_9" style="padding: 4px 0 22px 0;">
						<?php echo twentyseventeen_time_link();
						?>
					</div><!-- .entry-meta -->
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php if (has_post_thumbnail()) { ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<img src="<?php the_post_thumbnail_url(); ?>" width="300" alt="<?php the_title(); ?>" />
						</a>
					<?php } else {?>
						<a href="<?php the_permalink(); ?>"><img src="/wp-content/themes/xsarampas/assets/images/no_image_available.png" width="300" /></a>
					<?}?>
					</div>
					<div class="font_8 s16_richTextContainer s16richTextContainer col-lg-6 col-md-6 col-sm-6 col-xs-6">
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