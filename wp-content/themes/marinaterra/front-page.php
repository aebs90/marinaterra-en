<?php
add_action( 'wp_footer', 'datepicker_localization' );

function datepicker_localization(){
	if ( 'es_MX' == get_locale() ) {
?>
		<script type="text/javascript">
		jQuery(document).ready(function($){
			$.datepicker.regional['es'] = {
				closeText: 'Cerrar',
				prevText: '<Ant',
				nextText: 'Sig>',
				currentText: 'Hoy',
				monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
				dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
				dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
				weekHeader: 'Sm',
				dateFormat: 'dd/mm/yy',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: ''
			};
			$.datepicker.setDefaults($.datepicker.regional['es']);
		});
		</script>
<?php
	}
}

get_header();

get_template_part( 'parts/slider/slider' );

get_template_part( 'parts/intro/intro' );

get_template_part( 'parts/home-section-1/home-section-1' );

get_template_part( 'parts/home-section-2/home-section-2' );

get_template_part( 'parts/home-section-3/home-section-3' );

get_template_part( 'parts/home-section-others/home-section-others' );

get_footer();
