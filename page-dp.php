<?php

/*
    Template Name: Design & Print Page
*/ 

// Custom Fields
$about_title  = get_field('about_title');
$about_desc  = get_field('about_desc');
$dp_desc  = get_field('dp_desc');
$dp_fts  = get_field('dp_fts');
$dp_extras  = get_field('dp_extras');
$dp_form  = get_field('dp_form');


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
          <h3><?php echo $about_title; ?></h3>
          <br>
          <p><?php echo $about_desc; ?></p>
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
                <p class="text-muted"><?php echo $dp_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <?php echo $dp_fts; ?>
              </div>
              <div class="dp-plan-footer">
                <button type="button" class="btn btn-primary btn-block btn-lg btn-load-right" data-toggle="modal" data-target="#dpModal">Get a Quote <i class="fas fa-angle-double-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Design & Print Modal -->
    <div class="modal fade" id="dpModal" tabindex="-1" role="dialog" aria-labelledby="dpModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="dpModalLabel">Design & Print Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $dp_form; ?>
          </div>
        </div>
      </div>
    </div>

<?php
get_footer();