<?php
/**
 * Template Name: Contacto
 */

$form_id = 1;

if ( function_exists( 'gravity_form_enqueue_scripts' ) ) {
	gravity_form_enqueue_scripts( $form_id, true );
}

get_header();

get_template_part( 'parts/hero/hero' );
?>

<section class="main">
	<div class="container">
		<div class="main-content wrapper">
			<div class="contact-form">
				<div class="contact-form-description">
					<h2><?php _e( 'Solicitud de Información', 'marinaterra' ); ?></h2>
					<p><?php _e( 'Escríbenos un mensaje, con gusto responderemos todas tus dudas.', 'marinaterra' ); ?></p>
					<p><strong><?php _e( 'NOTA: Este formulario es solo para solicitud de información, uno de
					nuestros representantes se comunicará con usted para concretar la reservación.', 'marinaterra' ); ?></strong></p>
				</div>
				<?php
				if ( function_exists( 'gravity_form' ) ) {
					echo gravity_form(
						$form_id,
						false,
						false,
						false,
						null,
						true
					);
				}
				?>
			</div>
		</div>
		
		<div class="map wrapper">
			<div class="contact-phones">
				<?php
				if ( have_rows( 'phones' ) ) {
					while ( have_rows( 'phones' ) ) {
						the_row();
				?>
						<div class="contact-info">
							<a
								target="_blank"
								class="contact-link"
								href="tel://<?php the_sub_field( 'phone' ); ?>">
								<i class="fa fa-phone-square" aria-hidden="true"></i>
								<?php the_sub_field( 'country' ); ?>: <br>
								<strong><?php the_sub_field( 'phone' ); ?></strong>
							</a>
						</div>
				<?php
					}
				}
				?>
				<div class="contact-info">
					<a
						target="_blank"
						class="contact-link"
						href="tel://<?php the_field( 'whatsapp' ); ?>">
						<i class="fa fa-whatsapp" aria-hidden="true"></i> <?php _e( 'WhatsApp', 'marinaterra' ); ?>: <br>
						<strong><?php the_field( 'whatsapp' ); ?></strong>
					</a>
				</div>
				<div class="contact-info contact-info-email">
					<a
						target="_blank"
						class="contact-link"
						href="mailto:<?php the_field( 'email' ); ?>">
						<i class="fa fa-envelope" aria-hidden="true"></i> <?php _e( 'Correo Electrónico', 'marinaterra' ); ?>: <br>
						<strong><?php the_field( 'email' ); ?></strong>
					</a>
				</div>
			</div>
			
			<iframe class="map-iframe" src="https://www.google.com/maps/d/embed?mid=1uLJ-xbjMhfsX_iT2ONt9Md-LUifObhxp" width="640" height="480"></iframe>

			<div class="address">Bulevar Gabriel Estrada s/n, Sector La Herradura, 85506 San Carlos, Son.</div>
		</div>
	</div>
</section>

<?php
get_footer();
