<div class="row">
<?php $videoIframe = get_post_meta(get_query_var('page_id'), 'videoIframe', true); if ( $videoIframe ): ?>	
	<div class="video" >
		<?php echo $videoIframe; ?>
	</div>
<?php else: ?>
	<div style="width:100%; height: 1px;"></div>
<?php endif; ?>
</div>