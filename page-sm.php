<?php

/*
    Template Name: Social Media Page
*/ 

// Custom Fields
$about_title  = get_field('about_title');
$about_desc  = get_field('about_desc');

$kickstarter_desc  = get_field('kickstarter_desc');
$kickstarter_fts  = get_field('kickstarter_fts');
$kickstarter_extras  = get_field('kickstarter_extras');
$kickstarter_form  = get_field('kickstarter_form');

$refresher_desc  = get_field('refresher_desc');
$refresher_fts  = get_field('refresher_fts');
$refresher_extras  = get_field('refresher_extras');
$refresher_form  = get_field('refresher_form');

$consulting_desc  = get_field('consulting_desc');
$consulting_fts  = get_field('consulting_fts');
$consulting_extras  = get_field('consulting_extras');
$consulting_form  = get_field('consulting_form');

get_header();
?>

    <section id="page-header">
      <div class="page-title">
        <h2>Social Media</h2>
      </div>
    </section>

    <section id="social-media">
      <div class="container">
        <div class="intro-social">
          <h3><?php echo $about_title; ?></h3>
          <br>
          <p><?php echo $about_desc; ?></p>
        </div>
        <div class="row">

          <div class="col-lg-4">
            <div class="sm-plan">
              <div class="sm-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/kickstarter.svg" alt="">
              </div>
              <div class="sm-plan-content">
                <h3>Kickstarter</h3>
                <br>
                <p class="text-muted"><?php echo $kickstarter_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <?php echo $kickstarter_fts; ?>
              </div>
              <div class="sm-plan-footer">
                <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#kickstarterModal">Get a Quote <i class="fas fa-angle-double-right"></i></button>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sm-plan">
              <div class="sm-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/refresher.svg" alt="">
              </div>
              <div class="sm-plan-content">
                <h3>Refresher</h3>
                <br>
                <p class="text-muted"><?php echo $refresher_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <?php echo $refresher_fts; ?>
              </div>
              <div class="sm-plan-footer">
                <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#refresherModal">Get a Quote <i class="fas fa-angle-double-right"></i></button>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sm-plan">
              <div class="sm-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/consulting.svg" alt="">
              </div>
              <div class="sm-plan-content">
                <h3>Consulting</h3>
                <br>
                <p class="text-muted"><?php echo $consulting_desc; ?></p>
                <hr class="hr">
                <p class="text-muted">What's included:</p>
                <?php echo $consulting_fts; ?>
              </div>
              <div class="sm-plan-footer">
                <button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#consultingModal">Get a Quote <i class="fas fa-angle-double-right"></i></button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    
    <!-- Kickstarter Modal -->
    <div class="modal fade" id="kickstarterModal" tabindex="-1" role="dialog" aria-labelledby="kickstarterModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kickstarterModalLabel">Kickstarter Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $kickstarter_form; ?>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Refresher Modal -->
    <div class="modal fade" id="refresherModal" tabindex="-1" role="dialog" aria-labelledby="refresherModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="refresherModalLabel">Refresher Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $refresher_form; ?>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Consulting Modal -->
    <div class="modal fade" id="consultingModal" tabindex="-1" role="dialog" aria-labelledby="consultingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="consultingModalLabel">Consulting Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $consulting_form; ?>
          </div>
        </div>
      </div>
    </div>

<?php
get_footer();