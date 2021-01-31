<?php

define("FLAWLESS_SKATEPARK", "main_page_flawless_skatepark_");
define("SOCIAL_TASKS", "main_page_social-tasks_");
define("SKATEPARK_IN_NUMBERS", "main_page_skatepark_in_numbers_");
define("TYPE_CLIENTS", "main_page_type_clients_");
define("SHOW_VIDEO", "main_page_show_video_");
define("SLIDER", "main_page_slider_");
define("OUR_PROJECTS", "main_page_our_projects_");
define("TEAM", "main_page_team_");
define("CLIENTS", "main_page_clients_");
define("ABOUT_SKATEPARK", "main_page_about_skatepark_");

add_filter('rwmb_meta_boxes', 'prefix_register_meta_boxes');

function prefix_register_meta_boxes($meta_boxes)
{
  if (!is_page_main()) return $meta_boxes;

  $meta_boxes[] = meta_boxes_for_flawless_skatepark();
  $meta_boxes[] = meta_boxes_for_social_tasks();
  $meta_boxes[] = meta_boxes_for_skatepark_in_numbers();
  $meta_boxes[] = meta_boxes_for_type_clients();
  $meta_boxes[] = meta_boxes_for_show_video();
  $meta_boxes[] = meta_boxes_for_slider();
  $meta_boxes[] = meta_boxes_for_our_projects();
  $meta_boxes[] = meta_boxes_for_team();
  $meta_boxes[] = meta_boxes_for_clients();
  $meta_boxes[] = meta_boxes_for_about_skatepark();


  return $meta_boxes;
}

function is_page_main()
{
  //  ищем номер поста в GET and POST переменных
  // Get the current ID
  if (isset($_GET['post'])) $id = $_GET['post'];
  elseif (isset($_POST['post_ID'])) $id = $_POST['post_ID'];

  // Get current template
  //  Пользуемся скрытыми метополями вордпресс
  //  для каждой страницы шаблона есть метаполе с именем шаблона
  //  скрыетое метополе _wp_page_template
  $pageTemplate = $id ?  get_post_meta($id, '_wp_page_template', true) : '';

  return $pageTemplate == 'template-main.php';
}

function meta_boxes_for_flawless_skatepark()
{
  $prefix = FLAWLESS_SKATEPARK;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "Что такое безупречный скейт парк"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'id'               => $prefix . 'image',
      'name'             => 'Главная картинка блока',
      'type'             => 'image_advanced',
      'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
    ),
    array(
      'type' => 'heading',
      'name' => '6 ниформационных подблоков',
    ),
  );

  for ($i = 1; $i <= 6; $i++) {
    $fields[] = array(
      'name'        => 'Заголовок',
      'id'          => $prefix . "field-$i-title",
      'type'        => 'text',
    );
    $fields[] = array(
      'name'        => 'Основной текст',
      'id'          => $prefix . "field-$i-text",
      'type'        => 'textarea',
    );
    if ($i !== 10) {
      $fields[] = array(
        'type' => 'divider',
      );
    }
  }

  $config['fields'] = array_merge($fields);
  return $config;
}

function  meta_boxes_for_social_tasks()
{
  $prefix = SOCIAL_TASKS;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "СКЕЙТ ПАРК, КАК РЕШЕНИЕ СОЦИАЛЬНЫХ ЗАДАЧ"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'type' => 'heading',
      'name' => '3 ниформационных подблока',
    ),
  );

  for ($i = 1; $i <= 3; $i++) {
    $fields[] = array(
      'name'        => 'Заголовок',
      'id'          => $prefix . "field-$i-title",
      'type'        => 'text',
    );
    $fields[] = array(
      'name'        => 'Основной текст',
      'id'          => $prefix . "field-$i-text",
      'type'        => 'text',
      'clone'         => true,         // повторяемое поле
      'sort_clone'    => true,         // Можно ли сортировать клоны?
      'add_button'    => '+ добавить', // Текст кнопки добавления клона.
      'max_clone'     => 10,           // Максимальное количество клонов. Число.
      'size' => 100,
    );
    $fields[] = array(
      'id'               => $prefix . "field-$i-image",
      'name'             => 'Картинка блока',
      'type'             => 'image_advanced',
      'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
    );
    if ($i !== 3) {
      $fields[] = array(
        'type' => 'divider',
      );
    }
  }

  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_skatepark_in_numbers()
{
  $prefix = SKATEPARK_IN_NUMBERS;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "СКЕЙТ-ПАРКИ В ЦИФРАХ"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'type' => 'heading',
      'name' => '8 ниформационных подблока',
    ),
  );

  for ($i = 1; $i <= 8; $i++) {
    $fields[] = array(
      'name'        => 'Заголовок',
      'id'          => $prefix . "field-$i-title",
      'type'        => 'text',
    );
    $fields[] = array(
      'name'        => 'Основной текст',
      'id'          => $prefix . "field-$i-text",
      'type'        => 'text',
      'size' => 60,
    );
    if ($i !== 8) {
      $fields[] = array(
        'type' => 'divider',
      );
    }
  }

  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_type_clients()
{
  $prefix = TYPE_CLIENTS;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "Скейт-парки и скейт площадки"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'type' => 'heading',
      'name' => '3 ниформационных подблока',
    ),
  );

  for ($i = 1; $i <= 3; $i++) {
    $fields[] = array(
      'name'        => 'Заголовок',
      'id'          => $prefix . "field-$i-title",
      'type'        => 'text',
    );
    $fields[] = array(
      'name'        => 'Основной текст',
      'id'          => $prefix . "field-$i-text",
      'type'        => 'textarea',
    );
    $fields[] = array(
      'name'        => 'Ссылка на раздел сайта',
      'id'          => $prefix . "field-$i-link",
      'type'        => 'text',
    );
    if ($i !== 3) {
      $fields[] = array(
        'type' => 'divider',
      );
    }
  }

  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_show_video()
{
  $prefix = SHOW_VIDEO;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "Видео"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'id'        => $prefix . 'is_show',
      'name'      => 'Показывать или Скрывать',
      'type'      => 'switch',

      'style'     => 'square',
      'on_label'  => 'Да',
      'off_label' => 'Нет',
    ),
    array(
      'name'        => 'Вставка url видео',
      'id'          => $prefix . 'url',
      'type'        => 'textarea',
    ),
  );

  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_slider()
{
  $prefix = SLIDER;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "Главный СЛАЙДЕР"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'id'               => $prefix . 'images',
      'name'             => 'Фото для слайдера',
      'type'             => 'image_advanced',
    ),
  );

  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_our_projects()
{
  $prefix = OUR_PROJECTS;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "Наши проекты"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'type' => 'heading',
      'name' => '3 ниформационных подблока',
    ),
  );

  for ($i = 1; $i <= 2; $i++) {
    $fields[] = array(
      'name'        => 'Сслыка внутри ресурса',
      'id'          => $prefix . "field-$i-title",
      'type'        => 'text',
    );
    $fields[] = array(
      'id'               => $prefix . "field-$i-image",
      'name'             => 'Картинка блока',
      'type'             => 'image_advanced',
      'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
    );
    $fields[] = array(
      'type' => 'divider',
    );
  }

  $fields[] = array(
    'name'        => 'Основной текст',
    'id'          => $prefix . "field-3-text",
    'type'        => 'textarea',
  );


  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_team()
{
  $prefix = TEAM;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "Слайдер команда"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields[] = array(
    'id'               => $prefix . 'images',
    'name'             => 'Фото для слайдера',
    'type'             => 'image_advanced',
  );

  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_clients()
{
  $prefix = CLIENTS;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "Клиенты"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields[] = array(
    'id'               => $prefix . 'images',
    'name'             => 'Фото для слайдера',
    'type'             => 'image_advanced',
  );

  $config['fields'] = array_merge($fields);
  return $config;
}

function meta_boxes_for_about_skatepark()
{
  $prefix = ABOUT_SKATEPARK;

  $config = array(
    'id' => $prefix,
    'title' => 'Информационный блок "О скейт парках"',
    'post_types' => 'page',
    'fields' => array(),
  );

  $fields = array(
    array(
      'name'        => 'Заголовок',
      'id'          => $prefix . "main-title",
      'type'        => 'text',
    ),
    array(
      'id'               => $prefix . "main-image",
      'name'             => 'Главная картинка',
      'type'             => 'image_advanced',
      'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
    ),
    array(
      'name'        => 'Описание под главной картинкой',
      'id'          => $prefix . "main-text",
      'type'        => 'textarea',
    ),
    array(
      'name'        => 'Под загаловок 1',
      'id'          => $prefix . "subtitle-1",
      'type'        => 'text',
    ),
    array(
      'type' => 'heading',
      'name' => '4 ниформационных подблока',
    ),
  );

  for ($i = 1; $i <= 4; $i++) {
    $fields[] = array(
      'name'        => 'Заголовок',
      'id'          => $prefix . "field-$i-title",
      'type'        => 'text',
    );
    $fields[] = array(
      'name'        => 'Основной текст',
      'id'          => $prefix . "field-$i-text",
      'type'        => 'textarea',
    );
    $fields[] = array(
      'id'               => $prefix . "field-$i-image",
      'name'             => 'Картинка блока',
      'type'             => 'image_advanced',
      'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
    );
    if ($i !== 4) {
      $fields[] = array(
        'type' => 'divider',
      );
    }
  }

  $fields = array_merge($fields, array(
    array(
      'type' => 'divider',
    ),
    array(
      'name'        => 'Текст на сером фоне',
      'id'          => $prefix . "slogan-text",
      'type'        => 'textarea',
    ),
    array(
      'name'        => 'Под загаловок 2',
      'id'          => $prefix . "subtitle-2",
      'type'        => 'text',
    ),
    array(
      'name'        => 'Описание в конце блока',
      'id'          => $prefix . "end-text",
      'type'        => 'textarea',
    ),
  ));

  $config['fields'] = $fields;
  return $config;
}
