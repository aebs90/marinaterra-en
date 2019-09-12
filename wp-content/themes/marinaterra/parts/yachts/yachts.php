<div class="container">
	<div class="yachts-catalog col-xs-12">
		<h2><?php the_field( 'yachts_title' ); ?></h2>
		
		<?php
		if ( have_rows( 'yachts_yachts' ) ) {
			while ( have_rows( 'yachts_yachts' ) ) {
				the_row();
		?>
				<div class="yacht wrapper">
					<h3 class="yacht-name"><?php the_sub_field( 'name' ); ?></h3>
					<?php
					echo wp_get_attachment_image(
						get_sub_field( 'image' ),
						'pro-md'
					);
					
					if ( have_rows( 'details' ) ) {
						while ( have_rows( 'details' ) ) {
							the_row();
					?>
							<span><?php the_sub_field( 'detail' ); ?></span>
					<?php
						}
					}
					?>
				</div>
		<?php
			}
		}
		?>
	</div>
</div>
