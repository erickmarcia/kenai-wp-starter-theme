<?php
if ( !function_exists( 'kenai_custom_header' ) ):
  function kenai_custom_header () {
    add_theme_support( 'custom-logo', array (
      'height' => 100,
      'width' => 100,
      'flex-height' => true,
      'flex-width' => true
    ) );

    add_theme_support( 'custom-background', array (
      'default-color' => 'FFF',
      'default-image' => get_template_directory_uri() . '/img/background-image.png',
      'default-repeat' => 'repeat',
      'default-position-x' => '',
      'default-position-y' => '',
      'default-size' => '',
      'default-attachment' => 'fixed'
    ) );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'custom-header', apply_filters( 'kenai_custom_header_args', array (
      'default-image' => get_template_directory_uri() . '/img/header-image.jpg',
      'default-text-color' => 'FE4918',
      'width' => 1200,
      'height' => 720,
      'flex-width' => true,
      'flex-height' => true,
      'video' => true,
      'wp-head-callback' => 'kenai_wp_header_style'
    )) );
  }
endif;

add_action( 'after_setup_theme', 'kenai_custom_header' );

if ( !function_exists( 'kenai_wp_header_style' ) ) :
  function kenai_wp_header_style () {
    $header_text_color = get_header_textcolor();
?>
  <style>
    .WP-Header-branding * { color: #<?php echo esc_attr( $header_text_color ); ?>; }
  </style>
<?php
  }
endif;
?>
