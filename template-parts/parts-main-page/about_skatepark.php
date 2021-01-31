<?php
$about_skatepark = new UtilsMetaBox(ABOUT_SKATEPARK);
?>

<!-- about skatepark -->
<div class="about_skatepark">
	<div class="about_skatepark__title">
		<h2><?php $about_skatepark->put_text('main-title'); ?></h2>
		<div>
			<img src="<?php echo URI_IMAGES ?>/icon-2.png" alt="" />
			<img src="<?php echo URI_IMAGES ?>/icon-4.png" alt="" />
			<img src="<?php echo URI_IMAGES ?>/icon-1.png" alt="" />
			<img src="<?php echo URI_IMAGES ?>/icon-3.png" alt="" />
		</div>
	</div>

	<div class="about_skatepark__slogan">
		<p><?php $about_skatepark->put_text('main-text'); ?></p>
	</div>

	<div class="about_skatepark__line-before">
		<h3><?php $about_skatepark->put_text('subtitle-1') ?></h3>
	</div>

	<div class="about_skatepark__card">
		<div class="about_skatepark__card-img">
			<?php $about_skatepark->put_image('field-1-image'); ?>
		</div>
		<div class="about_skatepark__card-desc">
			<h3><?php $about_skatepark->put_text('field-1-title'); ?></h3>
			<p><?php $about_skatepark->put_text('field-1-text'); ?></p>
		</div>
	</div>

	<div class="about_skatepark__card">
		<div class="about_skatepark__card-img">
			<?php $about_skatepark->put_image('field-2-image'); ?>
		</div>
		<div class="about_skatepark__card-desc">
			<h3><?php $about_skatepark->put_text('field-2-title'); ?></h3>
			<p><?php $about_skatepark->put_text('field-2-text'); ?></p>
		</div>
	</div>

	<div class="about_skatepark__card">
		<div class="about_skatepark__card-img">
			<?php $about_skatepark->put_image('field-3-image'); ?>
		</div>
		<div class="about_skatepark__card-desc">
			<h3><?php $about_skatepark->put_text('field-3-title'); ?></h3>
			<p><?php $about_skatepark->put_text('field-3-text'); ?></p>
		</div>
	</div>

	<div class="about_skatepark__card">
		<div class="about_skatepark__card-img">
			<?php $about_skatepark->put_image('field-4-image'); ?>
		</div>
		<div class="about_skatepark__card-desc">
			<h3><?php $about_skatepark->put_text('field-4-title'); ?></h3>
			<p><?php $about_skatepark->put_text('field-4-text'); ?></p>
		</div>
	</div>

	<div class="about_skatepark__slogan-2">
		<div>
			<p><?php $about_skatepark->put_text('slogan-text'); ?></p>
		</div>
	</div>

	<div class="about_skatepark__line-after">
		<h3><?php $about_skatepark->put_text('subtitle-2'); ?></h3>
	</div>

	<div class="about_skatepark__slogan">
		<p><?php $about_skatepark->put_text('end-text'); ?></p>
	</div>
</div>
<!-- end  about_skatepark-->