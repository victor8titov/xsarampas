<?php
$clients = new UtilsMetaBox(CLIENTS);
$id_images = $clients->get_array_fields('images', false);
?>

<!-- clients -->
<div class="clients">
	<div class="clients__title">
		<h2>КЛИЕНТЫ</h2>
	</div>
	<div class="clients__body">
		<?php foreach ($id_images as $id_image) : ?>
			<div>
				<?php echo $clients->get_html_tag_image_with_link($id_image); ?>
			</div>
		<?php endforeach; ?>
	</div>
</div>