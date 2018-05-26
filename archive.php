<?php get_header(); ?>
<div class="Content-container">
  <main class="Main">
    <?php
      if ( is_category() ):
        $term_title = __('Resultados para la categoría:', 'kenai');
      endif;

      if ( is_tag() ):
        $term_title = __('Resultados para la etiqueta:', 'kenai');
      endif;
    ?>
    <div class="TermsResults">
      <h3><?php echo $term_title; ?></h3>
      <mark><?php single_term_title(); ?></mark>
    <div>
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
<?php get_footer(); ?>
