<?php
$main_slider = new UtilsMetaBox(SLIDER);
$list_images = $main_slider->get_array_fields('images', false);
?>

<!-- slider -->
<?php if (!empty($list_images)) : ?>
	<div class="row slider_main_page">
		<div class="flexslider">
			<ul class="slides">
				<?php foreach ($list_images as $id_image) : ?>
					<li>
						<?php echo $main_slider->get_html_tag_image($id_image, 'large', 'eager'); ?>
						<div class="s14imageItemtitle"><?php echo wp_get_attachment_caption($id_image); ?> </div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
<?php endif; ?>