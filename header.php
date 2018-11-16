<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

<body id="body" <?php body_class(); ?>>
  
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tiger-stripe-media' ); ?></a>
	
	 <header>
    	<!-- Top Navbar -->
    	<!--<nav id="top-nav" class="navbar navbar-expand-lg navbar-dark bg-light">-->
     <!--   <div class="container">-->
     <!--     <ul class="navbar-nav ml-auto">-->
     <!--     	<li class="nav-item">-->
     <!--         <a class="nav-link" href="#">Register <i class="fas fa-user-circle"></i></a>-->
     <!--       </li>-->
     <!--     </ul>-->
     <!--   </div>-->
     <!-- </nav>-->

	    <!-- Main Navbar -->
      <nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.svg" alt="Tiger Stripe Media">
          </a>
          <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="nav-toggle fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            	<?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
            		) );
              	?>
              	<!--<li class="nav-item">-->-->
               <!--   <a class="nav-link" href="#">Register <i class="fas fa-user-circle"></i></a>-->
               <!-- </li>-->
            </ul>
          </div>
        </div>
      </nav>
    </header>

