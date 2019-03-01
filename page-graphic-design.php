<?php

/*
    Template Name: Graphic Design Page
*/ 

// Custom Fields
$service_title  = get_field('service_title');
$service_sub_title  = get_field('service_sub_title');
$service_desc  = get_field('service_desc');
$dp_desc  = get_field('dp_desc');
$do_desc  = get_field('do_desc');
$es_desc  = get_field('es_desc');
$faq_desc  = get_field('faq_desc');
$email_signature_cart_link = get_field('email_signature_cart_link', 'option');

get_header();
?>

    <section id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
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
                    'theme_location'    => 'graphic-design',
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

    <section id="design-packages">
      <div class="container" id="service-plans">
        
        <div class="row">
          
          <!-- Digital Only Plan -->
          <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/digital-only.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Digital Only Design</h3>
                <br>
                <p class="text-muted"><?php echo $do_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <div class="website-plan-features">
                  <?php while( have_rows('do_features') ): the_row();
          
                  // Custom sub fields
              		$do_feature = get_sub_field('do_feature');

              		?>
                  
                  <h6 class="mb-2"><i class="fas fa-check mr-2"></i> <?php echo $do_feature; ?></h6>
                  
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
              <div class="service-plan-footer">
                <a href="/quote" class="btn btn-success btn-block btn-lg">Get a Quote</a>
              </div>
            </div>
          </div>
          
          <!-- Design & Print Plan -->
          <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/design-print.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Design & Print</h3>
                <br>
                <p class="text-muted"><?php echo $dp_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <div class="website-plan-features">
                  <?php while( have_rows('dp_features') ): the_row();
          
                  // Custom sub fields
              		$dp_feature = get_sub_field('dp_feature');

              		?>
                  
                  <h6 class="mb-2"><i class="fas fa-check mr-2"></i> <?php echo $dp_feature; ?></h6>
                  
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
              <div class="service-plan-footer">
                <a href="/quote" class="btn btn-success btn-block btn-lg">Get a Quote</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="container">
        
        <div class="row">
          <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/email-signature.svg" alt="">
              </div>
              <div class="email-signature-content">
                <h3>Email Signature</h3>
                <br>
                <p class="text-muted"><?php echo $es_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <div class="website-plan-features">
                  <?php while( have_rows('es_features') ): the_row();
          
                  // Custom sub fields
              		$es_feature = get_sub_field('es_feature');

              		?>
                  
                  <h6 class="mb-2"><i class="fas fa-check mr-2"></i> <?php echo $es_feature; ?></h6>
                  
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <h3 class="hosting-plan-price"><span class="pounds">£10</span><span class="pence">.00</span><span class="per-month">/signature</span></h3>
              </div>
              <div class="service-plan-footer">
                <a href="<?php echo $email_signature_cart_link; ?>" class="btn btn-success btn-block btn-lg">Order Now</a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="signature-example">
              <h5 class="text-muted">Example Signature</h5>
              <hr class="hr">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/signature.png" alt="">
            </div>
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