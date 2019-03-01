<?php

/*
    Template Name: Website Design Page
*/ 

get_header();

// Custom Fields
$service_title  = get_field('service_title');
$service_sub_title  = get_field('service_sub_title');
$service_desc  = get_field('service_desc');
$bespoke_desc  = get_field('bespoke_desc');
$ecom_desc  = get_field('ecom_desc');
$faq_desc  = get_field('faq_desc');

?>

    <section id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h5><?php echo $service_sub_title; ?></h5>
            <h1><?php echo $service_title; ?></h1>
            <h6><?php echo $service_desc; ?></h6>
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
                    'theme_location'    => 'website-design',
                    'depth'             => 2,
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
            		) );
          	  ?>
            </ul>
            <a href="/quote" class="btn btn-success ml-3">Get a Quote</a>
          </div>
        </div>
      </nav>
    </section>

    <section id="website-packages">
      <div class="container" id="service-plans">
        
        <div class="row">
          
          <!-- Bespoke Website Plan -->
          <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/website.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Bespoke Website</h3>
                <br>
                <p class="text-muted"><?php echo $bespoke_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <div class="website-plan-features">
                  <?php while( have_rows('bespoke_features') ): the_row();
          
                  // Custom sub fields
              		$bespoke_feature = get_sub_field('bespoke_feature');

              		?>
                  
                  <h6 class="mb-2"><i class="fas fa-check mr-2"></i> <?php echo $bespoke_feature; ?></h6>
                  
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
              <div class="service-plan-footer">
                <a href="/quote" class="btn btn-success btn-block btn-lg">Get a Quote</a>
              </div>
            </div>
          </div>

          <!-- Woocommerce Store Plan -->
          <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/store.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Custom e-Commerce Store</h3>
                <br>
                <p class="text-muted"><?php echo $ecom_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <div class="website-plan-features">
                  <?php while( have_rows('ecom_features') ): the_row();
          
                  // Custom sub fields
              		$ecom_feature = get_sub_field('ecom_feature');
              		$ecom_tooltip = get_sub_field('ecom_tooltip');
  
              		?>
                  
                  <h6 class="mb-2"><i class="fas fa-check mr-2"></i> <?php echo $ecom_feature; ?></h6>
                  
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
              <div class="service-plan-footer">
                <a href="/quote" class="btn btn-success btn-block btn-lg">Get a Quote</a>
              </div>
          </div>
        </div>

      </div>
    </section>


    <section id="cms">
      <div class="container">
        <div class="section-title">
          <h6>Managing your site has never been easier</h6>
          <h2>Content Management</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/wordpress.svg" alt="">
            <hr class="hr">
            <p>WordPress is one of the best content management systems (CMS) available and is used by millions of website owners worldwide. A CMS allows you to easily edit the content of your website so that you can keep it up to date and relevant to your business. Each Bespoke Website and e-Commerce store from Tiger Stripe Media comes with WordPress not only installed but customised to fit your needs.</p>
          </div>
          <div class="col-md-6">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/woo.svg" alt="">
            <hr class="hr">
            <p>WooCommerce is a complete e-Commerce solution which takes care of every part to selling online. It integrates perfectly with WordPress meaning we can build you a custom, professional online store that is easy to maintain and is designed specifically for your brand. WooCommerce is one of the most popular and widely used e-Commerce platforms and is estimated to power 42% of all online stores.</p>
          </div>
        </div>
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