<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aguiatravel_starter_theme
 */




?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo('name')?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_directory);?>/assets/bootstrap/css/bootstrap.css">
    <!--Custom Css-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_directory);?>/assets/css/styles/custom.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>
  <div class="container logo-main-container">
    <div class="col-sm-3 logo-main-container__logo-wrapper">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aguia_logo.png" alt="" />
      </a>
      <!-- <p class="">
        <?php bloginfo('description');?>
      </p> -->

      <div class="clearfix"></div>
    </div>

    <div class="col-sm-9">
      <div class="col-sm-6 text-center">
          <img class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/iata.png" width="75" height="50" alt="" />
      </div>
      <div class="col-sm-6 text-center">
          <p>
            Find our professional who can help
          </p>
          <h2>0900 666 2145</h2>
      </div>
    </div>
  </div>

<nav class="navbar navbar-inverse top_navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <div id="navbar" class="collapse navbar-collapse">
      <?php
          wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary',
              'depth'             => 3,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'Yamm_Nav_Walker_menu_fallback',
              'walker'            => new Yamm_Nav_Walker())
          );
      ?>
    </div><!--/.nav-collapse-->
    </div>
</nav>

<div class="container-fluid wrapperAll">
