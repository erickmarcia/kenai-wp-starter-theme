<?php
if ( !function_exists( 'kenai_add_editor_styles' ) ):
  function kenai_add_editor_styles () {
    global $google_fonts;
    add_editor_style( $google_fonts );
    add_editor_style( 'css/custom_properties.css' );
    add_editor_style( 'css/custom_editor_style.css' );
  }
endif;

add_action( 'admin_init', 'kenai_add_editor_styles' );

if ( !function_exists( 'kenai_user_contactmethods' ) ):
  function kenai_user_contactmethods ($data_user) {
    $data_user['facebook']=__('Facebook', 'kenai');
    $data_user['twitter']=__('Twitter', 'kenai');

    return $data_user;
  }
endif;

add_filter( 'user_contactmethods', 'kenai_user_contactmethods' );
?>
