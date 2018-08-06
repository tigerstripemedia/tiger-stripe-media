<?php

/*
    Template Name: Home Page
*/ 

get_header();
?>

	<section id="banner">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        
        <?php $loop = new WP_Query( array( 'post_type' => 'banners', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
        
        <div class="carousel-inner carousel-overflow">
          
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
           $banner_image  = get_field('banner_image');
           $banner_title  = get_field('banner_title');
           $banner_sub_title  = get_field('banner_sub_title');
           $banner_class  = get_field('banner_class');
           $banner_link  = get_field('banner_link');
           $banner_new_tab  = get_field('banner_new_tab');
          ?>
          
          <div class="carousel-item <?php echo $banner_class; ?>">
            <?php if( !empty($banner_link) ) : ?>
            <a href="<?php echo $banner_link; ?>" <?php if ($banner_new_tab) : ?>target="_blank"<?php endif; ?>>
            <?php endif; ?>
            <img class="d-block w-100 banner-image" src="<?php echo $banner_image; ?>" alt="<?php echo $banner_image['alt']; ?>">
            <div class="container">
              <div class="carousel-caption fade-up">
                <h1><?php echo $banner_title; ?></h1>
                <h5><?php echo $banner_sub_title; ?></h5>
              </div>
            </div>
            <?php if( !empty($banner_link) ) : ?>
            </a>
            <?php endif; ?>
          </div>
          
          <?php endwhile; ?>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="hello">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-md-12">
            <img class="profile-hayd" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/me.jpg" alt="Hayden Ingham">
          </div>
          <div class="col-lg-4 col-md-12">
            <h3>Hayden Ingham <a class="icon-float hello-sm-icon" href=""><i class="fab fa-linkedin"></i></a></h3>
            <p class="text-muted">Owner of Tiger Stripe Media</p>
            <hr class="orange-hr">
            <h4>Hi, I'm Hayden and I can help you
              <a class="typewrite" data-period="2000" data-type='[ "develop a greater online presence.", "connect with more customers.", "use the internet to further your business." ]'>
                <span class="wrap"></span>
              </a>
            </h4>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <h3>Services</h3>
        <div class="row">
          <div class="col-xl-2 offset-xl-1 col-lg-3 col-md-4 col-6">
            <a href="/websites" class="left-underline">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/websites.svg" alt="">
                <h5>Websites</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <a href="/design-print" class="left-underline">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/design-print.svg" alt="">
                <h5>Design & Print</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <a href="/social-media" class="left-underline">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/social-media.svg" alt="">
                <h5>Social Media</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <a href="/web-hosting" class="left-underline">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/hosting.svg" alt="">
                <h5>Web Hosting</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <a href="/domains" class="left-underline">
              <div class="service-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/domains.svg" alt="">
                <h5>Domain Names</h5>
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
            	            	<i class="fas fa-calendar-alt"></i> <time><?php the_date(); ?></time><br>
            	            	<i class="fas fa-folder-open"></i> <?php the_category(', '); ?><br>
            	            	<i class="fas fa-tags"></i> <?php the_tags(); ?><br>
            	            	<i class="fas fa-clock"></i> <?php echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]'); ?>
            	            	<?php edit_post_link( 'Edit Post', '<br><i class="fas fa-pencil-alt"></i> ', '' ); ?>
            	            </small>
            			<?php endif; ?>
            			
            		</div>
            	
            		<footer class="card-footer">
            			<a href="<?php the_permalink($post->ID); ?>" class="btn btn-primary btn-block btn-load-right"><i class="fab fa-readme"></i> Read Post</a>
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