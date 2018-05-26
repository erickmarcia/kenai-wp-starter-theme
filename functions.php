<?php
/**
 * kEnAi WP Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage kenai
 * @since 1.0.0
 * @version 1.0.0
 */

global $google_fonts;
$google_fonts = 'https://fonts.googleapis.com/css?family=Raleway:400,700';

if ( !isset( $content_width ) ) {
  $content_width = 800;
}

if ( !function_exists( 'kenai_scripts' ) ):
  function kenai_scripts () {
    global $google_fonts;

    wp_register_style( 'google-fonts', $google_fonts, array(), '1.0.0', 'all' );
    wp_register_style( 'custom-properties', get_stylesheet_directory_uri() . '/css/custom_properties.css', array(), '1.0.0', 'all' );
    wp_register_style( 'toggle-nav-style', get_stylesheet_directory_uri() . '/css/toggle_nav.css', array(), '1.0.0', 'all' );
    wp_register_style( 'style', get_stylesheet_uri(), array('google-fonts', 'custom-properties'), '1.0.0', 'all' );

    wp_enqueue_style( 'google-fonts' );
    wp_enqueue_style( 'custom-properties' );
    wp_enqueue_style( 'toggle-nav-style' );
    wp_enqueue_style( 'style' );

    wp_register_script( 'toggle-nav-script', get_template_directory_uri() . '/js/toggle_nav.js', array('jquery'), '1.0.0', true );
    wp_register_script( 'script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'toggle-nav-script' );
    wp_enqueue_script( 'script' );
  }
endif;

add_action('wp_enqueue_scripts', 'kenai_scripts');

if ( !function_exists( 'kenai_menus' ) ):
  function kenai_menus () {
    register_nav_menus(array(
      'main_menu' => __('Menú Principal', 'kenai'),
      'social_menu' => __('Menú Redes Sociales', 'kenai')
    ));
  }
endif;

add_action( 'init', 'kenai_menus' );

if ( !function_exists( 'kenai_register_sidebars' ) ):
  function kenai_register_sidebars () {
    register_sidebar(array(
      'name' => __('Sidebar principal', 'kenai') ,
      'id' => 'main_sidebar',
      'description' => __('Este es el sidebar principal', 'kenai'),
      'before_widget' => '<article id="%1$s" class="Widget  %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));
  }
endif;

add_action('widgets_init', 'kenai_register_sidebars');

if ( !function_exists( 'kenai_setup' ) ):
  function kenai_setup () {
    load_theme_textdomain( 'kenai', get_template_directory() . '/languages' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));

    add_theme_support('post-formats',  array (
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ) );

    add_theme_support( 'title-tag' );

    add_theme_support( 'automatic-feed-links' );

    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_resource_hints', 2);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    //remove_action('wp_print_styles', 'print_emoji_styles');
    //remove_action('wp_head', 'print_emoji_detection_script', 7);
    //add_filter('show_admin_bar', '__return_false');
  }
endif;

add_action( 'after_setup_theme', 'kenai_setup' );

require_once get_template_directory() . '/inc/custom-excerpt.php';

require_once get_template_directory() . '/inc/custom-description.php';

require_once get_template_directory() . '/inc/custom-header.php';

require_once get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/inc/custom-login.php';

require_once get_template_directory() . '/inc/custom-admin.php';
?>
