<?php

/**
 * https://developer.wordpress.org/reference/functions/add_image_size/
 * add_image_size( $name:string, $width:integer, $height:integer, $crop:boolean|array )
 * array( 'x_crop_position', 'y_crop_position' )
 * x_crop_position > left center right
 * y_crop_position > top center bottom
 * 
 */

add_image_size('sb_big', 1400, 800, true);
add_image_size('sb_square', 400, 400, true);
add_image_size('sb_single', 800, 500, true);