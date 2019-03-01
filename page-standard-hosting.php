<?php

/*
    Template Name: Standard Hosting Page
*/ 

get_header();

// Custom Fields
$service_title  = get_field('service_title');
$service_sub_title  = get_field('service_sub_title');
$service_desc  = get_field('service_desc');
$essential_cart_link  = get_field('essential_cart_link', 'option');
$professional_cart_link  = get_field('professional_cart_link', 'option');
$business_cart_link  = get_field('business_cart_link', 'option');
$business_pro_cart_link  = get_field('business_pro_cart_link', 'option');
$faq_desc  = get_field('faq_desc');

// Email Signature custom field for when I need it
$email_signature_cart_link  = get_field('email_signature_cart_link', 'option');

?>

    <section id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h5><?php echo $service_sub_title; ?></h5>
            <h1><?php echo $service_title; ?></h1>
            <h6><?php echo $service_desc; ?></h6>
            <div class="need-a-website mt-3">
              <a href="/website-design"><p class="text-muted"><i class="fas fa-desktop"></i> Don't have a website yet? Click here to find out how we can help.</p></a>
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
                    'theme_location'    => 'standard-hosting',
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

    <section id="sh-packages">
      <div id="service-plans" class="container">
        
        <div class="row">
          
          <div class="col-lg-4 col-md-6">
            <div class="sh-plan">
              <div class="sh-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/essential.svg" alt="">
              </div>
              <div class="sh-plan-content">
                <h3>Essential</h3>
                <br>
                <p class="text-muted">Everything you need to get started.</p>
                <hr class="hr">
                
                <p class="text-muted">What's included:</p>
                
                <div class="sh-features">
                  <?php while( have_rows('essential_features') ): the_row();
        
                  // Custom sub fields
              		$essential_feature = get_sub_field('essential_feature');
              
              		?>
              		
                  <h6><i class="fas fa-check mr-2"></i> <?php echo $essential_feature; ?></h6>

                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
                
                <h2 class="hosting-plan-price"><span class="pounds">£4</span><span class="pence">.99</span><span class="per-month">/month</span></h2>
                
              </div>
              <div class="sh-plan-footer">
                <a href="<?php echo $essential_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="sh-plan">
              <div class="sh-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/professional.svg" alt="">
              </div>
              <div class="sh-plan-content">
                <h3>Professional</h3>
                <br>
                <p class="text-muted">Ideal for growing sites.</p>
                
                <hr class="hr">

                <p class="text-muted">What's included:</p>
                
                
                <div class="sh-features">
                  <?php while( have_rows('professional_features') ): the_row();
        
                  // Custom sub fields
              		$professional_feature = get_sub_field('professional_feature');
              
              		?>
              		
                  <h6><i class="fas fa-check mr-2"></i> <?php echo $professional_feature; ?></h6>

                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
                
                <h2 class="hosting-plan-price"><span class="pounds">£7</span><span class="pence">.99</span><span class="per-month">/month</span></h2>
                
              </div>
              <div class="sh-plan-footer">
                <a href="<?php echo $professional_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
            <div class="sh-plan">
              <div class="sh-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/business.svg" alt="">
              </div>
              <div class="sh-plan-content">
                <h3>Business</h3>
                <br>
                <p class="text-muted">Designed for businesses.</p>
                <hr class="hr">
                
                <p class="text-muted">What's included:</p>
                
                <div class="sh-features">
                  <?php while( have_rows('business_features') ): the_row();
        
                  // Custom sub fields
              		$business_feature = get_sub_field('business_feature');
              
              		?>
              		
                  <h6><i class="fas fa-check mr-2"></i> <?php echo $business_feature; ?></h6>

                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
                
                <h2 class="hosting-plan-price"><span class="pounds">£10</span><span class="pence">.99</span><span class="per-month">/month</span></h2>
                
              </div>
              <div class="sh-plan-footer">
                <a href="<?php echo $business_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="container">
        <div class="managed-link">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/managed-link.svg" alt="">
              <h5>Hosting a WordPress Website?</h5>
              <h6>Get unlimited web space, bandwidth and mailboxes with our WordPress optimised, fully managed and monitored <a href="/managed-hosting">Business Pro hosting package</a>.</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="key-features">
      <div class="container">
        <div class="kf-section-title">
          <h6>Included in every package</h6>
          <h2>Key Hosting Features</h2> 
          <p>Everything you need for a successful website.</p>
          
        </div>
        <div class="row top-features">
          <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bandwidth.svg"></img>
            <h5>Unlimited Bandwidth</h5>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ssl.svg"></img>
            <h5>Free SSL Certificates</h5>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ssd.svg"></img>
            <h5>100% SSD Storage</h5>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/one-click.svg"></img>
            <h5>70+ One-Click Install Apps</h5>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/technology.svg"></img>
            <h5>Powerful Market-Leading Technology</h5>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/data.svg"></img>
            <h5>Secure, State-of-the-Art UK Data Centre</h5>
          </div>
        </div>
      </div>
    </section>
    
    <section id="our-platform">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h6>Powerful, scaleable &amp; Dynamic</h6>
            <h2>A Hosting Platform Like No Other</h2>
            <br>
            <p>Our powerful, bespoke hosting platform has been designed for you by experts with over twenty years’ industry experience. We provide you with unbeatable load-balanced cloud hosting, meaning there’s no single point of failure and your website performance will never be affected by other users’ websites, visitors or activity. All servers have SSD storage as standard, and we’ve optimised every part of your experience for maximum speed and security. Our hosting is designed to scale as your website grows, meaning the same great performance no matter how popular you get.</p>
          </div>
          <div class="col-md-6">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cloud-hosting.svg"></img>
          </div>
        </div>
      </div>
    </section>
    
    <section id="control-panel">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/control-panel.svg"></img></div>
          <div class="col-lg-6">
            <h6>Everything you need to host your site</h6>
            <h2>Feature-rich Control Panel</h2>
            <br>
            <p>Manage your websites, databases, email, files, and every other aspect of your hosting account straight from your bespoke control panel. We’ve developed it ourselves to ensure a sleek, modern and user-friendly experience.</p>
            <p>As well as containing all the practical features you need, your control panel comes with lots of useful extras, including a range of website tools and 70+ one-click installs of popular software titles such as WordPress, Joomla!, Drupal, Magento, OpenCart, and more.</p>
            <a href="http://cp.tigerstripe.network/login/demo" class="btn btn-primary btn-block btn-lg">View Demo</a>
          </div>
        </div>
      </div>
    </section>
    
    <section id="full-overview">
      
      <div class="container">
      
        <div class="section-title">
          <h6>View all the features of our packages</h6>
          <h2>Full Packages Overview</h2>
        </div>
      
        <?php $loop = new WP_Query( array( 'post_type' => 'hosting_overview', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
      
        <table class="table table-striped table-bordered table-responsive-sm">
          <thead>
            <tr>
              <th class="false-th" scope="col" width= "20%"></th>
              <th scope="col" width= "20%"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/essential.svg" alt="">Essential<div class="text-muted">Standard Hosting</div></th>
              <th scope="col" width= "20%"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/professional.svg" alt="">Professional<div class="text-muted">Standard Hosting</div></th>
              <th scope="col" width= "20%"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/business.svg" alt="">Business<div class="text-muted">Standard Hosting</div></th>
              <th scope="col" width= "20%"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/business-pro.svg" alt="">Business Pro<div class="text-muted">Managed Hosting</div></th>
            </tr>
          </thead>
          <tbody>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
            <?php
             $essential_icon_selected  = get_field('essential_icon_selected');
             $essential_icon  = get_field('essential_icon');
             $essential_text  = get_field('essential_text');
             $professional_icon_selected  = get_field('professional_icon_selected');
             $professional_icon  = get_field('professional_icon');
             $professional_text  = get_field('professional_text');
             $business_icon_selected  = get_field('business_icon_selected');
             $business_icon  = get_field('business_icon');
             $business_text  = get_field('business_text');
             $business_pro_icon_selected  = get_field('business_pro_icon_selected');
             $business_pro_icon  = get_field('business_pro_icon');
             $business_pro_text  = get_field('business_pro_text');
            ?>
            
            <tr>
              <td><?php echo the_title(); ?></td>
              <td><?php if($essential_icon_selected) : echo $essential_icon; else : echo $essential_text; endif;?></td>
              <td><?php if($professional_icon_selected) : echo $professional_icon; else : echo $professional_text; endif;?></td>
              <td><?php if($business_icon_selected) : echo $business_icon; else : echo $business_text; endif;?></td>
              <td><?php if($business_pro_icon_selected) : echo $business_pro_icon; else : echo $business_pro_text; endif;?></td>
            </tr>
            
            <?php endwhile; wp_reset_postdata(); ?>
            
            <tr>
              <td class="false-td"></td>
              <td class="price-td">
                <h3 class="hosting-plan-price"><span class="pounds">£5</span><span class="pence">.99</span><span class="per-month">/month</span></h3>
                <a href="<?php echo $essential_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </td>
              <td class="price-td">
                <h3 class="hosting-plan-price"><span class="pounds">£7</span><span class="pence">.99</span><span class="per-month">/month</span></h3>
                <a href="<?php echo $professional_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </td>
              <td class="price-td">
                <h3 class="hosting-plan-price"><span class="pounds">£10</span><span class="pence">.99</span><span class="per-month">/month</span></h3>
                <a href="<?php echo $business_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </td>
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
        
        </div>
      </div>
    </section>
    <?php endif; ?>


<?php
get_footer();