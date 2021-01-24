<?php

add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );

function prefix_register_meta_boxes( $meta_boxes ) {
  if (!is_page_main()) return $meta_boxes;
  
  $prefix = 'main_page_';

  $meta_boxes[] = meta_boxes_for_flawless_skatepark($prefix);

  return $meta_boxes;
}

function is_page_main() {
  //  ищем номер поста в GET and POST переменных
  // Get the current ID
  if( isset( $_GET['post'] ) ) $id = $_GET['post'];    
  elseif( isset( $_POST['post_ID'] ) ) $id = $_POST['post_ID'];        

  // Get current template
  //  Пользуемся скрытыми метополями вордпресс
  //  для каждой страницы шаблона есть метаполе с именем шаблона
  //  скрыетое метополе _wp_page_template
  $pageTemplate = $id ?  get_post_meta( $id, '_wp_page_template', true ) : '';

  return $pageTemplate == 'template-main.php';
}


function meta_boxes_for_flawless_skatepark($prefix) {
  return array(
    'id' => $prefix . 'flawless_skatepark',
    'title' => 'Информационные блоки главной страницы',
    'post_types' => 'page',

    'fields' => array(
      array(
        'id'        => 'enable_slider',
        'name'      => 'Enable Slider?',
        'type'      => 'switch',
        
        // Style: rounded (default) or square
        'style'     => 'rounded',
    
        // On label: can be any HTML
        'on_label'  => 'Yes',
    
        // Off label
        'off_label' => 'No',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
        'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
    )
  );
}

/* template
$meta_boxes[] = array(
    'id' => $prefix . 'sddfflawless_skatepark',
    'title' => 'Информационные блоки главной страницы',
    'post_types' => 'page',

    'fields' => array(
      array(
        'id'        => 'enable_slider',
        'name'      => 'Enable Slider?',
        'type'      => 'switch',
        
        // Style: rounded (default) or square
        'style'     => 'rounded',
    
        // On label: can be any HTML
        'on_label'  => 'Yes',
    
        // Off label
        'off_label' => 'No',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
        'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),
      array(
        'name'        => 'Настроение',
        'id'          => 'field_id',
        'type'        => 'text',
      
        // Текст-подсказка внутри поля. Необязательный.
        'placeholder' => 'Введите или выберите настроение',
      
        // Размер. Необязательный.
        'size'        => 30,
      ),
      array(
        'name'        => 'Область текста',
        'id'          => 'field_id',
        'type'        => 'textarea',
      
        // Эти параметры необязательные
        'placeholder' => 'Введите текст или html', // По умолчанию без placeholder
        'cols'        => 50, // По умолчанию 60
        'rows'        => 3, // По умолчанию 4
      ),
      array(
        'id'               => 'image',
        'name'             => 'Главная картинка блока',
        'type'             => 'image_advanced',
      
           // удалять картинку из медиатеки при удалении из метаполя?
        // 'force_delete'     => true,
      
        'max_file_uploads' => 1, // макс. кол-во картинок для загрузки
      
        // 'max_status'       => false, // показать сколько загружено
      
        // 'image_size'       => 'thumbnail', // размер отображаемый для редактирования
      ),
      array(
	      'type' => 'divider',
      ),

    

    

    
    )
  ); */

