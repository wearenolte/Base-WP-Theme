<?php

// Composer autoload.
$autoload = get_template_directory() . '/vendor/autoload.php';
if ( file_exists( $autoload ) ) {
	require_once $autoload ;
}

// ACF save/load fields in JSON format inside /acf folder.
add_filter( 'acf/settings/save_json', function() {
  return get_template_directory() . '/acf';
} );

add_filter( 'acf/settings/load_json', function( $paths ) {
  unset( $paths[0] );
  $paths[] = get_template_directory() . '/acf';
  return $paths;
} );
