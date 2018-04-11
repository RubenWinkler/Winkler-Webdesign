<?php

function rw_setup_theme () {

  add_theme_support("post-thumbnails");

  add_theme_support("menus");

  register_nav_menu("primary", __("Hauptmenü", "winkler_webdesign"));
  register_nav_menu("secondary", __("Footermenü", "winkler_webdesign"));

}
