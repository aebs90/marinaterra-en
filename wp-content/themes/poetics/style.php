<?php
/**
 * Print Headers
 */
header("Content-type: text/css; charset: UTF-8");

include_once( "poetics.css" );

$parts = scandir( "parts" );

foreach ( $parts as $subdir ) {
	if ( ! in_array( $subdir, array( ".", ".." ) ) ) {
		if ( is_dir( "parts/{$subdir}" ) ) {
			if ( file_exists( "parts/{$subdir}/{$subdir}.css" ) ) {
				include_once( "parts/{$subdir}/{$subdir}.css" );
			}
			if ( file_exists( "parts/{$subdir}/{$subdir}-lg.css" ) ) {
				echo "@media( max-width: 1359px ) {";
					include_once( "parts/{$subdir}/{$subdir}-lg.css" );
				echo "}";
			}
			if ( file_exists( "parts/{$subdir}/{$subdir}-md.css" ) ) {
				echo "@media( max-width: 1023px ) {";
					include_once( "parts/{$subdir}/{$subdir}-md.css" );
				echo "}";
			}
			if ( file_exists( "parts/{$subdir}/{$subdir}-sm.css" ) ) {
				echo "@media( max-width: 767px ) {";
					include_once( "parts/{$subdir}/{$subdir}-sm.css" );
				echo "}";
			}
			if ( file_exists( "parts/{$subdir}/{$subdir}-xs.css" ) ) {
				echo "@media( max-width: 479px ) {";
					include_once( "parts/{$subdir}/{$subdir}-xs.css" );
				echo "}";
			}
		}
	}
}

if ( isset( $child ) ) {
	$parts = scandir( "../{$child}/parts" );

	foreach ( $parts as $subdir ) {
		if ( ! in_array( $subdir, array( ".", ".." ) ) ) {
			if ( is_dir( "../{$child}/parts/{$subdir}" ) ) {
				if ( file_exists( "../{$child}/parts/{$subdir}/{$subdir}.css" ) ) {
					include_once( "../{$child}/parts/{$subdir}/{$subdir}.css" );
				}
				if ( file_exists( "../{$child}/parts/{$subdir}/{$subdir}-lg.css" ) ) {
					include_once( "../{$child}/parts/{$subdir}/{$subdir}-lg.css" );
				}
				if ( file_exists( "../{$child}/parts/{$subdir}/{$subdir}-md.css" ) ) {
					include_once( "../{$child}/parts/{$subdir}/{$subdir}-md.css" );
				}
				if ( file_exists( "../{$child}/parts/{$subdir}/{$subdir}-sm.css" ) ) {
					include_once( "../{$child}/parts/{$subdir}/{$subdir}-sm.css" );
				}
				if ( file_exists( "../{$child}/parts/{$subdir}/{$subdir}-xs.css" ) ) {
					include_once( "../{$child}/parts/{$subdir}/{$subdir}-xs.css" );
				}
			}
		}
	}
}
