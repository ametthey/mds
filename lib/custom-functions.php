<?php
function year_shortcode () {
$year = date_i18n ('Y');
return $year;
}
add_shortcode ('year', 'year_shortcode');


// turn off p in contact form
// define( 'WPCF7_AUTOP', false );
add_filter('wpcf7_autop_or_not', '__return_false');
