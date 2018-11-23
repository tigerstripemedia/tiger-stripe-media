<?php

/*
    Template Name: Web Hosting Page
*/ 

get_header();

// Custom Fields
$about_title  = get_field('about_title');
$about_desc  = get_field('about_desc');
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
            <h5>Fast &amp; reliable hosting</h5>
            <h1>Web Hosting Packages</h1>
            <h6>Give your website the home it deserves with one of our market-leading UK hosting packages.</h6>
          </div>
        </div>
      </div>
    </section>
    
    <section id="second-nav-placeholder">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="second-nav">
        <div class="container">
          <a class="navbar-brand" href="#test-section"><i class="fas fa-question-circle"></i> Have a Question?</a>
        
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link mr-2" href="#test-section">Key Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-2" href="#test-section">Unmanaged Hosting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-2" href="#test-section">Managed Hosting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-2" href="#test-section">Full Packages Overview</a>
              </li>
            </ul>
          </div>
          
  
        </div>
      </nav>
    </section>

    <section id="service-plans">
      <div id="service-plans" class="container">
        
        <h5 class="feature-instructions"><i class="fas fa-mouse-pointer"></i> Hover over a feature to learn more</h5>
        <h5 class="feature-instructions-mobile"><i class="far fa-hand-pointer"></i> Tap on a feature to learn more</h5>
        
        <div class="row">
          
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/essential.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Essential</h3>
                <br>
                <p class="text-muted">The perfect hosting package for small websites. Everything you need to get started.</p>
                <hr class="hr">
                
                <p class="text-muted">What's included:</p>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">10GB<br><span class="text-muted">Web Space</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">10<br><span class="text-muted">Mailboxes</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Unmanaged<br><span class="text-muted">Web Hosting</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Standard<br><span class="text-muted">Customer Support</span></a></h5><br>
                
                <h2 class="service-plan-price"><span class="pounds">£5</span><span class="pence">.99</span><span class="per-month">/month</span></h2>
                
              </div>
              <div class="service-plan-footer">
                <button type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#websiteModal">Order Now</button>
              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/advanced.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Advanced</h3>
                <br>
                <p class="text-muted">More space, mailboxes and domains. Ideal for growing sites that need more from hosting.</p>
                <hr class="hr">
                
                <p class="text-muted">What's included:</p>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">50GB<br><span class="text-muted">Web Space</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">15<br><span class="text-muted">Mailboxes</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Unmanaged<br><span class="text-muted">Web Hosting</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Standard<br><span class="text-muted">Customer Support</span></a></h5><br>
                
                <h2 class="service-plan-price"><span class="pounds">£7</span><span class="pence">.99</span><span class="per-month">/month</span></h2>
                
              </div>
              <div class="service-plan-footer">
                <button type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#websiteModal">Order Now</button>
              </div>
            </div>
          </div> 
          
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/premium.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Business</h3>
                <br>
                <p class="text-muted">A boost in hosting resources to cater for a more demanding website. Designed for businesses.</p>
                <hr class="hr">
                
                <p class="text-muted">What's included:</p>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">100GB<br><span class="text-muted">Web Space</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">20<br><span class="text-muted">Mailboxes</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Unmanaged<br><span class="text-muted">Web Hosting</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Standard<br><span class="text-muted">Customer Support</span></a></h5><br>
                
                <h2 class="service-plan-price"><span class="pounds">£10</span><span class="pence">.99</span><span class="per-month">/month</span></h2>
                
              </div>
              <div class="service-plan-footer">
                <button type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#websiteModal">Order Now</button>
              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="service-plan">
              <div class="service-plan-icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/business-pro.svg" alt="">
              </div>
              <div class="service-plan-content">
                <h3>Business Pro</h3>
                <br>
                <p class="text-muted">Fully managed, unlimited web hosting. We take care of everything so you can focus on your business.</p>
                <hr class="hr">
                
                <p class="text-muted">What's included:</p>

                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Unlimited<br><span class="text-muted">Web Space</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Unlimited<br><span class="text-muted">Mailboxes</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Fully Managed<br><span class="text-muted">Web Hosting</span></a></h5><br>
                
                <h5><a data-toggle="tooltip" data-placement="top" title="Test">Premium<br><span class="text-muted">Customer Support</span></a></h5><br>
                
                <h2 class="service-plan-price"><span class="pounds">£30</span><span class="pence">.00</span><span class="per-month">/month</span></h2>
                
              </div>
              <div class="service-plan-footer">
                <button type="button" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#websiteModal">Order Now</button>
              </div>
            </div>
          </div>


      </div>
    </section>
    
    <section id="test-section">
      
    </section>


<?php
get_footer();