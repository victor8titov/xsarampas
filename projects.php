<?php
/**
 * The template for displaying all pages
 * Template Name: Projects
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

			<div class="projects">
				<div class="row" style="padding-top: 40px;">
					<?php
					// новый запрос на посты "Проекты"
					$query = new WP_Query( array(
						'post_type' 	 => 'projectsPosts',
						'posts_per_page' => 9,
					)); 
					//	проходим по записям и выводим данные
					if( $query->have_posts() ){
						while( $query->have_posts() ){
							$query->the_post();
						?>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<div class="box_item" data-ID = "<?php echo get_the_ID(); ?>">
									<div class="item_thumbnail ">
										<div class="img">
											<?php the_post_thumbnail('medium'); ?>
										</div>									
										<h6 class="font_6" style="font-size:16px; line-height:1.3em; height: 40px; padding-left: 3px;"><span style="font-size:16px;">
											<?php the_title(); ?>
										</span></h6>
									</div>
									<div class="item_content">
										<?php the_content(); ?>
									</div>
								</div>
							</div>							
						
						<?php
						}
						wp_reset_postdata(); // сбрасываем переменную $post
					} 
					else
						echo 'Записей нет.';
					?>	
				</div><!-- end class row -->
		
			</div><!-- end class projects -->
			
			<?php //	загрузить еще и данные для Ajax (объект dataForAjax) 
				if ( $query->max_num_pages > 1 ) : ?>
				<script>
				var dataForAjax = {
					ajaxurl: '<?php echo site_url() ?>/wp-admin/admin-ajax.php',					
					current_page: <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>,
					max_pages: <?php echo $query->max_num_pages; ?>,
				};
				</script>
				<div id="true_loadmore">Загрузить ещё</div>
			<?php endif; ?>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );
			endwhile; // End of the loop.
			?>	

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->



<?php get_footer();
