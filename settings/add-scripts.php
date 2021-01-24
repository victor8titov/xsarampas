<?php

function twentyseventeen_scripts() {
	/**
	 * 	Jquery
	 */
	/* wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', get_template_directory_uri().'/assets/js3.2.0/jquery-1.8.3.min.js', 'titov');
	wp_enqueue_script( 'jquery' ); */

	/**
	 * 
	 * 	Lbibrary script 
	 */
	
	wp_enqueue_script( 'document.ready', get_theme_file_uri('/assets/js/document.ready.js'), array('jquery'));
	wp_enqueue_script( 'bootstrap', get_theme_file_uri('/assets/js3.2.0/bootstrap.min.js'), array('jquery'), '3.2.0' );
	wp_enqueue_script( 'ui.totop', get_theme_file_uri('/assets/js/jquery.ui.totop.js'), array('jquery') );
	wp_enqueue_script( 'flexslider', get_theme_file_uri('/assets/js/jquery.flexslider.js'), array('jquery') );
	wp_enqueue_script( 'jcarousel', get_theme_file_uri('/assets/js/jquery.jcarousel.min.js'), array('jquery') );
	wp_enqueue_script( 'fancybox', get_theme_file_uri('/assets/js/jquery.fancybox-1.3.4.js'), array('jquery') );
	wp_enqueue_script( 'maskedinput', get_theme_file_uri('/assets/js/jquery.maskedinput.min.js'), array('jquery') ); 


	/**
	 * 	
	 * 	My script 
	 * 
	 * Создаем метаполя для загрузки картинок.
	 * 	подключаем js файл w8lt8r_main.js для frontend
	 * 	часть работы проводим в этом файле 
	 * 
	 */
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	wp_enqueue_script( 'myuploadscript', get_stylesheet_directory_uri() . '/assets/js/w8lt8r_main.js', array('jquery'), null, false );
	 

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentyseventeen-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$twentyseventeen_l10n = array(
		'quote'          => twentyseventeen_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'twentyseventeen-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array(), '1.0', true );
		$twentyseventeen_l10n['expand']         = __( 'Expand child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['collapse']       = __( 'Collapse child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['icon']           = twentyseventeen_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
	}

	wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );
	
	
	wp_localize_script( 'twentyseventeen-skip-link-focus-fix', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );