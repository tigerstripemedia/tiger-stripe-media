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