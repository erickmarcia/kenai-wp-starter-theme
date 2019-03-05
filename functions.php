<?php
/**
 * Kenai Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage kenai
 * @since 1.0.0
 * @version 1.0.0
 */

function kenai_scripts () {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1', 'all' );
  wp_enqueue_style( 'fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css', array(), '3.3.5', 'all' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('google-fonts', 'font-awesome', 'fancybox-css'), '1.0.0', 'all' );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js', array('jquery'), '3.3.5', true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array('jquery', 'fancybox-js'), '1.0.0', true );

  if ( is_page() OR is_single() ):
    wp_enqueue_script( 'add-this-js', '//s7.addthis.com/js/300/addthis_widget.js#pubid=[pon-tu-id-de-addthis.com]', array(), '1.0.0', true );
  endif;
}

add_action('wp_enqueue_scripts', 'kenai_scripts');

function kenai_menus () {
  register_nav_menus(array(
    'menu_main' => __('Menú Principal', 'kenai'),
    'menu_social' => __('Menú Redes Sociales', 'kenai')
  ));
}

add_action( 'init', 'kenai_menus' );

function kenai_register_sidebars () {
  register_sidebar(array(
    'name' => __('Sidebar Principal', 'kenai'),
    'id' => 'sidebar_main',
    'description' => __('Este es el sidebar principal y aparecerá al lado del contenido principal.', 'kenai'),
    'before_widget' => '<article id="%1$s" class="Widget  %2$s">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => __('Sidebar del Pié de Página', 'kenai') ,
    'id' => 'sidebar_footer',
    'description' => __('Este es el sidebar del pié de página del sitio.', 'kenai'),
    'before_widget' => '<article id="%1$s" class="Widget  %2$s">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init', 'kenai_register_sidebars');

function kenai_setup () {
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
}

add_action('after_setup_theme', 'kenai_setup');

require_once get_template_directory() . '/inc/custom-header.php';

require_once get_template_directory() . '/inc/custom-excerpt.php';

require_once get_template_directory() . '/inc/custom-description.php';
