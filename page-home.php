<?php

/*
    Template Name: Home Page
*/ 

// Custom Fields
$banner_tagline  = get_field('banner_tagline');
$tagline_delay_seconds  = get_field('tagline_delay_seconds');

get_header();
?>
  <script>
    // array with texts to type in typewriter
    var dataText = ["Build a strong online presence", "Take the stress out of website managment", "Connect with more customers", "We can help", "Tiger Stripe Media"];
  </script>

  <section id="home-banner">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="home-jumbo-text">
          <h2 style="-webkit-animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.8s both; animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.5s both;">Welcome to Tiger Stripe Media</h2>
          <h1 style="-webkit-animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1.1s both; animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0.7s both;" class="display-4">Let us help <span class="colour-1">your business</span> thrive online</h1>
          <h5 style="-webkit-animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1.4s both; animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1.4s both;"><?php echo $banner_tagline; ?></h5>
          <a href="/contact" style="-webkit-animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1.7s both; animation: fade-in 1.2s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1.7s both;" class="btn btn-secondary btn-lg mt-3">Get in Touch</a>
        </div>
      </div>
    </div>
  </section>

    <section id="hello">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-12">
            <img class="profile-hayd" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/me.jpg" alt="Hayden Ingham">
          </div>
          <div class="col-lg-4 col-md-12">
            <h3>Hayden Ingham <a class="icon-float hello-sm-icon" href="https://www.linkedin.com/in/hayden-ingham-b36085165/" target="_blank"><i class="fab fa-linkedin"></i></a></h3>
            <p class="text-muted">Owner of Tiger Stripe Media</p>
            <hr class="orange-hr">
            <p>Our mission is to develop and maintain an excellent online presence for hundreds of small businesses in Yorkshire.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <h6>what we do</h6>
        <h2>Our Services</h2>
        <div class="row">
          <div class="col-xl-2 offset-xl-1 col-lg-4 offset-lg-2 col-md-4 col-4">
            <a href="/website-design">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/website-design.svg" alt="">
                <h5 class="mt-3">Website Design</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-4">
            <a href="/graphic-design">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/graphic-design.svg" alt="">
                <h5 class="mt-3">Graphic Design</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-4">
            <a href="/managed-hosting">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/managed-hosting.svg" alt="">
                <h5 class="mt-3">Managed Web Hosting</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-4 offset-lg-0 col-md-4 offset-md-2 col-4 offset-2">
            <a href="/standard-hosting">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/standard-hosting.svg" alt="">
                <h5 class="mt-3">Standard Web Hosting</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 offset-md-0 col-4">
            <a href="/domains">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/domains.svg" alt="">
                <h5 class="mt-3">Domain Names</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="latest-posts">
      <div class="container">
        <h2>Latest Blog Posts</h2>
        <a href="/blog" class="text-muted all-posts">See all posts <i class="fas fa-angle-right"></i></a>
        <hr class="orange-hr">
        <br>
        
        <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
          
        <?php if ($the_query -> have_posts()) { ?>
        
        <div class="row">
          
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <div class="col-lg-6 col-md-12">
            	<div id="post-<?php the_ID(); ?>" class="card blog-card <?php post_class(); ?>">
            		<?php if ( has_post_thumbnail() ) { ?>
            			<img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="Post Image">
            		<?php } ?>
            		<div class="card-body">
            			
            			<?php
            			if ( is_singular() ) :
            				the_title( '<h5 class="card-title">', '</h5>' );
            			else :
            				the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
            			endif;
            			?>
            			
            		    <p class="card-text"><?php the_excerpt(); ?></p>
            		    
            			<?php
            			if ( 'post' === get_post_type() ) :
            				?>
            				<small class="text-muted blog-post-meta">
            	            	<i class="fas fa-user"></i> <?php the_author(); ?><br>
            	            	<i class="fas fa-calendar-alt"></i> <time><?php the_last_modified_info(); ?></time><br>
            	            	<i class="fas fa-folder-open"></i> <?php the_category(', '); ?><br>
            	            	<i class="fas fa-tags"></i> <?php the_tags(); ?><br>
            	            	<i class="fas fa-clock"></i> <?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]'); ?>
            	            	<?php edit_post_link( 'Edit Post', '<br><i class="fas fa-pencil-alt"></i> ', '' ); ?>
            	            </small>
            			<?php endif; ?>
            			
            		</div>
            	
            		<footer class="card-footer">
            			<a href="<?php the_permalink($post->ID); ?>" class="btn btn-primary btn-block"><i class="fab fa-readme"></i> Read Post</a>
            		</footer>
            		
            	</div><!-- #post-<?php the_ID(); ?> -->
  					</div>
          <?php 
          endwhile;
          wp_reset_postdata();
          ?>
          
        </div>
        <?php } else { ?>
            
          <div class="no-posts">
            <h5>New blog posts coming soon!</h5>
          </div>
          
        <?php } ?>
      </div>
    </section>
    
    <!--<section id="testimonials">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-4">-->
    <!--        <div class="testimonial">-->
    <!--          <h3>Donna Coe</h3>-->
    <!--          <p class="text-muted">The Mirfield Emporium</p>-->
    <!--          <hr class="orange-hr">-->
    <!--          <h5><i class="fas fa-quote-left testimonial-quote-mark"></i> Hayden is amazing. <i class="fas fa-quote-right testimonial-quote-mark"></i></h5>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <div class="testimonial">-->
    <!--          <h3>Donna Coe</h3>-->
    <!--          <p class="text-muted">The Mirfield Emporium</p>-->
    <!--          <hr class="orange-hr">-->
    <!--          <h5><i class="fas fa-quote-left testimonial-quote-mark"></i> Hayden is amazing. <i class="fas fa-quote-right testimonial-quote-mark"></i></h5>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-md-4">-->
    <!--        <div class="testimonial">-->
    <!--          <h3>Donna Coe</h3>-->
    <!--          <p class="text-muted">The Mirfield Emporium</p>-->
    <!--          <hr class="orange-hr">-->
    <!--          <h5><i class="fas fa-quote-left testimonial-quote-mark"></i> Hayden is amazing. <i class="fas fa-quote-right testimonial-quote-mark"></i></h5>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

<?php
get_footer();