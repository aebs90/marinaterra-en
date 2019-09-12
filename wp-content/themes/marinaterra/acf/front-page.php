<?php
$fields = array();

po_acf_fields_add( $fields, 'slider', array(
	array(
		'key' => 'field_slider',
	),
) );

po_acf_fields_add( $fields, 'intro', array(
	array(
		'key' => 'field_intro',
		'sub_fields' => array(
			array(
				'key' => 'field_intro_title',
			),
			array(
				'key' => 'field_intro_content',
			),
			array(
				'key' => 'field_intro_image',
			),
		),
	),
) );

po_acf_fields_add( $fields, 'home', array(
	array(
		'key' => 'field_home',
		'sub_fields' => array(
			array(
				'key' => 'field_home_section_1',
			),
			array(
				'key' => 'field_home_section_2',
			),
			array(
				'key' => 'field_home_section_3',
			),
			array(
				'key' => 'field_home_section_others',
				'sub_fields' => array(
					array(
						'key' => 'field_home_section_others_section',
					),
				),
			),
		),
	),
) );

acf_add_local_field_group(array (
	'key' => 'group_home',
	'title' => __( 'Inicio', 'marinaterra' ),
	'fields' => $fields,
	'location' => array (
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		'the_content',
		'excerpt',
	),
	'active' => 1,
	'description' => '',
));
