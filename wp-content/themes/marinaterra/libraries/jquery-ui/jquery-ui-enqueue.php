<?php
wp_enqueue_style(
	'jquery-ui',
	PO_CHILD_URL . '/libraries/jquery-ui/jquery-ui.min.css',
	array(),
	null
);

wp_enqueue_style(
	'jquery-ui-theme',
	PO_CHILD_URL . '/libraries/jquery-ui/jquery-ui.theme.min.css',
	array(),
	null
);

wp_enqueue_script(
	'jquery-ui',
	PO_CHILD_URL . '/libraries/jquery-ui/jquery-ui.min.js',
	array( 'jquery' ),
	null,
	true
);
