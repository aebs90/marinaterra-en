<?php
$fields = array();

po_acf_fields_add( $fields, 'content-zig-zag', array(
	array(
		'key' => 'field_content_zig_zag',
		'label' => __( 'Contenido en Zig Zag', 'marinaterra' ),
		'button_label' => __( 'Agregar Contenido', 'marinaterra' ),
		'sub_fields' => array(
			array(
				'key' => 'field_content_zig_zag_title',
				'label' => __( 'Título', 'marinaterra' ),
			),
			array(
				'key' => 'field_content_zig_zag_content',
				'label' => __( 'Contenido', 'marinaterra' ),
			),
			array(
				'key' => 'field_content_zig_zag_image',
				'label' => __( 'Imagen', 'marinaterra' ),
			),
		),
	),
) );

acf_add_local_field_group(array (
	'key' => 'group_page_content_zig_zag',
	'title' => __( 'Contenido en Zig Zag', 'marinaterra' ),
	'fields' => $fields,
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-content-zig-zag.php',
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
