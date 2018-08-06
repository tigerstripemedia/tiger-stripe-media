<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tiger_Stripe_Media
 */

?>

<section class="no-results not-found">
	<section id="page-header">
      <div class="page-title">
      	<h2><?php esc_html_e( 'Nothing Found', 'tiger-stripe-media' ); ?></h2>
      </div>
    </section>

	<section id="blog-body">
    	<div class="container" style="text-align: center;">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :
		
				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tiger-stripe-media' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);
		
			elseif ( is_search() ) :
			?>
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'tiger-stripe-media' ); ?></p>
				<div class="col-lg-6 offset-lg-3 col-md-12">
					<?php get_search_form(); ?>
				</div>
			<?php	
			else :
			?>
		
				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tiger-stripe-media' ); ?></p>
				<div class="col-lg-6 offset-lg-3 col-md-12">
					<?php get_search_form(); ?>
				</div>
			<?php
			endif;
			?>
			</div>
		</div>
	</section>
</section><!-- .no-results -->
