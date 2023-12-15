<?php

function _themename_image_configuration() {
    add_image_size( 'mosaic', 640, 360  );
    add_image_size( 'custom-thumbnail', 160, 90 );

    // Photo
    add_image_size( 'gallery', 1280, 720 );
    add_image_size( 'slider', 1920, 1080 );
    add_image_size( 'grid', 853, 480);
}
add_action( 'after_setup_theme', '_themename_image_configuration' );

function _themename_remove_default_image_sizes( $sizes ) {

  /* Default WordPress */
  unset( $sizes[ 'thumbnail' ]);       // Remove Thumbnail (150 x 150 hard cropped)
  unset( $sizes[ 'medium' ]);          // Remove Medium resolution (300 x 300 max height 300px)
  unset( $sizes[ 'medium_large' ]);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
  unset( $sizes[ 'large' ]);           // Remove Large resolution (1024 x 1024 max height 1024px)

  return $sizes;
}

add_filter( 'intermediate_image_sizes_advanced', '_themename_remove_default_image_sizes' );
