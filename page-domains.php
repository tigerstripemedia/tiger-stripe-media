<?php

/*
    Template Name: Domains Page
*/ 

get_header();

// Custom Fields


?>

    <section id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="domain-search">
              <h5>Search our range of domains</h5>
              <h1>Find your Perfect Domain Name</h1>
              <form class="mb-5 mt-5" action="https://www.tigerstripemedia.com/portal/cart.php?a=add&domain=register" method="post">
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">www.</span>
                  </div>
                  <input class="form-control domain-search-input" type="text" name="query" size="20" placeholder="yourbusiness.com"/>
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Search</button>
                  </div>
                </div>
              </form>
            </div>
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
                <a class="nav-link mr-2" href="#domain-pricing">Domain Pricing</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <section id="domain-pricing">
      <div class="container">
        
        <div class="domain-pricing-header">
          <h2>Clear &amp; Simple Domain Pricing</h2>
          <h6>Straightforward pricing with no nasty hidden fees makes finding the perfect domain for your site simple.</h6>
        </div>
        
        <table class="table table-striped table-bordered table-responsive-sm">
          <thead>
            <tr>
              <th class="false-th" scope="col" width= "60%"></th>
              <th scope="col" width= "20%">Register / Renew</th>
              <th scope="col" width= "20%">Transfer</th>
            </tr>
          </thead>
          <tbody>
            
            <?php $loop = new WP_Query( array( 'post_type' => 'tlds', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
            <?php
             $tld = get_the_title();
             $tld_reg_renewal  = do_shortcode('[whmcs tld="'.$tld.'" type="register" reg="1y"]');;
             $tld_transfer  = do_shortcode('[whmcs tld="'.$tld.'" type="transfer" reg="1y"]');;
            ?>
            
            <tr>
              <td>.<?php the_title(); ?></td>

              <?php if($tld_reg_renewal === "£0.00 GBP") { ?>
                <td>FREE</td>
              <?php } else { ?>
                <td><?php echo $tld_reg_renewal; ?></td>
              <?php } ?>
              
              <?php if($tld_transfer === "£0.00 GBP") { ?>
                <td>FREE</td>
              <?php } else { ?>
                <td><?php echo $tld_transfer; ?></td>
              <?php } ?>
              
            </tr>
            
            <?php endwhile; ?>
            
          </tbody>
        </table>
      </div>
    </section>

<?php
get_footer();