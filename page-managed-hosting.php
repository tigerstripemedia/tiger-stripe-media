<?php

/*
    Template Name: Managed Hosting Page
*/ 

get_header();

// Custom Fields
$service_title  = get_field('service_title');
$service_sub_title  = get_field('service_sub_title');
$service_desc  = get_field('service_desc');
$business_pro_cart_link  = get_field('business_pro_cart_link', 'option');
$faq_desc  = get_field('faq_desc');
$managed_platform_svg  = get_field('managed_platform_svg');
$managed_platform_title  = get_field('managed_platform_title');
$managed_platform_sub_title  = get_field('managed_platform_sub_title');
$managed_platform_copy  = get_field('managed_platform_copy');
$free_switch_svg  = get_field('free_switch_svg');
$free_switch_title  = get_field('free_switch_title');
$free_switch_sub_title  = get_field('free_switch_sub_title');
$free_switch_copy  = get_field('free_switch_copy');


?>

    <section id="managed-page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            
            <div class="managed-page-title">
              <h5><?php echo $service_sub_title; ?></h5>
              <h1><?php echo $service_title; ?></h1>
              <h6><?php echo $service_desc; ?></h6>
            </div>
            
            <div class="row managed-badges mt-5">
              <div class="col-lg-4 offset-lg-2 col-md-4 offset-md-2 col-sm-4 offset-sm-2 col-6"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/free-switch.svg" alt=""></div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-6"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/wordpress-optimised.svg" alt=""></div>
            </div>
            
            
            <div class="need-a-website mt-5 mb-lg-0 mb-5">
              <a href="/website-design"><p class="text-muted"><i class="fas fa-desktop"></i> Don't have a website yet? Click here to find out how we can help.</p></a>
            </div>
            
          </div>
          
          <div class="col-lg-5">
            <div class="bp-plan">
              <div class="bp-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/business-pro.svg" alt="">
              </div>
              <div class="bp-plan-content">
                <h3>Business Pro</h3>
                <p class="text-muted">What's included:</p>
                <div class="bp-features">
                  <?php while( have_rows('plan_features') ): the_row();
        
                  // Custom sub fields
              		$feature = get_sub_field('feature');
              
              		?>
              		
                  <h6><i class="fas fa-check mr-2"></i> <?php echo $feature; ?></h6>

                  <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <h3 class="hosting-plan-price"><span class="pounds">£29</span><span class="pence">.99</span><span class="per-month">/month</span></h3>
                
              </div>
              <div class="bp-plan-footer">
                <a href="<?php echo $business_pro_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="second-nav-placeholder">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="second-nav">
        <div class="container">
          <?php if( have_rows('faq_questions') ): ?>
            <div class="navbar-second"><a class="navbar-brand" href="#faq"><i class="fas fa-question-circle"></i> Have a Question?</a></div>
          <?php endif; ?>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav navbar-second ml-auto">
              <?php
                wp_nav_menu( array(
                    'theme_location'    => 'managed-hosting',
                    'depth'             => 2,
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
            		) );
          	  ?>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <section id="managed-key-features">
      <div class="container">
        <div class="managed-section-title">
          <h6>Get to know our managed hosting</h6>
          <h2>Business Pro Key Features</h2>
          <p>Explore what makes our managed hosting plan so perfect for business owners.</p>
        </div>
        
        <h6 class="feature-instructions"><i class="fas fa-mouse-pointer"></i> Hover over a feature to learn more</h6>
        <h6 class="feature-instructions-mobile"><i class="far fa-hand-pointer"></i> Tap on a feature to learn more</h6>
        
        <div class="row">
          
          <?php while( have_rows('plan_features') ): the_row();
        
          // Custom sub fields
      		$feature = get_sub_field('feature');
      		$tooltip = get_sub_field('tooltip');
      		$svg = get_sub_field('svg');
      
      		?>
          
          <div class="col-lg-3 mt-4">
            <a data-toggle="tooltip" data-placement="top" title="<?php echo $tooltip ?>">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $svg; ?>" alt="">
              <h6><?php echo $feature; ?></h6>
            </a>
          </div>
          
          <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </section>
    
    <section id="wordpress-designed">
      
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-3">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $managed_platform_svg; ?>"></img>
          </div>
          <div class="col-md-6">
            <h6><?php echo $managed_platform_sub_title; ?></h6>
            <h2><?php echo $managed_platform_title; ?></h2>
            <br>
            <p><?php echo $managed_platform_copy; ?></p>
          </div>
        </div>
      </div>
      
    </section>
    
     <section id="free-switch">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h6><?php echo $free_switch_sub_title; ?></h6>
            <h2><?php echo $free_switch_title; ?></h2>
            <br>
            <p><?php echo $free_switch_copy; ?></p>
          </div>
          <div class="col-md-6 mb-3">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $free_switch_svg; ?>"></img>
          </div>
        </div>
      </div>
    </section>
    
    <section id="full-overview">
      
      <div class="container">
      
        <div class="section-title">
          <h6>View all the Business Pro features</h6>
          <h2>Full Package Overview</h2>
        </div>
        
        <?php $loop = new WP_Query( array( 'post_type' => 'hosting_overview', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
      
        <table class="table table-striped table-bordered table-responsive-sm">
          <thead>
            <tr>
              <th class="false-th" scope="col" width= "50%"></th>
              <th scope="col" width= "50%"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/business-pro.svg" alt="">Business Pro</th>
            </tr>
          </thead>
          <tbody>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
            <?php
             $business_pro_icon_selected  = get_field('business_pro_icon_selected');
             $business_pro_icon  = get_field('business_pro_icon');
             $business_pro_text  = get_field('business_pro_text');
             $hide_managed_hosting = get_field('hide_managed_hosting');
            ?>
            
            <?php if(!$hide_managed_hosting) : ?>
            
            <tr>
              <td><?php echo the_title(); ?></td>
              <td><?php if($business_pro_icon_selected) : echo $business_pro_icon; else : echo $business_pro_text; endif;?></td>
            </tr>
            
            <?php 
            endif;
            endwhile; wp_reset_postdata(); 
            ?>
            
            <tr>
              <td class="false-td"></td>
              <td class="price-td">
                <h3 class="hosting-plan-price"><span class="pounds">£29</span><span class="pence">.99</span><span class="per-month">/month</span></h3>
                <a href="<?php echo $business_pro_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </section>
    
    <?php if( have_rows('faq_questions') ): ?>
    <section id="faq">
      <div class="container">
        
        <div class="section-title">
          <h6>Select a question from the list below</h6>
          <h2>Frequently Asked Questions</h2>
          <p>A list of the questions we get the most about <?php echo $faq_desc; ?>.</p>
        </div>
        
        <div class="accordion" id="faqAccordion">
          
          <?php while( have_rows('faq_questions') ): the_row();
        
          // Custom sub fields
      		$faq_question = get_sub_field('faq_question');
      		$faq_answer = get_sub_field('faq_answer');
      		$faq_label = get_sub_field('faq_label');
      
      		?>
      
      		<div class="card">
          
            <a data-toggle="collapse" data-target="#<?php echo $faq_label; ?>" aria-expanded="false" aria-controls="<?php echo $faq_label; ?>">
              <div class="card-header" id="faqQuestion"><h5><i class="fas fa-question-circle"></i> <?php echo $faq_question; ?></h5></div>
            </a>
        
            <div id="<?php echo $faq_label; ?>" class="collapse" aria-labelledby="faqQuestion" data-parent="#faqAccordion">
              <div class="card-body">
                <?php echo $faq_answer; ?>
              </div>
            </div>
            
          </div>
      
      	  <?php endwhile; wp_reset_postdata(); ?>
      	  
      	  <div class="card">
          
            <a data-toggle="collapse" data-target="#otherQuestion" aria-expanded="false" aria-controls="otherQuestion">
              <div class="card-header" id="faqQuestion"><h5><i class="fas fa-question-circle"></i> My question isn't answered here, what shall I do?</h5></div>
            </a>
        
            <div id="otherQuestion" class="collapse" aria-labelledby="faqQuestion" data-parent="#faqAccordion">
              <div class="card-body">
                If you have a question about <?php echo $faq_desc; ?> that is not answered here please contact us below.
                <a href="/contact" class="btn btn-primary btn-block mt-2">Contact Us</a>
              </div>
            </div>
            
          </div>
        
        </div>
      </div>
    </section>
    <?php endif; ?>


<?php
get_footer();