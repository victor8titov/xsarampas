<?php 
function xsaramps_styles() {
	
	if ( get_post_type() === 'page' && is_front_page()) {
		// главная страница
		add_styles_for_main_page();
	}	else {
		add_styles_for_other_pages();
	}

	if (is_page_template('projects.php')) {
		add_styles_for_projects_page();
	}

	add_styles_common_for_libraries();
	add_styles_for_admin();
}

add_action( 'wp_enqueue_scripts', 'xsaramps_styles' );

function add_styles_for_main_page() {
	wp_enqueue_style( 'xsaramps-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main-page', get_theme_file_uri('assets/styles/main-page.css'), null);
}

function add_styles_for_projects_page() {
	wp_enqueue_style('fancybox', get_theme_file_uri('/assets/styles/scss/libs/jquery.fancybox.min.css'), array('xsaramps-style'), '3.2.0');	
}

function add_styles_for_other_pages() {
	wp_enqueue_style( 'xsaramps-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_theme_file_uri('assets/styles/main.css'), null);
	//wp_enqueue_style( 'main', get_theme_file_uri('assets/styles/main.min.css'), null);
	
	wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );
}

function add_styles_common_for_libraries() {
	wp_enqueue_style('bootstrarp', get_theme_file_uri('/assets/css3.2.0/bootstrap.min.css'), array('xsaramps-style'), '3.2.0');
	wp_enqueue_style('ui.totop', get_theme_file_uri('/assets/css/ui.totop.css'), array('xsaramps-style'), '3.2.0');
	
	//wp_enqueue_style('corusel', get_theme_file_uri('/assets/css/corusel.css'), array('xsaramps-style'), '3.2.0');
	//wp_enqueue_style('jquery.fancybox-1.3.4', get_theme_file_uri('/assets/css/jquery.fancybox-1.3.4.css'), array('xsaramps-style'), '3.2.0');	
}

function add_styles_for_admin() {
		// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'xsaramps-ie9-1', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'xsaramps-style' ), '1.0' );
		wp_style_add_data( 'xsaramps-ie9-1', 'conditional', 'IE 9' );
	}
}

function add_styles_for_IE() {
	//	Internte Explorer support styles
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'xsaramps-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'xsaramps-style' ), '1.0' );
	wp_style_add_data( 'xsaramps-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'xsaramps-ie7', get_theme_file_uri( '/assets/css/ie7.css' ), array( 'xsaramps-style' ), '1.0' );
	wp_style_add_data( 'xsaramps-ie7', 'conditional', 'IE 7' );

	wp_enqueue_style( 'xsaramps-ie9-2', get_theme_file_uri( '/assets/css/colorboxIE.css' ), array( 'xsaramps-style' ), '1.0' );
	wp_style_add_data( 'xsaramps-ie9-2', 'conditional', 'lt IE 9' );

	wp_enqueue_style( 'xsaramps-ie9-3', get_theme_file_uri( '/assets/css/ie.css' ), array( 'xsaramps-style' ), '1.0' );
	wp_style_add_data( 'xsaramps-ie9-3', 'conditional', 'lt IE 9' );
}
