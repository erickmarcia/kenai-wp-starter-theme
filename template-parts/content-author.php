<aside class="AuthorInfo">
  <h3><?php _e('Información del Autor:', 'kenai'); ?></h3>
  <ul>
    <li>
      <?php _e('Usuario: ', 'kenai'); the_author(); ?>
    </li>
    <li>
      <?php _e('Nombre: ', 'kenai'); echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?>
    </li>
    <li>
      <?php _e('Correo: ', 'kenai'); echo get_the_author_meta('user_email'); ?>
    </li>
    <li>
      <?php _e('Url: ', 'kenai'); ?>
      <a href="<?php echo get_the_author_meta('user_url'); ?>" target="_blank">
        <?php echo get_the_author_meta('user_url'); ?>
      </a>
    </li>
    <li>
      <?php _e('Fecha de registro: ', 'kenai'); echo get_the_author_meta('user_registered'); ?>
    </li>
    <li>
      <?php _e('Rol del usuario: ', 'kenai'); echo get_the_author_meta('roles')[0]; ?>
    </li>
    <li>
      <?php _e('Descripción: ', 'kenai'); echo get_the_author_meta('description'); ?>
    </li>
    <li>
      <?php _e('Facebook: ', 'kenai'); echo get_the_author_meta('facebook'); ?>
    </li>
    <li>
      <?php _e('Twitter: ', 'kenai'); echo get_the_author_meta('twitter'); ?>
    </li>
    <li>
      <?php _e('Número de publicaciones: ', 'kenai'); echo get_the_author_posts(); ?>
    </li>
    <li>
      <?php _e('Avatar: ', 'kenai'); echo get_avatar( get_the_author_meta('ID'), 500 ); ?>
    </li>
  </ul>
</aside>
