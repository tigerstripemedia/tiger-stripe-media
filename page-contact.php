<?php

/*
    Template Name: Contact Page
*/ 

// Custom Fields
$contact_form  = get_field('contact_form');

get_header();
?>

    <section id="page-header">
      <div class="page-title">
        <h2>Contact</h2>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <h4>Have a question? We'd love to hear from you!</h4>
        <h5>Please enter your details below and hit send - we'll be in touch as soon as possible.</h5>
        <br>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <?php echo $contact_form; ?>
          </div>
        </div>
      </div>
    </section>
    

<?php
get_footer();