<?php

// Template Name: Projects

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="projects">
				<div class="row" style="padding-top: 40px;">
					<?php
						// новый запрос на посты "Проекты"
						$query = new WP_Query(array(
							'post_type' 	 => 'projectsPosts',
							'posts_per_page' => 9,
						));
						
						//	проходим по записям и выводим данные
						if ($query->have_posts()): 
							while ($query->have_posts()):
								$query->the_post();
					?>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<div class="box_item" data-ID="<?php echo get_the_ID(); ?>">
									<div class="item_thumbnail ">
										<div class="img">
											<?php the_post_thumbnail('medium'); ?>
										</div>
										<h6 class="font_6" style="font-size:16px; line-height:1.3em; height: 40px; padding-left: 3px;">
											<span style="font-size:16px;">
												<?php the_title(); ?>
											</span>
										</h6>
									</div>
									<div class="item_content">
										<?php the_content(); ?>
									</div>
								</div>
							</div>

					<?php 
						endwhile;
						wp_reset_postdata(); // сбрасываем переменную $post
					?>
					
					<?php else: echo 'Записей нет.'; ?>
					<?php endif; ?>
				</div><!-- end class row -->
			</div><!-- end class projects -->

			<?php //	загрузить еще и данные для Ajax (объект dataForAjax) 
				if ($query->max_num_pages > 1): 
			?>
				<script>
					var dataForAjax = {
						ajaxurl: '<?php echo site_url() ?>/wp-admin/admin-ajax.php',
						current_page: <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>,
						max_pages: <?php echo $query->max_num_pages; ?>,
					};
				</script>
				<div id="true_loadmore">Загрузить ещё</div>
			<?php endif; ?>

			<a class="fancybox" data-fancybox="images" rel="gallery1" href="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_b.jpg" title="Twilight Memories (doraartem)">
	<img src="http://farm2.staticflickr.com/1669/23976340262_a5ca3859f6_m.jpg" alt="" />
</a>
<a class="fancybox" data-fancybox="images" rel="gallery1" href="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_b.jpg" title="Electrical Power Lines and Pylons disappear over t.. (pautliubomir)">
	<img src="http://farm2.staticflickr.com/1459/23610702803_83655c7c56_m.jpg" alt="" />
</a>
<a class="fancybox" data-fancybox="images" rel="gallery1" href="http://farm2.staticflickr.com/1617/24108587812_6c9825d0da_b.jpg" title="Morning Godafoss (Brads5)">
	<img src="http://farm2.staticflickr.com/1617/24108587812_6c9825d0da_m.jpg" alt="" />
</a>
<a class="fancybox" data-fancybox="images" rel="gallery1" href="http://farm4.staticflickr.com/3691/10185053775_701272da37_b.jpg" title="Vertical - Special Edition! (cedarsphoto)">
	<img src="http://farm4.staticflickr.com/3691/10185053775_701272da37_m.jpg" alt="" />
</a>

			<?php
				while (have_posts()) : the_post();
					get_template_part('template-parts/page/content', 'page');
				endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->



<?php get_footer(); 