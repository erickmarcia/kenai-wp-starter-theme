<?php
if ( !function_exists('kenai_customize_register') ):
  function kenai_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
      $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.WP-Header-title',
        'render_callback' => 'kenai_customize_blogname'
      ) );
      $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.WP-Header-description',
        'render_callback' => 'kenai_customize_blogdescription',
      ) );
    }
  }
endif;

add_action( 'customize_register', 'kenai_customize_register' );


if ( !function_exists('kenai_customize_blogname') ):
  function kenai_customize_blogname () {
    bloginfo( 'name' );
  }
endif;

if ( !function_exists('kenai_customize_blogdescription') ):
  function kenai_customize_blogdescription () {
    bloginfo( 'description' );
  }
endif;
?>
