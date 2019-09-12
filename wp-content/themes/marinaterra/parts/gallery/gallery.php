<?php
$gallery = get_field( 'gallery' );

if ( $gallery ) {
?>
	<div class="gallery">
		<?php
		foreach ( $gallery as $image ) {
			$img = wp_get_attachment_image_src(
				$image['ID'],
				'full'
			);
		?>
			<a class="gallery-link" href="<?php echo $img[0]; ?>">
				<?php
				echo wp_get_attachment_image(
					$image['ID'],
					'thumbnail',
					false,
					array(
						'class' => 'main-image-img',
						'sizes' => '(max-width: 1300px) 50vw, 650px',
					)
				);
				?>
			</a>
		<?php
		}
		?>
	</div>
<?php
}
