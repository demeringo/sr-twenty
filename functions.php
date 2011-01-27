<?php

define('child_template_directory', dirname( get_bloginfo('stylesheet_url')) );

/* custom size of the header img */
add_filter('twentyten_header_image_height','sr_header_height');
//add_filter('twentyten_header_image_width','sr_header_width');

function sr_header_height($size){
   return 87;
}
/*function sr_header_width($size){
   return 900;
}*/

/* Post thumbnail support */
add_theme_support( 'post-thumbnails' );
?>
