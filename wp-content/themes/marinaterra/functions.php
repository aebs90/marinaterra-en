<?php
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
    load_theme_textdomain( 'marinaterra', PO_CHILD_PATH .'/languages' );
}

add_post_type_support( 'page', 'excerpt' );

/* =============================================================
 * - Menus -
 * ============================================================= */

/** Register Dynamic Menus */
register_nav_menus( array(
	'primary' => __( 'Principal', 'marinaterra' ),
	'secondary' => __( 'Secundario', 'marinaterra' ),
	'footer' => __( 'Pie de página', 'marinaterra' ),
	'rooms' => __( 'Habitaciones', 'marinaterra' ),
	'amenities' => __( 'Amenidades', 'marinaterra' ),
	'weddings' => __( 'Bodas', 'marinaterra' ),
	'restaurant' => __( 'Gastronomía', 'marinaterra' ),
	'activities' => __( 'Actividades', 'marinaterra' ),
	'events' => __( 'Eventos', 'marinaterra' ),
	'atractions' => __( 'Atractivos', 'marinaterra' ),
) );

function po_get_attachment_image($attachment_id, $size = 'thumbnail', $size_retina = 'thumbnail', $icon = false, $attr = '') {
    $html = '';
    $image = wp_get_attachment_image_src($attachment_id, $size, $icon);
	$image_retina = wp_get_attachment_image_src($attachment_id, $size_retina, $icon);
    if ( $image ) {
        list($src, $width, $height) = $image;
		list($src_retina, $width_retina, $height_retina) = $image_retina;
        $hwstring = image_hwstring($width, $height);
        $size_class = $size;
        if ( is_array( $size_class ) ) {
            $size_class = join( 'x', $size_class );
        }
        $attachment = get_post($attachment_id);
        $default_attr = array(
            'src'   => $src,
            'class' => "attachment-$size_class size-$size_class",
            'alt'   => trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
        );
 
        $attr = wp_parse_args( $attr, $default_attr );
 
        // Generate 'srcset' and 'sizes' if not already present.
        if ( empty( $attr['srcset'] ) ) {
            $image_meta = wp_get_attachment_metadata( $attachment_id );

            if ( is_array( $image_meta ) ) {
                $size_array = array( absint( $width_retina ), absint( $height_retina ) );
                $srcset = wp_calculate_image_srcset( $size_array, $src_retina, $image_meta, $attachment_id );
                $sizes = wp_calculate_image_sizes( $size_array, $src_retina, $image_meta, $attachment_id );
 
                if ( $srcset && ( $sizes || ! empty( $attr['sizes'] ) ) ) {
                    $attr['srcset'] = $srcset;
 
                    if ( empty( $attr['sizes'] ) ) {
                        $attr['sizes'] = $sizes;
                    }
                }
            }
        }
 
        /**
         * Filters the list of attachment image attributes.
         *
         * @since 2.8.0
         *
         * @param array        $attr       Attributes for the image markup.
         * @param WP_Post      $attachment Image attachment post.
         * @param string|array $size       Requested size. Image size or array of width and height values
         *                                 (in that order). Default 'thumbnail'.
         */
        $attr = apply_filters( 'wp_get_attachment_image_attributes', $attr, $attachment, $size );
        $attr = array_map( 'esc_attr', $attr );
        $html = rtrim("<img $hwstring");
        foreach ( $attr as $name => $value ) {
            $html .= " $name=" . '"' . $value . '"';
        }
        $html .= ' />';
    }
 
    return $html;
}

/* =============================================================
 * - Theme Options -
 * ============================================================= */

/** Register Theme Options Page */
if( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => __( 'Theme Options', 'marinaterra' ),
	) );	
}

/* ================================================================================= *
 * Assets **
 * ================================================================================= */
add_action( 'wp_enqueue_scripts', 'po_assets_child', 9 );

function po_assets_child() {
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), time(), true );

}