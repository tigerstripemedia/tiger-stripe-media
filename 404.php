<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tiger_Stripe_Media
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
  	<!--<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico">-->
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="error-full-page">
				<section class="error-page">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/404.svg"></img>
					<div class="container mt-5">
						<div class="row">
							<div class="col-lg-6 offset-lg-3">
								<a href="/contact" class="btn btn-primary btn-block">Contact Us</a>
								<a href="/" class="btn btn-secondary btn-block">Go to Home Page</a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>

