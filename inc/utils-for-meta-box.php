<?php

class UtilsMetaBox extends UtilsForImage
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
    if (!is_string($field)) return;
    return get_post_meta($this->id_post, $this->block . $field, true);
  }

  public function put_image($field, $size = 'full')
  {
    if (!is_string($field)) return;

    $id_img = get_post_meta($this->id_post, $this->block . $field, true);
    echo $this->get_html_tag_image($id_img, $size);
  }

  public function get_array_fields($field, $single = true)
  {
    return get_post_meta($this->id_post, $this->block . $field, $single);
  }

  public function check_field($field)
  {
    $meta_data = get_post_meta($this->id_post, $this->block . $field, true);
    return !empty($meta_data);
  }
}

class UtilsForImage
{

  protected function check_image($id)
  {
    return wp_attachment_is_image($id);
  }

  protected function get_alt($id)
  {
    if (!$this->check_image($id)) return '';
    return get_post_meta($id, '_wp_attachment_image_alt', true);
  }

  protected function get_caption($id)
  {
    if (!$this->check_image($id)) return '';
    return wp_get_attachment_caption($id);
  }

  protected function get_custom_link($id)
  {
    if (!$this->check_image($id)) return '';
    return get_post_meta($id, '_wc_gallery_custom_image_link', true);
  }

  protected function get_data_image($id)
  {
    if (!$this->check_image($id)) return [];
    return [
      'id' => $id,
      'alt' => $this->get_alt($id),
      'caption' => $this->get_caption($id),
      'link' => $this->get_custom_link($id),
    ];
  }

  public function get_html_tag_image($id, $size = 'full', $loading = 'lazy')
  {
    if (!$this->check_image($id)) return '';
    $image = $this->get_data_image($id);
    return wp_get_attachment_image($image['id'], $size, '', ['alt' => $image['alt'], 'caption' => $image['caption'], 'loading' => $loading]);
  }

  public function get_html_tag_image_with_link($id, $size = 'full', $link = null)
  {
    if (!$this->check_image($id)) return '';

    if (empty($link)) $link = $this->get_custom_link($id);

    $image_tag = $this->get_html_tag_image($id, $size);

    if (empty($link)) return $image_tag;
    else return "<a href='$link'>$image_tag</a>";
  }
}
