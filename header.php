<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Winkler Webdesign</title>

  <?php wp_head(); ?>

  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/src/js/fontawesome/fontawesome-all.js">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/src/img/fav/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

</head>

<body <?php body_class(); ?> >

<!-- NAVIGATION -->

<nav class="navbar navbar-light navbar-expand-md fixed-top bg-white" role="navigation" id="navigation">
    <a class="navbar-brand" id="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Logo-Navbar.png" width="45" height="45" class="align-top navbar-logo" alt="Logo von Winkler Webdesign">
      <span class="brand-name">Winkler Webdesign</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end bg-white" id="navbar">

      <?php

      if ( has_nav_menu("primary") ) {

        wp_nav_menu(array(
          "theme_location"    => "primary",
          "container"         => false,
          "menu_class"        => "navbar-nav",
          "fallback_cb"       => false,
          "depth"             => 0
        ));

      }

      ?>
    </div>
</nav>

<!-- HAUPTBEREICH -->

<main>

<!-- HEADERBILD -->

<header id="headerbild" data-type="background" data-speed="2.5">
  <div class="transparent-top-layer"></div>
  <div class="white-top-layer"></div>
  <div class="transparent-bottom-layer"></div>
  <div class="white-bottom-layer"></div>
</header>
