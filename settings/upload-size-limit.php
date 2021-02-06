<?php
ini_set( 'upload_max_size' , '250M' );
ini_set( 'post_max_size', '250M');

add_filter('upload_size_limit', 'xsa_upload_size_limit');
function xsa_upload_size_limit()
{
  return wp_convert_hr_to_bytes('250M');
}
