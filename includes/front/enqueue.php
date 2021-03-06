<?php

function rw_enqueue () {

  wp_register_style("rw_custom_styles", get_template_directory_uri() . "/assets/src/css/styles.css", array("rw_bootstrap_css"));
  wp_register_style("rw_bootstrap_css", get_template_directory_uri() . "/assets/src/bootstrap/css/bootstrap.min.css");
  wp_register_style("rw_google_fonts", "//fonts.googleapis.com/css?family=Raleway:400,600,700,900");

  wp_enqueue_style("rw_custom_styles");
  wp_enqueue_style("rw_bootstrap_css");
  wp_enqueue_style("rw_google_fonts");

  wp_register_script("rw_jquery", get_template_directory_uri() . "/assets/src/jquery/jquery.min.js", array(), false, true);
  wp_register_script("rw_popper", get_template_directory_uri() . "/assets/src/popper/popper.min.js", array("rw_jquery"), false, true);
  wp_register_script("rw_bootstrap_js", get_template_directory_uri() . "/assets/src/bootstrap/js/bootstrap.min.js", array("rw_jquery", "rw_popper"), false, true);
  wp_register_script("rw_main_js", get_template_directory_uri() . "/assets/src/js/main.js", array(), false, true);
  wp_register_script("rw_fontawesome_js", get_template_directory_uri() . "/assets/src/fontawesome/fontawesome-all.js");

  wp_enqueue_script("rw_jquery");
  wp_enqueue_script("rw_popper");
  wp_enqueue_script("rw_bootstrap_js");
  wp_enqueue_script("rw_main_js");
  wp_enqueue_script("rw_fontawesome_js");

}
