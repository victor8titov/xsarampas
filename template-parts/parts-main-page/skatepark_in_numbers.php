<?php
$skatepark_in_numbers = new UtilsMetaBox(SKATEPARK_IN_NUMBERS);
?>

<!-- skatepartk in numbers -->
<div class="skatepark-in-numbers">
	<div class="skatepark-in-numbers__title">
		<h3>СКЕЙТ-ПАРКИ В ЦИФРАХ</h3>
	</div>
	<div class="skatepark-in-numbers__row-1">
		<div>
			<h3><?php $skatepark_in_numbers->put_text('field-1-title'); ?></h3>
			<span><?php $skatepark_in_numbers->put_text('field-1-text'); ?></span>
		</div>
		<div>
			<span class="skatepark-in-numbers__row-1-year"><?php $skatepark_in_numbers->put_text('field-2-title'); ?></span>
			<span class="skatepark-in-numbers__row-1-based"><?php $skatepark_in_numbers->put_text('field-2-text'); ?></span>
		</div>
		<div>
			<h3><?php $skatepark_in_numbers->put_text('field-3-title'); ?></h3>
			<span><?php $skatepark_in_numbers->put_text('field-3-text'); ?></span>
		</div>
	</div>
	<div class="skatepark-in-numbers__row-2">
		<div class="skatepark-in-numbers__row-2-col-1">
			<div>
				<img src="<?php echo URI_IMAGES ?>/bbdd64_144eb8bb662044428d128609bca3f488.png" alt="">
			</div>
			<span class="skatepark-in-numbers__number"><?php $skatepark_in_numbers->put_text('field-4-title'); ?></span>
			<span class="skatepark-in-numbers__span-text"><?php $skatepark_in_numbers->put_text('field-4-text'); ?></span>
		</div>
		<div>
			<div class="skatepark-in-numbers__crowd">
				<div class="skatepark-in-numbers__crowd-line-1">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
				</div>
				<div class="skatepark-in-numbers__crowd-line-2">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
					<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="">
				</div>
			</div>
			<span class="skatepark-in-numbers__span-text"><?php $skatepark_in_numbers->put_text('field-5-text'); ?></span>
		</div>
		<div>
			<div>
				<img src="<?php echo URI_IMAGES ?>/bbdd64_7a8e71689678434f9e7801c06e23cc09.png" alt="" width="42px" height="46px">
				<img src="<?php echo URI_IMAGES ?>/bbdd64_118828daa26841beb8f6b550994ce6e4.png" alt="" width="38px" height="40px">
			</div>
			<span class="skatepark-in-numbers__number"><?php $skatepark_in_numbers->put_text('field-6-title'); ?></span>
			<span class="skatepark-in-numbers__span-text"><i><?php $skatepark_in_numbers->put_text('field-6-text'); ?></i></span>
		</div>
		<div>
			<div>
				<img src="<?php echo URI_IMAGES ?>/bbdd64_38e40c6ecaf345568d689d36554bde9b.png" alt="">
				<img src="<?php echo URI_IMAGES ?>/bbdd64_38e40c6ecaf345568d689d36554bde9b.png" alt="">
				<img src="<?php echo URI_IMAGES ?>/bbdd64_38e40c6ecaf345568d689d36554bde9b.png" alt="">
				<img src="<?php echo URI_IMAGES ?>/bbdd64_38e40c6ecaf345568d689d36554bde9b.png" alt="">
			</div>
			<span class="skatepark-in-numbers__number"><?php $skatepark_in_numbers->put_text('field-7-title'); ?></span>
			<span class="skatepark-in-numbers__span-text"><i><?php $skatepark_in_numbers->put_text('field-7-text'); ?></i></span>
		</div>
		<div>
			<div>
				<img src="<?php echo URI_IMAGES ?>/bbdd64_7d9e7cbbb5324f7a9f29d3d8e4792048.png" alt="">
			</div>
			<span class="skatepark-in-numbers__number"><?php $skatepark_in_numbers->put_text('field-8-title'); ?></span>
			<span class="skatepark-in-numbers__area">м²</span>
			<span class="skatepark-in-numbers__span-text"><i><?php $skatepark_in_numbers->put_text('field-8-text'); ?></i></span>
		</div>
	</div>
</div>