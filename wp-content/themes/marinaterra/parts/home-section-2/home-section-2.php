<section class="home-section-2">
	<div class="container">
		<?php
		$home_section_2 = new WP_Query( array(
			'page_id' => get_field( 'home_section_2' ),
		) );
		
		if ( $home_section_2->have_posts() ) {
			while ( $home_section_2->have_posts() ) {
				$home_section_2->the_post();
		?>
				<h2 class="title"><?php the_title(); ?> Marinaterra Hotel &amp; Spa</h2>
				
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
				?>
					<ul class="home-section-2-list">
						<?php
						while ( $pages_query->have_posts() ) {
							$pages_query->the_post();
						?>
							<li class="home-section-2-li">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</li>					
						<?php
						}
						?>
					</ul>
					
					<div class="home-section-2-wrapper">
						<div class="owl-carousel">
							<?php
							while ( $pages_query->have_posts() ) {
								$pages_query->the_post();
							?>
									<div>
										<a href="<?php the_permalink(); ?>">
											<?php
											echo po_get_attachment_image(
												get_field( '_thumbnail_id' ),
												'pro-md',
												'pro-xl',
												false,
												array(
													'sizes' => '(max-width: 1300px) 50vw, 650px',
												)
											);
											?>
											<h3 class="subtitle"><?php the_title(); ?></h3>
										</a>
									</div>
							<?php
							}
							?>
						</div>
					</div>
				<?php
				}
				?>
		<?php
			}
		}
		wp_reset_postdata();
		?>
	</div>
</section>
