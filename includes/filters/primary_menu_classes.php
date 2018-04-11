<?php

function primary_menu_classes( $classes, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
      $classes[] = 'nav-link';
    }

    return $classes;
}
