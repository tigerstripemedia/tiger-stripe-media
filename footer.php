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
      <a class="mx-3 mt-1 icon-float sm-icon" href="#"><i class="fab fa-linkedin"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="#"><i class="fab fa-youtube"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="#"><i class="fab fa-facebook-square"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="#"><i class="fab fa-instagram"></i></a>
      <a class="mx-3 mt-1 icon-float sm-icon" href="#"><i class="fab fa-twitter"></i></a>
    </div>
  </div>
  <div class="copyright">
    <small>&copy; 2018 Tiger Stripe Media | Made with &#9825; by Tiger Stripe Media</small>
  </div>

</footer>

<?php wp_footer(); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
