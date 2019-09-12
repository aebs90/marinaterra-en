<?php
echo po_get_attachment_image(
	get_field( '_thumbnail_id' ),
	'pro-md',
	'pro-xl',
	false,
	array(
		'class' => 'main-image-img',
		'sizes' => '(max-width: 1300px) 50vw, 650px',
	)
);
