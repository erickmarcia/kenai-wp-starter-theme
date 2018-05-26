<?php get_header(); ?>
<div class="Content-container Page">
  <main class="Main">
    <?php while ( have_posts() ) : the_post(); ?>
      <section class="PostContent">
        <?php the_title('<h2>', '</h2>'); ?>
        <article><?php the_content(); ?></article>
      </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>
  </main>
  <?php  get_sidebar(); ?>
</div>
<?php  get_footer(); ?>
