<section class="slider">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php
			if ( have_rows( 'slides' ) ) {
				while ( have_rows( 'slides' ) ) {
					the_row();
			?>
					<div class="swiper-slide">
						<?php
						$link = get_sub_field( 'link' );
						if ( $link ) {
							if ( get_sub_field( 'external_link' ) ) {
								$external = ' target="_blank"';
							} else {
								$external = '';
							}
							echo '<a href="' . $link . '"' . $external . '>';
						}
							
						echo po_get_attachment_image(
							get_sub_field( 'image' ),
							'ultra-panoramic-lg',
							'ultra-panoramic-xl',
							false,
							array(
								'class' => 'hero-img',
								'sizes' => '100vw',
							)
						);
						
						if ( $link ) {
							echo '</a>';
						}
						?>
					</div>
			<?php
				}
			}
			?>
		</div>
		
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	
	<form class="home-reservation" action="https://reservations.travelclick.com/103209" method="get" name="resform" id="resform" target="_blank">
		<input type="hidden" name="HotelID" value="103209">
		<?php $lang = ( 'es_MX' == get_locale() ) ? 2 : 1; ?>
		<input type="hidden" name="LanguageID" value="<?php echo $lang; ?>">
		<input type="hidden" name="Rooms" value="1">

		<div class="field date-field">
			<label for="check-in"><?php _e( 'Llegada', 'marinaterra' ); ?></label>
			<input name="DateIn" class="datepicker" id="check-in" type="text" placeholder="MM/DD/AAAA">
		</div>

		<div class="field date-field">
			<label for="check-out"><?php _e( 'Salida', 'marinaterra' ); ?></label>
			<input name="DateOut" class="datepicker" id="check-out" type="text" placeholder="MM/DD/AAAA">
		</div>
		
		<div class="field">
			<label for="check-in"><?php _e( 'Adultos', 'marinaterra' ); ?></label>
			<select name="Adults">
				<option value="1" selected="selected">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
		
		<div class="field">
			<label for="check-in"><?php _e( 'Niños', 'marinaterra' ); ?></label>
			<select name="Children">
				<option value="0" selected="selected">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>

		<div class="form-footer">
			<input type="submit" value="<?php _e( 'Reservar', 'marinaterra' ); ?>">
		</div>
	</form>
</section>