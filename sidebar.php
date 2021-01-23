<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    
	<h6 style="line-height:1.4em;" class="font_6"><span style="line-height:1.4em;">Лучшие записи</span></h6>
	<div style="height: 5px;" class="s8"><div class="s8line"></div></div>	
	<?php

	$args_1 = array( 'cat' => 5 );
	query_posts( $args_1 );

	?>
	<div class="row" style="padding: 16px 0;"> 
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="flexslider" style="height: 150px;">
				<ul class="slides">
					<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<?php if (has_post_thumbnail()) { ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >								
									<?php the_post_thumbnail('sslide_thumb'); ?>								
								</a>
							<?php } else {?>
								<a href="<?php the_permalink(); ?>"><img src="/wp-content/themes/xsarampas/assets/images/no_image_available.png" width="220" alt="no-photo" /></a>
							<?}?>
							<a href="<?php the_permalink(); ?>" class="font_8"><?php the_title(); ?></a>
							<div class="entry-meta font_9" style="padding: 4px 0 22px 0;">
								<?php echo twentyseventeen_time_link();?>
							</div><!-- .entry-meta -->
						</li>
						<?
					endwhile; // End of the loop.
					?>
				</ul>
			</div>
		</div>
	</div>
	
	<h6 style="line-height:1.4em;padding-top:20px;" class="font_6"><span style="line-height:1.4em;">Искать по тегам</span></h6>
	<div style="height: 5px;" class="s8"><div class="s8line"></div></div>	
	<?php wp_tag_cloud(); ?>	

	<h6 style="line-height:1.4em;padding-top:20px;" class="font_6"><span style="line-height:1.4em;">История новостей</span></h6>
	<div style="height: 5px;" class="s8"><div class="s8line"></div></div>	
			<?php
			
			$args_2 = array( 'cat' => 3, 'posts_per_page' => 10 );
			query_posts( $args_2 );
			
			while ( have_posts() ) : the_post();
				?>
				<div class="row" style="padding: 16px 0;"> 
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<?php if (has_post_thumbnail()) { ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							
							<?php the_post_thumbnail('snews_thumb'); ?>
						</a>
					<?php } else {?>
						<a href="<?php the_permalink(); ?>"><img src="/wp-content/themes/xsarampas/assets/images/no_image_available.png" width="70" width="55" alt="no-photo" /></a>
					<?}?>
					</div>
					<div class="font_8 s16_richTextContainer s16richTextContainer col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<a href="<?php the_permalink(); ?>" class="font_8"><?php the_title(); ?></a>
						<div class="entry-meta font_9" style="padding: 4px 0 22px 0;">
							<?php echo twentyseventeen_time_link();
							?>
						</div><!-- .entry-meta -->
					</div>
				</div>
				<?
			endwhile; // End of the loop.
			?>
	
	
	<h6 style="line-height:1.4em;padding-top:20px;" class="font_6"><span style="line-height:1.4em;">Архив</span></h6>
	<div style="height: 5px;" class="s8"><div class="s8line"></div></div>
	<ul class="sidebar_archive">
	
	<?php wp_get_archives('&type=monthly&show_post_count=true'); ?>
	
	</ul>
	 	 
	<h6 style="line-height:1.4em;padding-top:20px;" class="font_6"><span style="line-height:1.4em;">Follow Us</span></h6>
	<div style="height: 5px;" class="s8"><div class="s8line"></div></div>	

	<div style="height: 63px; line-height: 63px;" class="s9">
		<div class="s9itemsContainer">
			<div style="width:23px;height:23px;margin: 0px 7px 0 0;display:inline-block;" class="s9imageItem">
				<a rel="nofollow" href="https://www.facebook.com/XSA.world" target="_blank" class="s9imageItemlink"><img src="/wp-content/themes/xsarampas/assets/images/social-fb.jpg" width="23" height="23" alt="" />
			</div>
			<div style="width:23px;height:23px;margin: 0px 7px 0 0;display:inline-block;" class="s9imageItem">
				<a rel="nofollow" href="#" target="_blank" class="s9imageItemlink"><img src="/wp-content/themes/xsarampas/assets/images/social-twitter.jpg" width="23" height="23" alt="" />
			</div>
			<div style="width:23px;height:23px;margin: 0px 7px 0 0;display:inline-block;" class="s9imageItem">
				<a rel="nofollow" href="#" target="_blank" class="s9imageItemlink"><img src="/wp-content/themes/xsarampas/assets/images/social-gp.jpg" width="23" height="23" alt="" />
			</div>
		
		</div>
	</div>
	
	

	<!-- <?php dynamic_sidebar( 'sidebar-1' ); ?> -->
</aside><!-- #secondary -->
