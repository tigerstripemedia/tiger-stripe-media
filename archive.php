<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tiger_Stripe_Media
 */

get_header();
?>

	

		<?php if ( have_posts() ) : ?>

			<section id="page-header">
		      <div class="container">
		      	<?php
				the_archive_title( '<h3>', '</h3>' );
				?>
		      </div>
		    </section>
		    
		    <section id="second-nav-placeholder">
		      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="second-nav">
		        <div class="container">
		        	
					<div class="blog-search">
						<?php echo get_search_form(); ?>
					</div>
		        
					<div class="collapse navbar-collapse">
					
						<div class="blog-categories ml-auto">
							<div class="dropdown">
								<button class="btn btn-secondary btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-folder-open"></i> Categories
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<?php
										$categories = get_categories();
										foreach($categories as $category) {
										echo '<a class="dropdown-item" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
										}
									?>
								</div> 
							</div>
						</div>
					</div>
		  
		        </div>
		      </nav>
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
			
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );
							?>
						</div>
					<?php
					endwhile;
		
					the_posts_navigation();
					?>
				</div>
		      </div>
		    </section>
		    	
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
				

		

<?php
get_footer();
