<button class="Menu-btn">
  <?php _e('Menú', 'kenai'); ?>
</button>
<?php
if ( has_nav_menu( 'menu_main' ) ):
  wp_nav_menu(array(
    'theme_location' => 'menu_main',
    'container' => 'nav',
    'container_id' => 'Menu',
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
