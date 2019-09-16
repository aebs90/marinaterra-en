<section class="intro">
	<div class="container">
		<div class="intro-img-wrapper wrapper">
			<img
				class="intro-img"
				alt="<?php _e( 'Webcam', 'marinaterra' ); ?>"
				src="https://marinaterra.com/wp-content/webcam.php">
		</div>
		
		<div class="intro-content-wrapper wrapper">
			<h1><?php the_field( 'intro_title' ); ?></h1>
			<?php the_field( 'intro_content' ); ?>
		</div>
	</div>
</section>
