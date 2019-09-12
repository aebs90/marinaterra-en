<section class="menu-wrapper menu-secondary-wrapper wrapper">
	<div class="menu-box menu-secondary box">
		<?php
		$date = new DateTime( 'now', new DateTimeZone('America/Hermosillo'));
		echo str_replace(
			'[time]',
			$date->format('h:i A'),
			wp_nav_menu( array(
				'theme_location' => 'secondary',
				'container' => false,
				'echo' => false,
			) )
		);
		?>
	</div>
</section>
