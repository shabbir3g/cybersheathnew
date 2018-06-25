<?php
/**
 * cybersheathnew functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cybersheathnew
 */

if ( ! function_exists( 'cybersheathnew_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cybersheathnew_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cybersheathnew, use a find and replace
		 * to change 'cybersheathnew' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cybersheathnew', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-formats', ['video','audio','gallery','quote'] );
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background' );
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' =>  'Main Menu',
			'top-menu' 	=>  'Top Menu',
		) );
		
		function default_menu(){
			
			echo '<ul class="navbar-nav main-menu">';
			echo '<li><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}
		function top_menu(){
			
			echo '<ul class="navbar-nav">';
			echo '<li><a href="'.home_url().'">Home</a></li>';
			echo '</ul>';
			
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		 
				 /* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}
		
		
		 
	
	}
endif;
add_action( 'after_setup_theme', 'cybersheathnew_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cybersheathnew_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'cybersheathnew' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add footer widgets here.', 'cybersheathnew' ),
		'before_widget' => '<div class="col-md-6 footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cybersheathnew_widgets_init' );


/* customize login screen */
function mbthirty_custom_login_page() {
    echo '<style type="text/css">
        h1 a { background-image:url("'. get_stylesheet_directory_uri().'/images/logo.png") !important; height: 90px !important; width: 100px !important; margin: 0 auto !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/images/banner.png") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0,0,0,0.2); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
		.login h1 a {
			    background-size: 300px;
			    width: 300px !important;
			}
    </style>';
}
add_action('login_head', 'mbthirty_custom_login_page');
function mbthirty_login_logo_url_title() {
 	return 'Mostafiz Shabbir';
}
add_filter( 'login_headertitle', 'mbthirty_login_logo_url_title' );
function mbthirty_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'mbthirty_login_logo_url' );
		 
		 
/* customize login screen */
		 
/**
 * Enqueue scripts and styles.
 */
function ready_scripts() {



	wp_enqueue_style( 'cybersheathnew-fontawesome', get_template_directory_uri().'/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'cybersheathnew-owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'cybersheathnew-default.min', get_template_directory_uri().'/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'cybersheathnew-bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'cybersheathnew-bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'cybersheathnew-bootstrap-reboot', get_template_directory_uri().'/css/bootstrap-reboot.min.css' );
	wp_enqueue_style( 'cybersheathnew-main', get_template_directory_uri().'/css/main.css' );

	wp_enqueue_style( 'cybersheathnew-style', get_stylesheet_uri() );

	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'cybersheathnew-bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'cybersheathnew-bootstrap.bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'cybersheathnew-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'cybersheathnew-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'ready_scripts' );


/**
 * Redux include
 */
require get_template_directory() . '/inc/opt/ReduxCore/framework.php';
require get_template_directory() . '/inc/opt/sample/config.php';


/**
 * TGM plugin activation
 */
require get_template_directory() . '/inc/tgm/example.php';


/**
 * Custom Widget development
 */
require get_template_directory() . '/inc/widget/custom-widget.php';






