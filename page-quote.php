<?php

/*
    Template Name: Quote Page
*/ 

// Custom Fields
$contact_form  = get_field('contact_form');

get_header();
?>

    <section id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h5></h5>
            <h1>Get a Quote</h1>
            <h6>Interested in working with us? Tell us a little bit about what you need and we will get back to you with a quote.</h6>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <?php echo do_shortcode('[contact-form-7 id="434" title="Get a Quote"]'); ?>
          </div>
        </div>
      </div>
    </section>
    

<?php
get_footer();