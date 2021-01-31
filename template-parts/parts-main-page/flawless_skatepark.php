<?php
$flawless_skatepark = new UtilsMetaBox(FLAWLESS_SKATEPARK);
?>

<!-- flawless skatepark -->
<div class="flawless-skatepark">
	<div class="flawless-skatepark__title">
		<h3>ЧТО ТАКОЕ</h3>
		<h2>БЕЗУПРЕЧНЫЙ СКЕЙТ ПАРК</h2>
	</div>
	<!-- left side -->
	<div class="flawless-skatepark__left-side">
		<div>
			<div>
				<img alt="" src="<?php echo URI_IMAGES ?>/bbdd64_2dd06df1b1b34c64993de20e44f7ccd5.png" />
			</div>
			<div>
				<h5><?php $flawless_skatepark->put_text('field-1-title') ?></h5>
				<p><?php $flawless_skatepark->put_text('field-1-text') ?></p>
			</div>
		</div>

		<div>
			<div>
				<img src="<?php echo URI_IMAGES ?>/bbdd64_7a8e71689678434f9e7801c06e23cc09.png" alt="icon_contract">
			</div>
			<div>
				<h5><?php $flawless_skatepark->put_text('field-2-title'); ?></h5>
				<p><?php $flawless_skatepark->put_text('field-2-text'); ?></p>
			</div>
		</div>

		<div>
			<div>
				<img src="<?php echo URI_IMAGES ?>/bbdd64_ade5b1c855d14626bb9f284d5f22a4fe.png" alt="icon_project">
			</div>
			<div>
				<h5><?php $flawless_skatepark->put_text('field-3-title'); ?></h5>
				<p><?php $flawless_skatepark->put_text('field-3-text'); ?></p>
			</div>
		</div>

	</div>

	<!-- middle -->
	<div class="flawless-skatepark__middle">
		<a href="<?php echo site_url(); ?>">
			<?php $flawless_skatepark->put_image('image'); ?>
		</a>
	</div>

	<!-- right side -->
	<div class="flawless-skatepark__right-side">
		<div>
			<div>
				<img src="<?php echo URI_IMAGES; ?>/park-01.png" alt="icon skatepark">
			</div>
			<div>
				<h5><?php $flawless_skatepark->put_text('field-4-title'); ?></h5>
				<p><?php $flawless_skatepark->put_text('field-4-text'); ?></p>
			</div>
		</div>
		<div>
			<div>
				<img src="<?php echo URI_IMAGES; ?>/shipping.png" alt="icon shipping">
			</div>
			<div>
				<h5><?php $flawless_skatepark->put_text('field-5-title'); ?></h5>
				<p><?php $flawless_skatepark->put_text('field-5-text'); ?></p>
			</div>
		</div>
		<div>
			<div>
				<img src="<?php echo URI_IMAGES; ?>/guarantee.png" alt="icon guarantee">
			</div>
			<div>
				<h5><?php $flawless_skatepark->put_text('field-6-title'); ?></h5>
				<p><?php $flawless_skatepark->put_text('field-6-text'); ?></p>
			</div>
		</div>
	</div>
</div>