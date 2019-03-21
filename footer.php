<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tiger_Stripe_Media
 */

?>

<!-- Footer -->
<footer>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5><?php $nav_menu = wp_get_nav_menu_object(4); echo $nav_menu->name; ?></h5>
          <hr class="orange-hr">
          <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer-one',
                'menu'              => 'ul',
                'menu_class'        => 'footer-menu'
        		) );
          ?>
        </div>
        <div class="col-md-4">
          <h5><?php $nav_menu = wp_get_nav_menu_object(5); echo $nav_menu->name; ?></h5>
          <hr class="orange-hr">
          <?php
            wp_nav_menu( array(
                'theme_location'    => 'footer-two',
                'menu'              => 'ul',
                'menu_class'        => 'footer-menu'
        		) );
          ?>
        </div>
        <div class="col-md-4">
          <h5>Subscribe to The Tiger's Eye!</h5>
          <hr class="orange-hr">
          <p>Recieve all Tiger Stripe Media updates, blog posts and top tips directly to your inbox. See the business world through The Tiger's Eye.</p>
          <?php echo do_shortcode('[contact-form-7 id="134" title="The Tigers Eye Footer Form" html_class="custom-form"]'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="social-icons">
    <div class="container">
      <h5>Let's Get Social!</h5>
      <a class="mx-3 mt-1 icon-float sm-icon" href="https://www.linkedin.com/in/hayden-ingham-b36085165/" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="https://medium.com/@tigerstripemedia" target="_blank"><i class="fab fa-medium-m"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="https://www.youtube.com/channel/UCZO4khvZZ3KJX_xpd34uMFw?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="https://www.facebook.com/tigerstripemedia/" target="_blank"><i class="fab fa-facebook-square"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="https://www.instagram.com/tigerstripemedia/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="https://www.twitter.com/tigerstripem/" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
  </div>
  <div class="copyright">
    <small>&copy; <?php echo date("Y"); ?> Tiger Stripe Media</small>
  </div>

</footer>

<?php wp_footer(); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<script src="https://cdn.natterly.com/chatbox.js"></script>
<script>
  chatbox = new NatterlyChatbox("fafee190-f6f5-4329-864d-38291d98fbf3");
  chatbox.render();
</script>

</body>
</html>
