<?php

class UtilsMetaBox
{
  private $block, $id_post;

  function __construct($block)
  {
    $this->block = $block;
    $this->id_post = get_the_ID();
  }

  public function get_text($field)
  {
    echo nl2br(get_post_meta($this->id_post, $this->block . $field, true));
  }

  public function get_image($field)
  {
    $id_img = get_post_meta($this->id_post, $this->block . $field, true);

    $alt = get_post_meta($id_img, '_wp_attachment_image_alt', true);
    $alt = $alt ? $alt : get_site_url();

    echo wp_get_attachment_image($id_img, 'medium', '', ['alt' => $alt]);
  }

  public function get_text_array($field)
  {
    return get_post_meta($this->id_post, $this->block . $field, true);
  }

  public function get_meta_data($field) {
    return get_post_meta($this->id_post, $this->block . $field);
  }

  public function check_field($field) {
    $meta_data = get_post_meta($this->id_post, $this->block . $field, true);
    return !empty($meta_data);
  }
}
