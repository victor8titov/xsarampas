<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
define('URI_THEME', get_stylesheet_directory_uri());
define('URI_IMAGES', get_stylesheet_directory_uri().'/assets/images');



function artabr_opengraph_fix_yandex($lang) {
	$lang_prefix = 'prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#  profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#"';
	$lang_fix = preg_replace('!prefix="(.*?)"!si', $lang_prefix, $lang);
	return $lang_fix;
	}
add_filter( 'language_attributes', 'artabr_opengraph_fix_yandex',20,1);

if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function additional_mime_types( $mimes ) {
	$mimes['webp'] = 'image/webp';
	return $mimes;
}

add_filter( 'upload_mimes', 'additional_mime_types' );

function twentyseventeen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyseventeen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'spec_thumb', 360, 240, true  );
	add_image_size( 'news_thumb', 300, 228, true  );

	add_image_size( 'snews_thumb', 71, 55, true  );
	add_image_size( 'sslide_thumb', 220, 160, true  );

	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );
	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );


	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', twentyseventeen_fonts_url() ) );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets' => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'sidebar-3' => array(
				'text_about',
				'search',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-sandwich}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'twentyseventeen' ),
				'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'twentyseventeen' ),
				'file' => 'assets/images/sandwich.jpg',
			),
			'image-coffee' => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'twentyseventeen' ),
				'file' => 'assets/images/coffee.jpg',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'top' => array(
				'name' => __( 'Top Menu', 'twentyseventeen' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name' => __( 'Social Links Menu', 'twentyseventeen' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters Twenty Seventeen array of starter content.
	 *
	 * @since Twenty Seventeen 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'twentyseventeen_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twentyseventeen_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( twentyseventeen_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter Twenty Seventeen content width of the theme.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param $content_width integer
	 */
	$GLOBALS['content_width'] = apply_filters( 'twentyseventeen_content_width', $content_width );
}
add_action( 'template_redirect', 'twentyseventeen_content_width', 0 );

/**
 * Register custom fonts.
 */
function twentyseventeen_fonts_url() {
	$fonts_url = '';

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'twentyseventeen' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function twentyseventeen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyseventeen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'twentyseventeen_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentyseventeen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'twentyseventeen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'twentyseventeen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentyseventeen_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyseventeen_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function twentyseventeen_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'twentyseventeen_pingback_header' );

/**
 * Display custom color CSS.
 */
function twentyseventeen_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
?>
	<style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
		<?php echo twentyseventeen_custom_colors_css(); ?>
	</style>
<?php }
add_action( 'wp_head', 'twentyseventeen_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );

	// Load the dark colorscheme.
	if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'twentyseventeen-style' ), '1.0' );
	}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'twentyseventeen-style' ), '1.0' );
		wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
	wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

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

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentyseventeen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr', 10, 2 );
// Отменяем sizes - это поздний фильтр, но раннего как для srcset пока нет...
add_filter('wp_calculate_image_sizes', '__return_false',  99 );
/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function twentyseventeen_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'twentyseventeen_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentyseventeen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function twentyseventeen_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'twentyseventeen_front_page_template' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );


add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<div><a href="'. get_permalink($post) . '">Читать дальше...</a></div>';
}


/*
*	----------------------		w8lt8r	Правки внесенные 20.02.19	-------------------------------
*/


//	подключаем js файл w8lt8r_main.js
//	необходим для загрузки изображений в мета поле
function true_include_myuploadscript() {	
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
 	wp_enqueue_script( 'myuploadscript', get_stylesheet_directory_uri() . '/assets/js/w8lt8r_main.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'true_include_myuploadscript' );
 

// подключаем функцию активации мета блока 
add_action('admin_head', 'my_picture_fields', 1);

function my_picture_fields() {
	global $post;
	
	//	проверка является ли редактируемая страница под шаблоном catalog.php
	// Get the current ID
	if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
	elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
	if( !( isset( $post_id ) || is_page() ) ) return false;
	
	// Get current template
	$current_template = get_post_meta( $post_id, '_wp_page_template', true );
		
	if( $current_template  !== "catalog.php" ) return;
	//	добовляем метополе
	add_meta_box( 'fields_picture', 'Вставка иконок для разделов каталога', 'picture_fields_box_func', 'page', 'normal', 'high'  );
}

// код блока
//	добовляем данные в метополе
function picture_fields_box_func( $post ){	
	?>	
	<ul>
		<li>
			<span style="padding: 5px 30px; display: inline-block; width: 157px"><strong >Категория Скейтпарки</strong></span>
			<?php true_image_uploader_field( 'parks[skate_park]', get_post_meta($post->ID, 'skate_park',true) ); ?>
			<hr>
		</li>
		<li>
			<span  style="padding: 5px 30px; display: inline-block; width: 157px"><strong >Категория Минирампы</strong></span>
			<?php true_image_uploader_field( 'parks[miniramps_park]', get_post_meta($post->ID, 'miniramps_park',true) ); ?>
			<hr>
		</li>
		<li>
			<span  style="padding: 5px 30px; display: inline-block; width: 157px"><strong >Категория Боулы и пулы</strong></span>
			<?php true_image_uploader_field( 'parks[pool_park]', get_post_meta($post->ID, 'pool_park',true) ); ?>
			<hr>
		</li>
		<li>
			<span  style="padding: 5px 30px; display: inline-block; width: 157px"><strong >Категория Крытые</strong></span>
			<?php true_image_uploader_field( 'parks[cover_park]', get_post_meta($post->ID, 'cover_park',true) ); ?>
			<hr>
		</li>
		<li>
			<span  style="padding: 5px 30px; display: inline-block; width: 157px"><strong >Категория Бетонные</strong></span>
			<?php true_image_uploader_field( 'parks[concrete_park]', get_post_meta($post->ID, 'concrete_park',true) ); ?>
			<hr>
		</li>
		<li>
			<span  style="padding: 5px 30px; display: inline-block; width: 157px"><strong >Категория Памп треки</strong></span>
			<?php true_image_uploader_field( 'parks[pump_park]', get_post_meta($post->ID, 'pump_park',true) ); ?>
			<hr>
		</li>
	</ul>
	
	<?php
	
}

// загрузка изображения
//	вспомогательная функция для заполнения метаполя
function true_image_uploader_field( $name, $value = '') {
	$default = get_stylesheet_directory_uri() . '/assets/images/image-upload-field.png';
	if( $value ) {
		$image_attributes = wp_get_attachment_image_src( $value, 'news_thumb' );
		//print_r($image_attributes);
		$src = $image_attributes[0];
	} else {
		$src = $default;
	}
	?>
		<span>
			<input type="hidden" name="<? echo $name ?>" id="<? echo $name ?>" value="<? echo $value ?>" />
			<button  class="upload_image_button button">Загрузить</button>
			<button  class="remove_image_button button">&times;</button>			
		</span>
		<div class="img_box">
			<img id = "img_park" data-src="<? echo $default ?>" src="<?php echo $src ?>" width = "200px" style="padding: 10px 202px" />
		</div>
		
	
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update( $post_id ){
	
	// базовая проверка
	if (
		   empty( $_POST['parks'] )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;
	
	
	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['parks'] = array_map( 'sanitize_text_field', $_POST['parks'] );
	foreach( $_POST['parks'] as $key => $value ){
		if( empty($value) ){
			delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
			continue;
		}
		update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически		
	}	
	return $post_id;
}

//	функция вызова на странице шаблона для 
//	возвращает url в ответ на запрос ID метаполя
function vt_get_meta($name , $size = 'full' ) {
	global $post;
	$id = get_post_meta($post->ID, $name, true);
	$url = wp_get_attachment_image_src($id, $size);
	return $url[0];	
}



/*
*	------------------------	Блок оптимизация страници Проекты -------------------------------------------
*	правка w8lt8r 28.02.19 
*/

//		создадим кастомный пост тайп "Проекты"
add_action('init', 'my_register_post_type');
function my_register_post_type() {
	$names = 'проекты';
	$name = 'проект';
	register_post_type('projectsPosts', array(
		//'label'  => 'Проекты',
		'labels' => array(
			'name'               => 'Проекты', // основное название для типа записи
			'singular_name'      => 'Проект', // название для одной записи этого типа
			'add_new'            => 'Добавить ' . $name, // для добавления новой записи
			'add_new_item'       => 'Добавление ' . $name.'a', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование ' . $name.'а', // для редактирования типа записи
			'new_item'           => 'Новый ' . $name, // текст новой записи
			'view_item'          => 'Смотреть ' . $names, // для просмотра записи этого типа.
			'search_items'       => 'Искать ' . $name, // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			//'menu_name'          =>  $name, // название меню
		),
		'description'         => 'Проекты выполненные xsaramps',
		'public'              => true,
		//'publicly_queryable'  => true, // зависит от public
		//'exclude_from_search' => null, // зависит от public
		//'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		//'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		//'show_in_nav_menus'   => null, // зависит от public
		//'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		//'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 19,
		//'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		//'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail','custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		//'taxonomies'          => array(),
		//'has_archive'         => true,
		//'rewrite'             => true,
		//'query_var'           => true,
	) );

};

// Создаем метаполя для загрузки картинок.

//	подключаем js файл w8lt8r_main.js для frontend
//	часть работы проводим в этом файле 
function my_scripts() {	
	
 	wp_enqueue_script( 'myuploadscript', get_stylesheet_directory_uri() . '/assets/js/w8lt8r_main.js', array('jquery'), null, false );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
 
// подключаем функцию активации мета блока 
add_action('admin_head', 'my_picture_for_slider', 1);

function my_picture_for_slider() {
	
	add_meta_box( 'picture_for_slider', 'Изображения для Галереи', 'add_box_for_slider', 'projectsposts', 'normal', 'high'  );
}

// код блока
//	добовляем данные в метополе
function add_box_for_slider( $post ){
	$stackPic = get_post_meta($post->ID, 'stackPic',true); 
	if ( !$stackPic ) $stackPic = array();
	$name = 'stackPic[]';	
	$default = get_stylesheet_directory_uri() . '/assets/images/image-upload-field.png';
	
	//	если массив пустой 
	// создадим искуственно пустую запись 
	// для прохождения одного цилка foreach
	// и появлении одной пустой записи
	if ( count($stackPic) === 0 ) {
		$stackPic[] = '';		
	};	
	?>
	<div class="box_meta_data_gallery">
		<?php 
			foreach($stackPic as $value) {
				if( $value ) {
					$image_attributes = wp_get_attachment_image_src( $value, 'news_thumb' );					
					$src = $image_attributes[0];
				} else {
					$src = $default;
				}
				?>
				<div class="item_gallery" 
							data-url= "<?php echo get_stylesheet_directory_uri() . '/assets/images/image-upload-field.png'; ?>" 
							style=" width: 150px; padding: 5px; display:inline-block;">			
				<img id = "item_img" data-src="<? echo $default ?>" src="<?php echo $src ?>" width = "150px"  />
				<div style = " width: 150px; text-align: center;" >
					<input id="item_input" type="hidden" name="<? echo $name ?>" value="<? echo $value ?>" />
					<button  class="item_button_upload button">Загрузить</button>
					<button  class="item_button_remove button">&times;</button>
				</div>
				</div>						
				<?php
			};
		?>
		<hr>	
		<button class="item_button_new_item button" style=" margin: 20px;">Add more picture</button>
	</div>
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'save_gallery', 0);

/* Сохраняем данные, при сохранении поста */
function save_gallery( $post_id ){
	// базовая проверка
	if (
		   empty( $_POST['stackPic'] )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;	
	
	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['stackPic'] = array_map( 'sanitize_text_field', $_POST['stackPic'] );
	
	update_post_meta( $post_id, 'stackPic', $_POST['stackPic'] ); // add_post_meta() работает автоматически			
	
	return $post_id;
}

/*
*	ajax для галереи
*	функция ajax_request_stackPic обрабатывает запрос 
*	отправляет массив url адресов картинок добавленых в мето поля поста	
*/
function ajax_request_stackPic(){	
	$content = get_post_meta($_POST['id'] , 'stackPic',true);	
	if (!$content || !$content[0]) {
		$url[] = site_url() . '/wp-content/themes/xsarampas/assets/images/no_image_available.png';		
	}
	else {
		foreach( $content as $value) {
			$img = wp_get_attachment_image_src($value, 'large');
			$url[] = $img[0];
		} 
	}	
	echo json_encode( $url );	
	die();
}
add_action('wp_ajax_stackPic', 'ajax_request_stackPic');
add_action('wp_ajax_nopriv_stackPic', 'ajax_request_stackPic');


/*
*	Ajax подгрузки постов на страницу projects.php 
*	подгрузка по 9 запесей
*/
function true_load_posts(){
	//	запрос в базу данных идентичный как на страниецк projects.php
	$query = new WP_Query( array(
		'post_type' 	 => 'projectsPosts',
		'posts_per_page' => 9,
		'paged'		 	 => $_POST['page'] + 1,
		'post_status'	 => 'publish',
	)); 
	//	формируем ответ
	if( $query->have_posts() ){
		while( $query->have_posts() ){
			$query->the_post();
		?>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="box_item" data-ID = "<?php echo get_the_ID(); ?>">
					<div class="item_thumbnail ">
						<div class="img">
							<?php the_post_thumbnail('medium'); ?>
						</div>									
						<h6 class="font_6" style="font-size:16px; line-height:1.3em; height: 40px; padding-left: 3px;"><span style="font-size:16px;">
							<?php the_title(); ?>
						</span></h6>
					</div>
					<div class="item_content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php
		}
		wp_reset_postdata(); // сбрасываем переменную $post
	} 
	die();
	}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

/*
*	------------------------	Конец блока  оптимизация страници Проекты -------------------------------------------
*/

/*
*
* ---------------------------	БЛОК ОПТИМИЗАЦИИ ДЛЯ ГЛАВНОЙ СТРАНИЦИ --------------------------
*	ШАБЛОН: index.php
*	задача добовлять фотографии в слайдер главной страници через админку
*/


// подключаем функцию активации мета блока 
add_action('admin_head', 'my_picture_for_slider_index', 1);
function my_picture_for_slider_index() {
	
	
	//	проверка является ли редактируемая страница под шаблоном home-page.php
	// Get the current ID
	if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
	elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
	if( !( isset( $post_id ) || is_page() ) ) return false;
	
	// Get current template
	$current_template = get_post_meta( $post_id, '_wp_page_template', true );
	//print_r($current_template);	
	if( $current_template  !== "home-page.php" ) return;
	
	add_meta_box( 'picture_for_slider', 'ОПЦИИ ГЛАВНОЙ СТРАНИЦЫ', 'add_box_for_slider_for_home_page', 'page', 'normal', 'high'  );
	
}

// код блока
//	добовляем данные в метополе
function add_box_for_slider_for_home_page( $post ){
	$stackPic = get_post_meta($post->ID, 'stackPic',true); 
	$stackCaption = get_post_meta($post->ID, 'stackCaption', true);
	$videoIframe = get_post_meta($post->ID, 'videoIframe', true);
	if ( !$stackPic ) $stackPic = array();
	if (	!$stackCaption	) $stackCaption = array();
	if ( !$videoIframe ) $videoIframe = '';
	$name = 'stackPic[]';	
	$nameCap = 'stackCaption[]';
	$name_videoIframe = 'videoIframe';
	$default = get_stylesheet_directory_uri() . '/assets/images/image-upload-field.png';
	
	//	если массив пустой 
	// создадим искуственно пустую запись 
	// для прохождения одного цилка foreach
	// и появлении одной пустой записи
	if ( count($stackPic) === 0 ) {
		$stackPic[] = '';		
	};	
	?>
	<div class="box_meta_data_gallery">
		<h3>Вставка iframe кода видео c видеохостинга YouTube</h3>
		<div class="item_videoIframe">
			<label for="videoIframe">Добавьте код скопированный с видео хостинга YouTube:</label>
			<textarea id="videoIframe" style="width: 100%" name="<?php echo $name_videoIframe; ?>" row="10"  placeholder="<iframe src=  allowfullscreen></iframe>"><?php echo $videoIframe; ?></textarea>
		</div>
		<hr>
		<h3>Изображения для слайдера</h3><hr>
		<?php 
			for($i = 0; $i < count($stackPic) ; $i++) {
				if( $stackPic[$i] ) {
					$image_attributes = wp_get_attachment_image_src( $stackPic[$i], 'news_thumb' );					
					$src = $image_attributes[0];
					$value = $stackPic[$i];
				} else {
					$src = $default;
				}

				if ( $stackCaption[$i] ) {
					$caption = $stackCaption[$i];
				} else {
					$caption = '';
				}

				?>
				<div class="item_gallery" 
							data-url= "<?php echo get_stylesheet_directory_uri() . '/assets/images/image-upload-field.png'; ?>" 
							style=" width: 500px; padding: 5px; display:inline-block;">			
					<img id = "item_img" data-src="<? echo $default ?>" src="<?php echo $src ?>" width = "150px"  />
					<div style = " width: 500px; text-align: left;" >
						<input id="item_input" type="hidden" name="<? echo $name ?>" value="<? echo $value ?>" />
						<button  class="item_button_upload button">Загрузить</button>
						<button  class="item_button_remove button">&times;</button><br>
						<label style = "margin: 10px 0; display: block;">Описание для картинки:
							<input id ="item_input_caption" 
							   type = "text"  
							   style = "width: 100%" 
							   name = "<? echo $nameCap ?>" 
							   value="<?echo $caption ?>" 
							   placeholder = "Это описание появится вместе с картинкой на слайде"/>
						</label>	   
					</div>
					<hr>
				</div>						
				<?php
			};
		?>
		<hr>	
		<button class="item_button_new_item button" style=" margin: 20px;">Add more picture</button>
		
		
	</div>
	<?php
}

// включаем обновление полей при сохранении
add_action('save_post', 'save_gallery_home_page', 0);

/* Сохраняем данные, при сохранении поста */
function save_gallery_home_page( $post_id ){
	// базовая проверка
	if (
		   empty( $_POST['stackPic'] )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;	
	
	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['stackPic'] = array_map( 'sanitize_text_field', $_POST['stackPic'] );
	$_POST['stackCaption'] = array_map( 'sanitize_text_field', $_POST['stackCaption'] );
	

	update_post_meta( $post_id, 'stackPic', $_POST['stackPic'] ); // add_post_meta() работает автоматически			
	update_post_meta( $post_id, 'stackCaption', $_POST['stackCaption'] ); // add_post_meta() работает автоматически	
	update_post_meta( $post_id, 'videoIframe', $_POST['videoIframe'] ); // add_post_meta() работает автоматически			
	
	return $post_id;
}


/*
*	-----------------------		Конец блока редактирования w8lt8r 	------------------------------
*/

/*
*	---------------------	Правки внесенные 04.09.19	-------------------------------
*/
//Last edit
//Убираем shortlink из head
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );

//Убираем shortlink из заголовков сервера
remove_action( 'template_redirect', 'wp_shortlink_header', 11 );

// canonical для пагинации
function return_canon () {
    $canon_page = get_pagenum_link(0);
    return $canon_page;
}

function canon_paged() {
    if (is_paged()) {
        add_filter( 'wpseo_canonical', 'return_canon' );
    }
}
add_filter('wpseo_head','canon_paged');