<?php
get_header();

get_template_part( 'parts/menu-section/menu-section' );

get_template_part( 'parts/hero/hero' );
?>

<section class="main">
	<div class="container">
		<div class="main-content wrapper">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
			?>
					<h2><?php the_title(); ?></h2>
			<?php
					the_content();
				}
			}
			?>
		</div>
		<div class="main-image wrapper">
			<?php get_template_part( 'parts/featured-image/featured-image' ); ?>
			<?php get_template_part( 'parts/gallery/gallery' ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
