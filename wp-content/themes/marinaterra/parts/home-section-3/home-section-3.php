<section class="home-section-3">
	<div class="container">
		<?php
		$home_section_3_id = get_field( 'home_section_3' );
		$home_section_3 = new WP_Query( array(
			'page_id' => $home_section_3_id,
		) );
		
		if ( $home_section_3->have_posts() ) {
			while ( $home_section_3->have_posts() ) {
				$home_section_3->the_post();
		?>
				<div class="home-section-3-wrapper wrapper">
					<a
						class="home-section-3-link"
						href="<?php the_permalink(); ?>">
						<div class="home-section-3-text">
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						</div>
					</a>
				</div>
		<?php
				$pages_query = new WP_Query( array(
					'post_type' => 'page',
					'post_parent' => $home_section_3_id,
					'posts_per_page' => -1,
					'order' => 'ASC',
				) );
				
				if ( $pages_query->have_posts() ) {
					while ( $pages_query->have_posts() ) {
						$pages_query->the_post();
				?>
						<div class="home-section-3-wrapper wrapper">
							<a
								class="home-section-3-link"
								href="<?php the_permalink() ;?>">
								<?php
								echo po_get_attachment_image(
									get_field( '_thumbnail_id' ),
									'panoramic-md',
									'panoramic-xl',
									false,
									array(
										'class' => 'home-section-3-img',
										'sizes' => '(max-width: 1300px) 50vw, 650px',
									)
								);
								?>
								<h3 class="home-section-3-title"><?php the_title(); ?></h3>
							</a>
						</div>
				<?php
					}
				}
			}
		}
		wp_reset_postdata();
		?>
	</div>
</section>
