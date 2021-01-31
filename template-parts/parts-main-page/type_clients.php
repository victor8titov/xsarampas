<?php
$type_clients = new UtilsMetaBox(TYPE_CLIENTS);
?>

<!-- type_clients -->
<div class="type_clients">
	<div class="type_clients__title">
		<h5>Скейт-парки и скейт площадки</h5>
	</div>
	<div class="type_clients__body">
		<div>
			<h6><?php $type_clients->put_text('field-1-title'); ?></h6>
			<p><?php $type_clients->put_text('field-1-text'); ?></p>
			<a href="<?php echo get_site_url() . '/';
								$type_clients->put_text('field-1-link'); ?>" class="xsa-button xsa-button_inside-text">Подробнее</a>
		</div>
		<div>
			<h6><?php $type_clients->put_text('field-2-title'); ?></h6>
			<p><?php $type_clients->put_text('field-2-text'); ?></p>
			<a class="xsa-button xsa-button_inside-text" href="<?php echo get_site_url() . '/';
																													$type_clients->put_text('field-2-link'); ?>">Подробнее</a>
		</div>
		<div>
			<h6><?php $type_clients->put_text('field-3-title'); ?></h6>
			<p><?php $type_clients->put_text('field-3-text'); ?></p>
			<a href="<?php echo get_site_url() . '/';
								$type_clients->put_text('field-3-link'); ?>" class="xsa-button xsa-button_inside-text">Подробнее</a>
		</div>
	</div>
	<div class="shadow_after_box"></div>
</div>