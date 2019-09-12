<section class="home-section-1">
	<div class="container">
		<?php
		$home_section_1 = new WP_Query( array(
			'page_id' => get_field( 'home_section_1' ),
		) );
		
		if ( $home_section_1->have_posts() ) {
			while ( $home_section_1->have_posts() ) {
				$home_section_1->the_post();
		?>
				<h2 class="home-section-1-title"><?php the_title(); ?></h2>
		
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
						<div class="home-section-1-wrapper wrapper">
							<a class="home-section-1-link" href="<?php the_permalink(); ?>">
								<div class="home-section-1-img-wrapper">
									<?php
									echo po_get_attachment_image(
										get_field( '_thumbnail_id' ),
										'pro-md',
										'pro-lg',
										false,
										array(
											'class' => 'home-section-1-img',
											'sizes' => '(max-width: 1300px) 50vw, 650px',
										)
									);
									?>
								</div>
								<h3 class="home-section-1-name"><?php the_title(); ?></h3>
							</a>
						</div>
				<?php
					}
				}
				?>
		<?php
			}
		}
		
		wp_reset_postdata();
		?>
	</div>
</section>
