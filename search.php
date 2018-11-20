<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Tiger_Stripe_Media
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>
		
		<section id="page-header">
			<!--<div class="page-title">-->
				<h3>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'tiger-stripe-media' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h3>
			<!--</div>-->
		</section>
		
		<section id="blog-nav">
		    <div class="container">
				<div class="row">
		          <div class="col-lg-4 offset-lg-4 blog-search">
		            <!--<form role="search" method="get" class="form-inline custom-form search-form" action="<?php echo home_url( '/' ); ?>">-->
		            <!--  <div class="form-group mb-2">-->
		            <!--    <label for="search" class="sr-only">Search the Blog</label>-->
		            <!--    <input class="form-control" type="search" id="search" placeholder="Search the blog...">-->
		            <!--  </div>-->
		            <!--  <button type="submit" class="btn btn-primary btn-load-right mb-2"><i class="fas fa-search"></i></button>-->
		            <!--</form>-->
		            <?php echo get_search_form(); ?>
		          </div>
		        </div>
		    </div>
		</section>

		<section id="blog-body">
      		<div class="container">
        		<div class="row">

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
					?>	
						<div class="col-lg-6 col-md-12">
							<?php
							the_post();
			
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
							?>
						</div>
					<?php	
					endwhile;
		
					the_posts_navigation();
		
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif;
				?>

				</div>
	      	</div>
	    </section>

<?php
get_footer();
