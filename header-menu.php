<button class="Menu-btn"><?php _e('Menú Principal', 'kenai'); ?></button>
<?php
  if ( has_nav_menu( 'main_menu' ) ):
    wp_nav_menu(array(
      'theme_location' => 'main_menu',
      'container' => 'nav',
      'container_class' => 'Menu'
    ));
  else:
?>
  <nav class="Menu">
    <ul>
      <?php wp_list_pages('title_li'); ?>
    </ul>
  </nav>
<?php endif; ?>