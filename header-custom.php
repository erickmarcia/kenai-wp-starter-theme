<header class="WP-Header">
  <?php
    if ( has_custom_header()  ):
      the_custom_header_markup();
    endif;

    if ( is_front_page() || is_home() ):
    $title_tag = 'h1';
    else:
      $title_tag = 'p';
    endif;
  ?>

  <div class="WP-Header-branding">
    <?php echo '<' . $title_tag . ' class="WP-Header-title">'; ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    <?php echo '</' . $title_tag . '>'; ?>
    <p  class="WP-Header-description">
      <?php bloginfo( 'description' ); ?>
    </p>
  </div>
</header>
