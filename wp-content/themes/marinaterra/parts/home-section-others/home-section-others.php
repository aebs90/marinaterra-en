<section class="home-section-home-section-others">
	<div class="container">
		<?php
		if ( have_rows( 'home_section_others' ) ) {
			while ( have_rows( 'home_section_others' ) ) {
				the_row();
				
				$section_id = get_sub_field( 'section' );
				$section = new WP_Query( array(
					'page_id' => $section_id,
				) );
				
				if ( $section->have_posts() ) {
					while ( $section->have_posts() ) {
						$section->the_post();
		?>
						<div class="home-section-other-wrapper wrapper">
							<h2 class="home-section-other-title"><?php the_title(); ?></h2>
							
							<?php
							echo po_get_attachment_image(
								get_field( '_thumbnail_id' ),
								'pro-md',
								'pro-xl',
								false,
								array(
									'class' => 'home-section-other-img',
									'sizes' => '(max-width: 1300px) 50vw, 650px',
								)
							);
							?>
							
							<div class="home-section-other-description">
								<?php the_excerpt(); ?>
								
								<?php
								wp_nav_menu( array(
									'theme_location' => get_field( 'menu_section' ),
									'container' => false,
									'menu_class' => 'home-section-other-list',
								) );
								?>
								</ul>
							</div>
						</div>
		<?php
					}
				}
				wp_reset_postdata();
			}
		}
		wp_reset_postdata();
		?>
	</div>
</section>
