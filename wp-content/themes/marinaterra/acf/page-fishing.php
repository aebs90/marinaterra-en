<?php
$fields = array();

po_acf_fields_add( $fields, 'gallery', array(
	array(
		'key' => 'field_gallery',
		'label' => __( 'Galería', 'marinaterra' ),
	),
) );

acf_add_local_field_group(array (
	'key' => 'group_page_fishing',
	'title' => __( 'Pesca', 'marinaterra' ),
	'fields' => $fields,
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-fishing.php',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(

	),
	'active' => 1,
	'description' => '',
));
