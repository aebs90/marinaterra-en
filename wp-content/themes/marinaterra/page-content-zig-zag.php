<?php
/**
 * Template Name: Contenido en Zig Zag
 */

get_header();

get_template_part( 'parts/menu-section/menu-section' );

get_template_part( 'parts/hero/hero' );
?>

<section class="main">
	<?php
	if ( have_rows( 'content_zig_zag' ) ) {
		while ( have_rows( 'content_zig_zag' ) ) {
			the_row();
	?>
			<div class="container content-zig-zag">
				<div class="main-content wrapper">
					<h2><?php the_sub_field( 'title' ); ?></h2>

					<?php the_sub_field( 'content' ); ?>
				</div>
				<div class="main-image wrapper">
					<?php
					echo po_get_attachment_image(
						get_sub_field( 'image' ),
						'pro-md',
						'pro-xl',
						false,
						array(
							'class' => 'main-image-img',
							'sizes' => '(max-width: 1300px) 50vw, 650px',
						)
					);
					?>
				</div>
			</div>
	<?php
		}
	}
	?>
</section>

<?php
get_footer();
