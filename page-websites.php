<?php

/*
    Template Name: Websites Page
*/ 

get_header();

// Custom Fields
$service_title  = get_field('service_title');
$service_sub_title  = get_field('service_sub_title');
$service_desc  = get_field('service_desc');
$bespoke_desc  = get_field('bespoke_desc');
$bespoke_fts  = get_field('bespoke_fts');
$bespoke_extras  = get_field('bespoke_extras');
$bespoke_form  = get_field('bespoke_form');
$ecom_desc  = get_field('ecom_desc');
$ecom_fts  = get_field('ecom_fts');
$ecom_extras  = get_field('ecom_extras');
$ecom_form  = get_field('ecom_form');

?>

    <section id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <!--<h5>Custom design to fit your brand</h5>-->
            <!--<h1>Bespoke Website Design</h1>-->
            <!--<h6>Whether you need a bespoke informational website to represent your business or an e-Commerce store with all the tools you need to sell online we’ve got you covered.</h6>-->
            <h5><?php echo $service_sub_title; ?></h5>
            <h1><?php echo $service_title; ?></h1>
            <h6><?php echo $service_desc; ?></h6>
          </div>
        </div>
      </div>
    </section>
    
    <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
    <!--  <div class="container">-->
    <!--    <a class="navbar-brand" href="#"><i class="fas fa-question-circle"></i> Have a Question?</a>-->
      
    <!--    <div class="collapse navbar-collapse">-->
    <!--      <ul class="navbar-nav ml-auto">-->
    <!--        <li class="nav-item">-->
    <!--          <a class="nav-link mr-3" href="#">Overview</a>-->
    <!--        </li>-->
    <!--        <li class="nav-item">-->
    <!--          <a class="nav-link mr-3" href="#">Website Plans</a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </div>-->
        
    <!--    <button class="btn btn-success ml-auto" type="button">Get a Quote <i class="fas fa-angle-double-right"></i></button>-->
        
    <!--  </div>-->
    <!--</nav>-->

    <section id="service-plans">
      <div class="container">
        
        <h5 class="feature-instructions"><i class="fas fa-mouse-pointer"></i> Hover over a feature to learn more</h5>
        
        <div class="row">
          
          <!-- Bespoke Website Plan -->
          <div class="col-lg-6">
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
                <?php echo $bespoke_fts; ?>
                <hr class="hr">
                <p class="text-muted">Optional extras:</p>
                <?php echo $bespoke_extras; ?>
              </div>
              <div class="service-plan-footer">
                <a href="/quote" class="btn btn-success btn-block btn-lg">Get a Quote <i class="fas fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Woocommerce Store Plan -->
          <div class="col-lg-6">
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
                <?php echo $ecom_fts; ?>
                <hr class="hr">
                <p class="text-muted">Optional extras:</p>
                <?php echo $ecom_extras; ?>
              </div>
              <div class="service-plan-footer">
                <a href="/quote" class="btn btn-success btn-block btn-lg">Get a Quote <i class="fas fa-angle-double-right"></i></a>
              </div>
          </div>
        </div>

      </div>
    </section>


    <section id="website-brands">
      <div class="container">
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

<?php
get_footer();