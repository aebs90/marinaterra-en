<?php
/* ================================================================================= *
 * * Constants * **
 * ================================================================================= */
define( 'PO_URL', get_template_directory_uri() );
define( 'PO_PATH', get_template_directory() );
define( 'PO_CHILD_URL', get_stylesheet_directory_uri() );
define( 'PO_CHILD_PATH', get_stylesheet_directory() );

/* ================================================================================= *
 * ACF **
 * ================================================================================= */

/** Load ACF Groups */ 
add_action('acf/init', function() {
	$acfs = scandir( PO_CHILD_PATH . '/acf' );

	foreach ( $acfs as $subdir ) {
		if ( ! in_array( $subdir, array( ".", ".." ) ) ) {
			if ( file_exists( PO_CHILD_PATH . "/acf/{$subdir}" ) ) {
				include_once( PO_CHILD_PATH . "/acf/{$subdir}" );
			}
		}
	}
});

/** Function: Get ACF Fields */
function po_acf_load_json( $part ) {
	/* Load JSON */
		if ( ! file_exists( PO_CHILD_PATH . "/parts/{$part}/{$part}-acf.json" ) ) {
			return false;
		}

		$json = file_get_contents( PO_CHILD_PATH . "/parts/{$part}/{$part}-acf.json" );
		if ( ! $json ) {
			return false;
		}
		
		$acf = json_decode( $json, true );
	
		/* Get only first group. ACF exports several groups, but we are only exporting/managing one. */
		$acf = $acf[0];
	
	/* Return Group Array */
	return $acf;
}

function po_acf_fields_add( &$fields, $part, $custom = array() ) {
	$json = po_acf_load_json( $part );

	$json['fields'] = array_replace_recursive( $json['fields'], $custom );

	foreach ( $json['fields'] as $field ) {	
		$fields[] = $field;
	}
}

/* ================================================================================= *
 * Assets **
 * ================================================================================= */
add_action( 'wp_enqueue_scripts', 'po_assets', 9 );

function po_assets() {

	$parts = scandir( PO_CHILD_PATH . "/libraries" );

	foreach ( $parts as $subdir ) {
		if ( ! in_array( $subdir, array( ".", ".." ) ) ) {
			if ( is_dir( PO_CHILD_PATH . "/libraries/{$subdir}" ) ) {
				if ( file_exists( PO_CHILD_PATH . "/libraries/{$subdir}/{$subdir}-enqueue.php" ) ) {
					include_once( PO_CHILD_PATH . "/libraries/{$subdir}/{$subdir}-enqueue.php" );
				}
			}
		}
	}

	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.php' );

}

/* ================================================================================= *
 * Image Sizes **
 * ================================================================================= */

/** 1:1 (Square) */
add_image_size( 'square-sm', 325, 325, true );
add_image_size( 'square-md', 650, 650, true );
add_image_size( 'square-lg', 1400, 1400, true );
add_image_size( 'square-xl', 2048, 2048, true );

/** 4:3 (Smartphones) */
add_image_size( 'smartphone-sm', 325, 244, true );
add_image_size( 'smartphone-md', 650, 488, true );
add_image_size( 'smartphone-lg', 1400, 1050, true );
add_image_size( 'smartphone-xl', 2048, 1536, true );

/** 3:2 (Professional Cameras) */
add_image_size( 'pro-sm', 325, 217, true );
add_image_size( 'pro-md', 650, 434, true );
add_image_size( 'pro-lg', 1400, 934, true );
add_image_size( 'pro-xl', 2048, 1366, true );

/** 16:9 (Widescreen) */
add_image_size( 'widescreen-sm', 325, 183, true );
add_image_size( 'widescreen-md', 650, 366, true );
add_image_size( 'widescreen-lg', 1400, 788, true );
add_image_size( 'widescreen-xl', 2048, 1152, true );

/** 2:1 | 18:9 (Univisium) */
add_image_size( 'univisium-sm', 325, 163, true );
add_image_size( 'univisium-md', 650, 325, true );
add_image_size( 'univisium-lg', 1400, 700, true );
add_image_size( 'univisium-xl', 2048, 1024, true );

/** 2.5:1 (Panoramic) */
add_image_size( 'panoramic-sm', 325, 130, true );
add_image_size( 'panoramic-md', 650, 260, true );
add_image_size( 'panoramic-lg', 1400, 560, true );
add_image_size( 'panoramic-xl', 2048, 820, true );

/** 3:1 (Ultra-Panoramic) */
add_image_size( 'ultra-panoramic-sm', 325, 109, true );
add_image_size( 'ultra-panoramic-md', 650, 217, true );
add_image_size( 'ultra-panoramic-lg', 1400, 467, true );
add_image_size( 'ultra-panoramic-xl', 2048, 683, true );
