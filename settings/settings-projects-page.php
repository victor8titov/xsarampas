<?php
// отключаем скрипты и стили которые конфликтуют с подгруженой библиотекой fancybox

add_action('wp_print_scripts', function () {
  if (is_page_template('projects.php')) {
    wp_deregister_style('fancybox-0');
    wp_dequeue_style('fancybox-0');
    wp_deregister_script('ngg_lightbox_context');
  }
}, 100);

add_action('wp_enqueue_scripts', function () {
  if (is_page_template('projects.php')) {
    wp_dequeue_style('fancybox-0');
  }
});
