<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tiger_Stripe_Media
 */

get_header();
?>

	<section id="page-header">
      <div class="page-title">
        <h2><?php the_title(); ?></h2>
      </div>
    </section>

			
	<div class="container default-page">
		<?php
		if (have_posts()) {
		  while (have_posts()) {
		    the_post();
		    the_content(); 
		  }
		}
		?>
	</div>

<?php
get_footer();
