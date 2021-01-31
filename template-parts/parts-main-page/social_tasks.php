<?php
$social_tasks = new UtilsMetaBox(SOCIAL_TASKS);
?>

<!-- social tasks -->
<div class="social-tasks">
	<div class="social-tasks__title">
		<h3>СКЕЙТ ПАРК, КАК</h3>
		<h2>РЕШЕНИЕ СОЦИАЛЬНЫХ ЗАДАЧ</h2>
	</div>
	<div class="social-tasks__body">
		<div>
			<?php $social_tasks->put_image('field-1-image', 'medium'); ?>
			<h4><?php $social_tasks->put_text('field-1-title'); ?></h4>
			<ul>
				<?php foreach ($social_tasks->get_array_fields('field-1-text') as $li) : ?>
					<li><?php echo $li ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div>
			<?php $social_tasks->put_image('field-2-image', 'medium'); ?>
			<h4><?php $social_tasks->put_text('field-2-title'); ?></h4>
			<ul>
				<?php foreach ($social_tasks->get_array_fields('field-2-text') as $li) : ?>
					<li><?php echo $li ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div>
			<?php $social_tasks->put_image('field-3-image', 'medium'); ?>
			<h4><?php $social_tasks->put_text('field-3-title'); ?></h4>
			<ul>
				<?php foreach ($social_tasks->get_array_fields('field-3-text') as $li) : ?>
					<li><?php echo $li ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>