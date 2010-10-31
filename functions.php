<?php
/* custom size of the header img */
add_filter('twentyten_header_image_height','sr_header_height');
//add_filter('twentyten_header_image_width','sr_header_width');

function sr_header_height($size){
   return 87;
}
/*function sr_header_width($size){
   return 900;
}*/
?>
