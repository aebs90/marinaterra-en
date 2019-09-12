<?php
$fields = array();

po_acf_fields_add( $fields, 'theme-options', array(
	array(
		'key' => 'field_theme_options_phones',
		'label' => __( 'Teléfonos', 'marinaterra' ),
		'button_label' => __( 'Agregar Teléfono', 'marinaterra' ),
		'sub_fields' => array(
			array(
				'key' => 'field_theme_options_phones_country',
				'label' => __( 'País', 'marinaterra' ),
			),
			array(
				'key' => 'field_theme_options_phones_phone',
				'label' => __( 'Teléfono', 'marinaterra' ),
			),
		),
	),
	array(
		'key' => 'field_theme_options_whatsapp',
	),
	array(
		'key' => 'field_theme_options_email',
	),
	array(
		'key' => 'field_theme_options_social_networks',
		'label' => __( 'Redes Sociales', 'marinaterra' ),
		'button_label' => __( 'Agregar Red Social', 'marinaterra' ),
		'sub_fields' => array(
			array(
				'key' => 'field_theme_options_social_networks_fa_code',
				'label' => __( 'Código FontAwesome', 'marinaterra' ),
			),
			array(
				'key' => 'field_theme_options_social_networks_url',
				'label' => __( 'URL', 'marinaterra' ),
			),
		),
	),
	array(
		'key' => 'field_theme_options_google_play_url',
	),
	array(
		'key' => 'field_theme_options_app_store_url',
	),
	array(
		'key' => 'field_theme_options_contact_page',
		'label' => __( 'Página de Contacto', 'marinaterra' ),
	),
) );

acf_add_local_field_group(array (
	'key' => 'group_theme_options',
	'title' => __( 'Opciones del Tema', 'marinaterra' ),
	'fields' => $fields,
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-theme-options',
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
