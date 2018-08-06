<?php

/*
    Template Name: Design & Print Page
*/ 

get_header();
?>

    <section id="page-header">
      <div class="page-title">
        <h2>Design &amp; Print</h2>
      </div>
    </section>

    <section id="design-print">
      <div class="container">
        <div class="intro-dp">
          <h3>About Design & Print</h3>
          <br>
          <p>Tiger Stripe Media offers a design & print service where you can order a range of different print products. Ordering custom designed print products is easy. All you need to do is request a quote and explain what you need. Hayden will design to your specifications and have the order shipped straight to your door. Tiger Stripe Media is in partnership with a trusted, professional print company meaning customers will recieve extremely high quality print at an affordable price.</p>
        </div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="dp-plan">
              <div class="dp-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/design-print-plan.svg" alt="">
              </div>
              <div class="dp-plan-content">
                <h3>Custom Design &amp; Print</h3>
                <br>
                <p class="text-muted">Choose from a range of quality print products and recieve a custom design, delivered straight to your door.</p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <h4><a data-toggle="tooltip" data-placement="top" title="Tooltip on top">Professional Design</a></h4><br>
                <h4><a data-toggle="tooltip" data-placement="top" title="Tooltip on top">High Quality Print</a></h4><br>
                <h4><a data-toggle="tooltip" data-placement="top" title="Tooltip on top">Range of Products to Choose From</a></h4><br>
                <h4><a data-toggle="tooltip" data-placement="top" title="Tooltip on top">Fast Delivery</a></h4>
              </div>
              <div class="dp-plan-footer">
                <button type="button" class="btn btn-primary btn-block btn-lg btn-load-right" data-toggle="modal" data-target="#dpModal">Get a Quote <i class="fas fa-angle-double-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();