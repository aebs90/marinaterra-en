<?php
$fields = array();

po_acf_fields_add( $fields, 'pages', array(
	array(
		'key' => 'field_index_pages',
		'sub_fields' => array(
			array(
				'key' => 'field_index_pages_page',
			),
		),
	),
) );

acf_add_local_field_group(array (
	'key' => 'group_page_index',
	'title' => __( 'Índice', 'marinaterra' ),
	'fields' => $fields,
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-index.php',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		'the_content',
	),
	'active' => 1,
	'description' => '',
));
