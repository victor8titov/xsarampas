<?php
$team = new UtilsMetaBox(TEAM);
$list_images = $team->get_array_fields('images', false);
?>

<!-- team -->
<?php if (!empty($list_images)): ?>
<div class="team">
	<div class="team__title">
		<h3>КОМАНДА</h3>
		<h2>XSA RAMPS</h2>
	</div>
	<!-- carousel -->
	<div class="team__slider">
		<ul id="mycarousel" class="jcarousel-skin-tango">
			<?php foreach ($list_images as $id_image) : ?>
				<li>
					<?php echo $team->get_html_tag_image($id_image); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php endif; ?>