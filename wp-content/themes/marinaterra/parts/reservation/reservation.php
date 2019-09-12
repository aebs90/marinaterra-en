<div id="reservation">
	<button type="button" class="reservation-close">
		<i class="fa fa-close" aria-hidden="true"></i>
	</button>
	<div class="reservation-header">
		<div class="container">
			<h2 class="reservation-title"><?php _e( 'Reserva Ahora', 'marinaterra' ); ?></h2>
			<h3 class="reservation-subtitle"><?php _e( '¡Asegura ya tus vacaciones!', 'marinaterra' ); ?></h3>
		</div>
	</div>
	<div class="reservation-body">
		<div class="container">
			<form
				action="https://reservations.travelclick.com/103209"
				method="get"
				name="resform"
				id="resform"
				target="_blank">
				<input type="hidden" name="HotelID" value="103209">
				<?php $lang = ( 'en_MX' == get_locale() ) ? 2 : 1; ?>
				<input type="hidden" name="LanguageID" value="<?php echo $lang; ?>">
				<input type="hidden" name="Rooms" value="1"> 
				
				<div class="field date-field">
					<label><?php _e( 'Llegada', 'marinaterra' ); ?>:</label>
					<input class="datepicker" name="DateIn" type="text">
				</div>
				
				<div class="field date-field">
					<label><?php _e( 'Salida', 'marinaterra' ); ?>:</label>
					<input class="datepicker" name="DateOut" type="text">
				</div>
				
				<div class="field option-field">
					<label><?php _e( 'Adultos', 'marinaterra' ); ?>:</label>
					<select name="Adults">
						<option value="1" selected="selected">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				
				<div class="field option-field">
					<label><?php _e( 'Niños', 'marinaterra' ); ?>:</label>
					<select name="Children">
						<option value="0" selected="selected">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>

				<button type="submit">
					<?php _e( 'Continuar', 'marinaterra' ); ?>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</button>
			</form>
		</div>
	</div>
</div>
