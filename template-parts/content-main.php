<article class="PostCard">
  <?php the_post_thumbnail(); ?>
  <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <?php the_excerpt(); ?>
  <p><?php _e('Categorías: ', 'kenai'); the_category(', '); ?></p>
  <p><?php the_tags(); ?></p>
  <p><?php _e('Fecha: ', 'kenai'); the_time( get_option('date_format') ); ?></p>
  <p><?php _e('Autor: ', 'kenai'); the_author_posts_link(); ?></p>
  <p><?php _e('Formato de Entrada: ', 'kenai'); echo ( get_post_format( $post ) ) ? get_post_format( $post ) : 'standard'; ?></p>
</article>
