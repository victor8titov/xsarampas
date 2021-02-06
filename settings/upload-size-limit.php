<?php

add_filter('upload_size_limit', 'xsa_upload_size_limit');
function xsa_upload_size_limit()
{
  return wp_convert_hr_to_bytes('250M');
}
