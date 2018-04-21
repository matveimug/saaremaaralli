<?php
/**
 * saaremaaralli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package saaremaaralli
 */

if ( ! function_exists( 'saaremaaralli_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function saaremaaralli_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on saaremaaralli, use a find and replace
		 * to change 'saaremaaralli' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'saaremaaralli', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'saaremaaralli' ),
		) );

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
            'menus'
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'saaremaaralli_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'saaremaaralli_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function saaremaaralli_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'saaremaaralli_content_width', 640 );
}
add_action( 'after_setup_theme', 'saaremaaralli_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function saaremaaralli_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'saaremaaralli' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'saaremaaralli' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'saaremaaralli_widgets_init' );

add_filter('user_can_richedit', 'disable_wyswyg_for_custom_post_type');
function disable_wyswyg_for_custom_post_type( $default ){
    if( get_post_type() === 'featured') return false;
    return $default;
}
/**
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
/**
 * Enqueue scripts and styles.
 */
function saaremaaralli_scripts() {
	wp_enqueue_style( 'saaremaaralli-style', get_stylesheet_uri() );

    wp_enqueue_script( 'saaremaaralli-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'saaremaaralli-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'saaremaaralli-dotdotdot', get_template_directory_uri() . '/js/jquery.dotdotdot.js', array(), '20180604', true );

    wp_enqueue_script( 'saaremaaralli-countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array(), '20181904', true );



	wp_enqueue_script( 'saaremaaralli-theme-stuff', get_template_directory_uri() . '/js/theme-stuff.js', array(), '20180604', true );
    $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
//after wp_enqueue_script
    wp_localize_script( 'saaremaaralli-theme-stuff', 'object_name', $translation_array );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'saaremaaralli_scripts' );

add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();

    $count = $woocommerce->cart->cart_contents_count;
    if( $count > 0) { ?>
        <span class="cart-count"><?php echo $count ?></span>
        <?php } else { ?>
        <span class="cart-count" style="visibility:hidden"></span>
    <?php } ?>
    <?php

    $fragments['span.cart-count'] = ob_get_clean();

    return $fragments;

}

//add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
//function add_search_box_to_menu( $items, $args ) {
//
//    if( $args->theme_location == 'menu-1' ) {
//        $cartcount = WC()->cart->get_cart_contents_count();
//        $ajax = sprintf(_n('%d', '%d', $cartcount), $cartcount);
//        $items .=
//            "
//            <li class='menu-item cart'>
//                <a class='cart-label' href='" . wc_get_cart_url() . "'>
//                    <i class='fa fa-shopping-cart'></i>
//                    <span class='cart-count'>" . $ajax . "</span>
//                </a>
//            </li>"
//            .
//            "<li class='menu-item menu-search'>
//                <form action='/index.php/' id='searchform' method='get'>
//                    <input type='search' name='s' id='s' placeholder=''>
//                    <button type='submit' class='menu-search-icon'><i class='fa fa-search'></i></button></i>
//                </form>
//            </li>"
//            .
//            "<li class='menu-item menu-lang'>
//                <select class='menu-lang-select'>
//                    <option value='est' selected>eesti</option>
//                    <option value='eng'>english</option>
//                    <option value='rus'>русский</option>
//                </select>
//            </li>"
//
//        ;
//    }
//
//    return $items;
//}

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );

function random_img() {
    $query = new WP_Query( array( 'post_status' => 'any', 'category_name' => 'taustapilt', 'post_type' => 'attachment' ) );
    $key = array_rand($query->posts, 1);
    $rando = wp_get_attachment_url($query->posts[$key]->ID, 'full');
    return $rando;
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
