<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php kenai_custom_meta_description(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php
      if ( is_home() || is_front_page() ):
        get_header('custom');
      endif;
    ?>
    <header class="Header">
      <section class="Header-container">
        <?php
          get_header('logo');
          get_header('menu');
        ?>
      </section>
    </header>
    <section class="Content">
