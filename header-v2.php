<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset "); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fontawesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/src/js/fontawesome/fontawesome-all.js">

  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?> >

<!-- NAVIGATION -->

<nav class="navbar navbar-light navbar-expand-md fixed-top bg-white" role="navigation" id="navigation">
    <a class="navbar-brand" id="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/Logo-Navbar.png" width="45" height="45" class="align-top navbar-logo" alt="Logo von Winkler Webdesign">
      <span class="brand-name"><?php bloginfo("name"); ?></span></a>
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

<header id="headerbild2" data-type="background" data-speed="2.5">
  <div class="transparent-top-layer"></div>
  <div class="white-top-layer"></div>
  <div class="transparent-bottom-layer2"></div>
  <div class="white-bottom-layer2"></div>
</header>
