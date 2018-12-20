<?php

/*
    Template Name: Design & Print Page
*/ 

// Custom Fields
$service_title  = get_field('service_title');
$service_sub_title  = get_field('service_sub_title');
$service_desc  = get_field('service_desc');
$dp_desc  = get_field('dp_desc');
$dp_fts  = get_field('dp_fts');
$dp_extras  = get_field('dp_extras');
$dp_form  = get_field('dp_form');


get_header();
?>

    <section id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <!--<h5>A range of design services</h5>-->
            <!--<h1>Design &amp; Printing</h1>-->
            <!--<h6>From digital only design to full promotional material design and printing we offer quality, professional work at a reasonable price.</h6>-->
            <h5><?php echo $service_sub_title; ?></h5>
            <h1><?php echo $service_title; ?></h1>
            <h6><?php echo $service_desc; ?></h6>
          </div>
        </div>
      </div>
    </section>

    <section id="service-plans">
      <div class="container">
        
        <h5 class="feature-instructions"><i class="fas fa-mouse-pointer"></i> Hover over a feature to learn more</h5>
        
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/design-print-plan.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Custom Design &amp; Print</h3>
                <br>
                <p class="text-muted"><?php echo $dp_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <?php echo $dp_fts; ?>
              </div>
              <div class="service-plan-footer">
                <a href="/quote" type="button" class="btn btn-success btn-block btn-lg">Get a Quote <i class="fas fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();