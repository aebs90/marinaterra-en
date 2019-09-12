<?php
$fields = array();

po_acf_fields_add( $fields, 'page-contact', array(
	array(
		'key' => 'field_contact_form',
		'label' => __( 'Formulario de Contacto', 'marinaterra' ),
		'sub_fields' => array(
			array(
				'key' => 'field_contact_form_id',
				'label' => __( 'ID del Formulario', 'marinaterra' ),
			),
			array(
				'key' => 'field_contact_form_title',
				'label' => __( 'Título', 'marinaterra' ),
			),
			array(
				'key' => 'field_contact_form_description',
				'label' => __( 'Descripción', 'marinaterra' ),
			),
		),
	),
	array(
		'key' => 'field_contact_phones',
		'label' => __( 'Teléfonos', 'marinaterra' ),
		'button_label' => __( 'Agregar Teléfono', 'marinaterra' ),
		'sub_fields' => array(
			array(
				'key' => 'field_contact_phones_country',
				'label' => __( 'País', 'marinaterra' ),
			),
			array(
				'key' => 'field_contact_phones_phone',
				'label' => __( 'Teléfono', 'marinaterra' ),
			),
		),
	),
	array(
		'key' => 'field_contact_whatsapp',
	),
	array(
		'key' => 'field_contact_email',
		'key' => __( 'Correo Electrónico', 'marinaterra' ),
	),
) );

acf_add_local_field_group(array (
	'key' => 'group_page_contact',
	'title' => __( 'Contacto', 'marinaterra' ),
	'fields' => $fields,
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-contact.php',
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
		'excerpt',
	),
	'active' => 1,
	'description' => '',
));
