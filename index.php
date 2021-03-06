<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tiger_Stripe_Media
 */

get_header();
?>

	<section id="page-header">
      <div class="container">
        <div class="row">
        	<div class="col-md-6 offset-md-3">
	          <h1 class="blog-title">TSM Blog</h1>
	          <h6 class="blog-sub-title">Your helpful guide to everything in online business.</h6>
        	</div>
        </div>
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
    
    <section id="blog-nav">
	    <div class="container">
			<div class="row">
	          <div class="col-lg-4 blog-search">
	            
	          </div>
	          
	        </div>
	    </div>
	</section>
	
	<section id="blog-body">
      <div class="container">
      	
      	<?php if ( have_posts() ) : ?>
      	
        <div class="row">
        	
	
		  <?php if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;
	
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
    	<?php else : ?>
    	
				<div class="no-posts">
		          <h5>New blog posts coming soon!</h5>
		        </div>
		        
			<?php
			endif;
			?>
      </div>
    </section>

<?php
get_footer();
