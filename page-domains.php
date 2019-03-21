<?php

/*
    Template Name: Domains Page
*/ 

get_header();

// Custom Fields
$faq_desc  = get_field('faq_desc');

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
          <?php if( have_rows('faq_questions') ): ?>
            <div class="navbar-second"><a class="navbar-brand" href="#faq"><i class="fas fa-question-circle"></i> Have a Question?</a></div>
          <?php endif; ?>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav navbar-second ml-auto">
              <?php
                wp_nav_menu( array(
                    'theme_location'    => 'domains',
                    'depth'             => 2,
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
            		) );
          	  ?>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <section id="domain-pricing">
      <div class="container">
        
        <div class="domain-section-header">
          <h2>Clear &amp; Simple Domain Pricing</h2>
          <h6>Straightforward pricing with no nasty hidden fees makes finding the perfect domain for your site simple.</h6>
        </div>
        
        <table class="table table-striped table-bordered table-responsive-sm">
          <thead>
            <tr>
              <th class="false-th" scope="col" width= "40%"></th>
              <th scope="col" width= "30%">Register / Renew</th>
              <th scope="col" width= "30%">Transfer</th>
            </tr>
          </thead>
          <tbody>
            
            <?php $loop = new WP_Query( array( 'post_type' => 'tlds', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
            <?php
             $tld = get_the_title();
             $tld_reg_renewal  = get_field('tld_reg_renewal');
             $tld_transfer  = get_field('tld_transfer');
             $tld_free_transfer  = get_field('tld_free_transfer');
            ?>
            
            <tr>
              <td><?php echo $tld; ?></td>

              <td>£<?php echo $tld_reg_renewal; ?> /year</td>
              
              <td><?php if($tld_free_transfer) { ?>FREE<?php } else { ?>£<?php echo $tld_transfer; ?> /year<?php } ?></td>

            </tr>
            
            <?php endwhile; wp_reset_postdata(); ?>
            
          </tbody>
        </table>
      </div>
    </section>
    
    <section id="second-domain-search" class="domain-search">
      <div class="container">
        <div class="section-title">
          <h6>Find your perfect domain today</h6>
          <h2>Search Our Wide Range of Domains</h2>
        </div>
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
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
    </section>
    
    <?php if( have_rows('faq_questions') ): ?>
    <section id="faq">
      <div class="container">
        
        <div class="section-title">
          <h6>Select a question from the list below</h6>
          <h2>Frequently Asked Questions</h2>
          <p>A list of the questions we get the most about <?php echo $faq_desc; ?>.</p>
        </div>
        
        <div class="accordion" id="faqAccordion">
          
          <?php while( have_rows('faq_questions') ): the_row();
        
          // Custom sub fields
      		$faq_question = get_sub_field('faq_question');
      		$faq_answer = get_sub_field('faq_answer');
      		$faq_label = get_sub_field('faq_label');
      
      		?>
      
      		<div class="card">
          
            <a data-toggle="collapse" data-target="#<?php echo $faq_label; ?>" aria-expanded="false" aria-controls="<?php echo $faq_label; ?>">
              <div class="card-header" id="faqQuestion"><h5><i class="fas fa-question-circle"></i> <?php echo $faq_question; ?></h5></div>
            </a>
        
            <div id="<?php echo $faq_label; ?>" class="collapse" aria-labelledby="faqQuestion" data-parent="#faqAccordion">
              <div class="card-body">
                <?php echo $faq_answer; ?>
              </div>
            </div>
            
          </div>
      
      	  <?php endwhile; wp_reset_postdata(); ?>
      	  
      	  <div class="card">
          
            <a data-toggle="collapse" data-target="#otherQuestion" aria-expanded="false" aria-controls="otherQuestion">
              <div class="card-header" id="faqQuestion"><h5><i class="fas fa-question-circle"></i> My question isn't answered here, what shall I do?</h5></div>
            </a>
        
            <div id="otherQuestion" class="collapse" aria-labelledby="faqQuestion" data-parent="#faqAccordion">
              <div class="card-body">
                If you have a question about <?php echo $faq_desc; ?> that is not answered here please contact us below.
                <a href="/contact" class="btn btn-primary btn-block mt-2">Contact Us</a>
              </div>
            </div>
            
          </div>
        
        </div>
      </div>
    </section>
    <?php endif; ?>

<?php
get_footer();