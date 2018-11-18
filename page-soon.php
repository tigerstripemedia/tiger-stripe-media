<?php

/*
    Template Name: Coming Soon Page
*/ 

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<meta name="description" content="">
  	<meta name="author" content="">
  	<!--<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico">-->
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Roboto Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<?php wp_head(); ?>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="body" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tiger-stripe-media' ); ?></a>
	
	<section id="coming-soon-page">
      <div class="container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.svg" alt="">
        <br>
        <h1>Coming Soon!</h1>
        <br>
        <h5>Very soon you will be able to purchase domains and web hosting from the Tiger Stripe Media website. I am very excited about this and can't wait to launch it. If you would like to receive an email when this feature is launched enter your email below.</h5>
        <br>
        <h5>Hayden Ingham</h5>
        <h6>Owner - Tiger Stripe Media</h6>
        <br>
        <div class="row">
          <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
            <?php echo do_shortcode('[contact-form-7 id="136" title="Coming Soon Hosting and Domains" html_class="form-inline custom-form"]'); ?>
            <br>
            <h5>Where Next?</h5>
            <br>
            <a class="btn btn-primary btn-load-right btn-block" href="/"><i class="fa fa-home"></i> Head Home</a>
          </div>
        </div>
      </div>
    </section>
    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="<?php bloginfo('template_directory'); ?>/<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

</body>
</html>