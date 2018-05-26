<?php get_header(); ?>
<div class="Content-container">
  <main class="Main">
    <?php while ( have_posts() ) : the_post(); ?>
      <section class="PostContent">
        <?php the_title('<h2>', '</h2>'); ?>
        <article><?php the_content(); ?></article>
        <?php get_template_part( 'template-parts/content-single' ); ?>
      </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>
  </main>
  <?php
    comments_template();
    get_sidebar();
  ?>
</div>
<?php get_footer(); ?>
