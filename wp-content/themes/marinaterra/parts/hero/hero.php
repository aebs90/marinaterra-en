<section class="hero">
	<h1 class="hero-title"><?php the_title(); ?></h1>
	<?php
	echo po_get_attachment_image(
		get_field( 'hero_image' ),
		'ultra-panoramic-lg',
		'ultra-panoramic-xl',
		false,
	array(
		'class' => 'hero-img',
		'sizes' => '100vw',
	)
	);
	?>
</section>
