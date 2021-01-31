<?php

class UtilsMetaBox
{
  private $block, $id_post;

  function __construct($block)
  {
    $this->block = $block;
    $this->id_post = get_the_ID();
  }

  public function put_text($field)
  {
    echo nl2br(get_post_meta($this->id_post, $this->block . $field, true));
  }

  public function get_text($field)
  {
    return get_post_meta($this->id_post, $this->block . $field, true);
  }

  public function put_image($field)
  {
    $id_img = get_post_meta($this->id_post, $this->block . $field, true);

    $alt = get_post_meta($id_img, '_wp_attachment_image_alt', true);
    $alt = $alt ? $alt : get_site_url();

    $caption = wp_get_attachment_caption($id_img);

    echo wp_get_attachment_image($id_img, 'medium', '', ['alt' => $alt, 'caption' => $caption]);
  }

  public function get_array_fields($field)
  {
    return get_post_meta($this->id_post, $this->block . $field, true);
  }

  public function check_field($field)
  {
    $meta_data = get_post_meta($this->id_post, $this->block . $field, true);
    return !empty($meta_data);
  }
}
