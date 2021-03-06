<?php
$our_projects = new UtilsMetaBox(OUR_PROJECTS);
?>

<!-- our projects -->
<div class="our_projects">
	<div>
		<h4>Наши проекты</h4>
		<div>
			<?php $our_projects->put_image('field-1-image'); ?>
			<a href="<?php $our_projects->put_text('field-1-link'); ?>" class="xsa-button xsa-button_p-10">Смотреть</a>
		</div>
	</div>
	<div>
		<h4>Проектирование</h4>
		<div>
			<?php $our_projects->put_image('field-2-image'); ?>
			<a href="<?php $our_projects->put_text('field-2-link'); ?>" class="xsa-button xsa-button_p-10">Читать</a>
		</div>

	</div>
	<div>
		<h4>Что мы продаем?</h4>
		<p class="our_projects__main-text">
			<?php $our_projects->put_text('field-3-text'); ?>
		</p>
	</div>
	<div class="shadow_after_box"></div>
</div>