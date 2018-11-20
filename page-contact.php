<?php

/*
    Template Name: Contact Page
*/ 

// Custom Fields
$contact_form  = get_field('contact_form');

get_header();
?>

    <section id="service-page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h5></h5>
            <h1>Contact TSM</h1>
            <h6>We would love to hear from you! Please enter your details below and hit send - we'll be in touch as soon as possible.</h6>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <?php echo $contact_form; ?>
          </div>
        </div>
      </div>
    </section>
    

<?php
get_footer();