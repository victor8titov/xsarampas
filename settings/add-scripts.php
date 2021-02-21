<?php

function xsa_scripts()
{
	debug_ms(check_template_in_admin('project.php'), true);
	add_scripts_common();

	if (get_post_type() === 'page' && is_front_page()) {
		// главная страница
		add_scripts_for_main_page();
	} else if (is_page_template('projects.php') ) {
		add_scripts_for_projects_page();
	} else {
		add_scripts_for_other_pages();
	}
}
add_action('wp_enqueue_scripts', 'xsa_scripts');

function xsa_scripts_for_admin(){
	if (check_template_in_admin('project.php')) {
		add_scripts_for_projects_page();
	}
}
add_action( 'admin_enqueue_scripts', 'xsa_scripts_for_admin' );

function add_scripts_common()
{
	wp_enqueue_script('common-scripts', get_theme_file_uri('/assets/js/common-scripts.js'), array('jquery'), null, false);
}

function add_scripts_for_main_page()
{
	wp_enqueue_script('slick-slider', get_theme_file_uri('/assets/js/libs/slick/slick.min.js'), array('jquery'));
}

function add_scripts_for_projects_page()
{
	if (!did_action('wp_enqueue_media')) {
		wp_enqueue_media();
	}
	wp_enqueue_script('project-page', get_theme_file_uri('/assets/js/project-page.js'), array('jquery'), null, false);
}

function add_scripts_for_other_pages() {}

function other()
{
	/**
	 * 
	 * 	Lbibrary script 
	 */

	wp_enqueue_script('document.ready', get_theme_file_uri('/assets/js/document.ready.js'), array('jquery'));
	wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js3.2.0/bootstrap.min.js'), array('jquery'), '3.2.0');
	wp_enqueue_script('ui.totop', get_theme_file_uri('/assets/js/jquery.ui.totop.js'), array('jquery'));
	wp_enqueue_script('maskedinput', get_theme_file_uri('/assets/js/jquery.maskedinput.min.js'), array('jquery'));

	wp_enqueue_script('jcarousel', get_theme_file_uri('/assets/js/jquery.jcarousel.min.js'), array('jquery'));
	wp_enqueue_script('fancybox', get_theme_file_uri('/assets/js/jquery.fancybox-1.3.4.js'), array('jquery'));
	wp_enqueue_script('flexslider', get_theme_file_uri('/assets/js/jquery.flexslider.js'), array('jquery'));

		// Load the html5 shiv.
	wp_enqueue_script('html5', get_theme_file_uri('/assets/js/html5.js'), array(), '3.7.3');
	wp_script_add_data('html5', 'conditional', 'lt IE 9');

	wp_enqueue_script('twentyseventeen-skip-link-focus-fix', get_theme_file_uri('/assets/js/skip-link-focus-fix.js'), array(), '1.0', true);

	$twentyseventeen_l10n = array(
		'quote'          => twentyseventeen_get_svg(array('icon' => 'quote-right')),
	);

	if (has_nav_menu('top')) {
		wp_enqueue_script('twentyseventeen-navigation', get_theme_file_uri('/assets/js/navigation.js'), array(), '1.0', true);
		$twentyseventeen_l10n['expand']         = __('Expand child menu', 'twentyseventeen');
		$twentyseventeen_l10n['collapse']       = __('Collapse child menu', 'twentyseventeen');
		$twentyseventeen_l10n['icon']           = twentyseventeen_get_svg(array('icon' => 'angle-down', 'fallback' => true));
	}

	wp_enqueue_script('twentyseventeen-global', get_theme_file_uri('/assets/js/global.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('jquery-scrollto', get_theme_file_uri('/assets/js/jquery.scrollTo.js'), array('jquery'), '2.1.2', true);


	wp_localize_script('twentyseventeen-skip-link-focus-fix', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

function check_template_in_admin($template)
{
	//  ищем номер поста в GET and POST переменных
	// Get the current ID
	if (isset($_GET['post'])) $id = $_GET['post'];
	elseif (isset($_POST['post_ID'])) $id = $_POST['post_ID'];

	// Get current template
	//  Пользуемся скрытыми метополями вордпресс
	//  для каждой страницы шаблона есть метаполе с именем шаблона
	//  скрыетое метополе _wp_page_template
	$current_template = get_post_meta($id, '_wp_page_template', true);

	//  проверяем если шаблон не совпадает
	return  $current_template !== $template;
}

