    </section>
    <footer class="Footer">
      <section class="Footer-container">
        <div>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'social_menu',
              'container' => 'nav',
              'container_class' => 'SocialMedia',
              'link_before' => '<span class="sr-text">',
              'link_after' => '</span>'
            ));
          ?>
        </div>
        <div>
          <p>
            &copy; <?php echo date('Y') . __('Copyright', 'kenai'); ?>
            <a href="https://jonmircha.com" target="_blank">@jonmircha</a>.
          </p>
        </div>
      </section>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
