  <footer>
    <p>
      <?php echo get_bloginfo( 'description' ) ?>
    <p>
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>