<?php
/**
 * Template Name: Índice
 */

get_header();

get_template_part( 'parts/menu-section/menu-section' );

get_template_part( 'parts/hero/hero' );
?>

<section class="grid">
	<div class="container">
		<?php
		$pages = array();
		if ( have_rows( 'pages' ) ) {
			while ( have_rows( 'pages' ) ) {
				the_row( 'pages' );
				
				$pages[] = get_sub_field( 'page' );
			}
		}
		
		$pages_query = new WP_Query( array(
			'post_type' => 'page',
			'post__in' => $pages,
			'orderby' => 'post__in',
		) );
		
		if ( $pages_query->have_posts() ) {
			while ( $pages_query->have_posts() ) {
				$pages_query->the_post();
		?>
				<div class="grid-item wrapper">
					<h2 class="grid-title"><?php the_title(); ?></h2>
					
					<?php
					echo po_get_attachment_image(
						get_field( '_thumbnail_id' ),
						'pro-md',
						'pro-lg',
						false,
						array(
							'class' => 'grid-img',
							'sizes' => '(max-width: 1300px) 50vw, 650px',
						)
					);
					?>
					
					<div class="grid-description">
						<?php the_excerpt(); ?>
					</div>
					
					<a class="grid-link" href="<?php the_permalink(); ?>">
						<?php _e( 'Más información', 'marinaterra' ); ?>
						<i class="fa fa-angle-double-right"></i>
					</a>
				</div>
		<?php
			}
		}
		?>
	</div>
</section>

<?php
get_footer();
