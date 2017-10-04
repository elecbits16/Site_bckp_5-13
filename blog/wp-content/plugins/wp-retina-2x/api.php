<?php

/**
 *
 * FUNCTIONS THAT CAN BE USED BY THEMES/PLUGINS DEVELOPERS
 * FOR ADDITIONAL RETINA SUPPORT
 *
 */

// Rewrite the HTML to add Retina support (not recommended, that is
// done automatically by the plugin through the Method)
function wr2x_picture_rewrite( $buffer ) {
  global $wr2x_core;
  return $wr2x_core->picture_rewrite( $buffer );
}

// Return Retina URL from the Image URL
function wr2x_get_retina_from_url( $url ) {
  global $wr2x_core;
  return $wr2x_core->get_retina_from_url( $url );
}

// Return the retina file if my found for this normal file
function wr2x_get_retina( $file ) {
  global $wr2x_core;
  return $wr2x_core->get_retina( $file );
}

// Generate the retina images for the given meta of a media
function wr2x_generate_images( $meta ) {
  global $wr2x_core;
  return $wr2x_core->generate_images( $meta );
}

function wr2x_get_pathinfo_from_image_src( $image_src ) {
  global $wr2x_core;
  return $wr2x_core->get_pathinfo_from_image_src( $meta );
}

?>
