<?php
if ( !function_exists('kenai_excerpt_more') ):
  function kenai_excerpt_more () {
    return '<a href="' . get_permalink() . '">'. __(' leer más...', 'kenai') .'</a>';
  }
endif;

add_filter( 'excerpt_more', 'kenai_excerpt_more' );

if ( !function_exists('kenai_excerpt_length') ):
  function kenai_excerpt_length () {
    return 40;
  }
endif;

add_filter( 'excerpt_length', 'kenai_excerpt_length' );
?>
