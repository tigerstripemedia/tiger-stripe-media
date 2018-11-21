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
        
    <!--    <button class="btn btn-primary btn-load-right ml-auto" type="button">Get a Quote <i class="fas fa-angle-double-right"></i></button>-->
        
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
                <button type="button" class="btn btn-primary btn-block btn-lg btn-load-right" data-toggle="modal" data-target="#websiteModal">Get a Quote <i class="fas fa-angle-double-right"></i></button>
              </div>
            </div>
          </div>

          <!-- Shopify Store Plan -->
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
                <button type="button" class="btn btn-primary btn-block btn-lg btn-load-right" data-toggle="modal" data-target="#storeModal">Get a Quote <i class="fas fa-angle-double-right"></i></button>
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

    <?php /*
    <section id="did-you-know">
      <div class="container">
        <h3 class="question-icon"><i class="far fa-question-circle fa-3x"></i></h3>
        <br>
        
        <?php $loop = new WP_Query( array( 'post_type' => 'random_question', 'orderby' => 'rand', 'posts_per_page' => 1 ) ); ?>
        
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <?php
           $question  = get_field('question');
           $question_btn_link  = get_field('question_btn_link');
           $related_service = get_field('related_field');
        ?>
        
        <h3><?php echo $question; ?></h3>
        <br>
        <a href="<?php echo $question_btn_link; ?>" class="btn btn-lg btn-primary btn-load-right">Find out More</a>
        
        <?php endwhile; ?>
        
      </div>
    </section>
    */?>

    <!-- Bespoke Website Modal -->
    <div class="modal fade" id="websiteModal" tabindex="-1" role="dialog" aria-labelledby="websiteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="websiteModalLabel">Bespoke Website Quote</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <?php echo $bespoke_form; ?>
            
            <!--<form>-->
            <!--  <div class="form-group">-->
            <!--    <label for="name">Name</label>-->
            <!--    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>-->
            <!--  </div>-->
            <!--  <div class="form-group">-->
            <!--    <label for="email">Email address</label>-->
            <!--    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>-->
            <!--  </div>-->
            <!--  <div class="form-group">-->
            <!--    <label for="bizName">Business name (optional)</label>-->
            <!--    <input type="text" class="form-control" id="bizName" placeholder="Enter your business name">-->
            <!--  </div>-->
            <!--  <div class="form-group">-->
            <!--    <label for="needs">What do you need?</label>-->
            <!--    <small id="needsHelp" class="form-text text-muted">Please explain what you need a website for in as much detail as possible.</small>-->
            <!--    <br>-->
            <!--    <textarea id="needs" aria-describedby="needsHelp" class="form-control" rows="8" cols="80" placeholder="I need a website for..." required></textarea>-->
            <!--  </div>-->
            <!--  <div class="form-group">-->
            <!--    <label for="exampleFormControlSelect1">Number of Pages *</label>-->
            <!--    <select class="form-control" id="exampleFormControlSelect1" required>-->
            <!--      <option>Choose</option>-->
            <!--      <option>1 - 5</option>-->
            <!--      <option>6</option>-->
            <!--      <option>7</option>-->
            <!--      <option>8</option>-->
            <!--      <option>9</option>-->
            <!--      <option>10</option>-->
            <!--      <option>11</option>-->
            <!--      <option>12</option>-->
            <!--      <option>13</option>-->
            <!--      <option>14</option>-->
            <!--      <option>15</option>-->
            <!--      <option>16</option>-->
            <!--      <option>17</option>-->
            <!--      <option>18</option>-->
            <!--      <option>19</option>-->
            <!--      <option>20</option>-->
            <!--      <option>21+</option>-->
            <!--    </select>-->
            <!--  </div>-->
            <!--  <div class="form-group">-->
            <!--    <label>Do you require any of the following?</label>-->
            <!--    <small id="extrasHelp" class="form-text text-muted">Check all that apply.</small>-->
            <!--    <div class="form-check">-->
            <!--      <input type="checkbox" class="form-check-input" id="blog">-->
            <!--      <label class="form-check-label" for="blog">Blog</label>-->
            <!--    </div>-->
            <!--    <div class="form-check">-->
            <!--      <input type="checkbox" class="form-check-input" id="seo">-->
            <!--      <label class="form-check-label" for="seo">Search Engine Optimisation (SEO)</label>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <button type="submit" class="btn btn-primary btn-load-right btn-block">Submit</button>-->
            <!--</form>-->
          </div>
        </div>
      </div>
    </div>

    <!-- Shopify Store Modal -->
    <div class="modal fade" id="storeModal" tabindex="-1" role="dialog" aria-labelledby="storeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="storeModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $ecom_form; ?>
          </div>
        </div>
      </div>
    </div>

<?php
get_footer();