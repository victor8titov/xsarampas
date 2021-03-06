<?php 

function debug_ms($ms, $more = false) {
	if ($more) {
		?>
		<script>
			console.log('---:   debug_ms	:---')
			console.log(`<?php var_dump($ms) ?>`);
			console.log('---:   end debug_ms	:---')
		</script>
		<?php
	} else {
		?>
	<script>
		console.log('---:   debug_ms	:---')
		console.log('<?php print_r($ms) ?>');
		console.log('---:   end debug_ms	:---')
	</script>
	<?php
	}
	
}