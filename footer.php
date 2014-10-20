<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h4>Contact Us</h4>
          <?php get_template_part( 'inc/content', 'address' ); ?>
      </div>
      <div class="col-sm-4">
          <h4>Connect with us</h4>
          <?php get_template_part( 'inc/content', 'social' ); ?>
      </div>
      <div class="col-sm-4">
        <h4>Quick Links</h4>
        <?php cad_get_menu( 'footer-navigation', 'list-unstyled','','1'); ?>
      </div>
    </div>
  </div>
</footer>
<?php get_template_part( 'inc/content', 'colophon' ); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>