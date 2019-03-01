<?php

/*
    Template Name: Login Page
*/ 

// Custom Fields
$contact_form  = get_field('contact_form');

get_header();
?>

    <section id="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="login-form">
              <div class="login-title">
                <h5>Welcome back</h5>
                <h6 class="text-muted">Login to your Tiger Stripe Media client account.</h6>
              </div>
              <form method="post" action="https://www.tigerstripemedia.com/portal/dologin.php">
                <div class="form-group">
                  <label class="sr-only" for="login-email">Email Address</label>
                  <input id="login-email" type="text" name="username" size="50" class="form-control" placeholder="Email address"/>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="login-password">Password</label>
                  <input id="login-password" type="password" name="password" size="20" autocomplete="off" class="form-control" placeholder="Password"/>
                </div>
                <input type="submit" value="Login" class="btn btn-primary btn-block mb-3"/>
                <a href="https://www.tigerstripemedia.com/portal/pwreset.php" class="text-muted">Forgot your Password?</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    

<?php
get_footer();