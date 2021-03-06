<?php
$show_video = new UtilsMetaBox(SHOW_VIDEO);
?>

<?php if ($show_video->check_field('is_show') && $show_video->check_field('iframe')) : ?>
	<!-- video block -->
	<div class="row">
		<div class="video">
			<iframe width="100%" height="455" src="<?php $show_video->put_text('url'); ?>" frameborder="0" allowfullscreen />
			</iframe>
		</div>
	</div>
<?php endif; ?>