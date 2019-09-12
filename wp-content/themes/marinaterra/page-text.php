<?php
/**
 * Template Name: Solo Texto
 */

get_header();
?>

<section class="main">
	<div class="container">
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
</section>

<?php
get_footer();
