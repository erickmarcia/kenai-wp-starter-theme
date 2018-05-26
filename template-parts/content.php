<div class="Content-container">
  <main class="Main">
    <?php
      if ( have_posts() ): while ( have_posts() ): the_post();
        get_template_part( 'template-parts/content-main' );
      endwhile; else:
        get_template_part( 'template-parts/content-none' );
      endif;
      wp_reset_postdata();
      wp_reset_query();
    ?>
  </main>
  <?php
    get_template_part( 'template-parts/pagination' );
    get_sidebar();
  ?>
</div>
