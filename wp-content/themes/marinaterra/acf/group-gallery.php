<?php
$fields = array();

po_acf_fields_add( $fields, 'gallery', array(
	array(
		'key' => 'field_gallery',
		'label' => __( 'Galería', 'marinaterra' ),
	),
) );

acf_add_local_field_group(array (
	'key' => 'group_gallery',
	'title' => __( 'Galería', 'marinaterra' ),
	'fields' => $fields,
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
			array (
				'param' => 'page_type',
				'operator' => '!=',
				'value' => 'front_page',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'page-text.php',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
