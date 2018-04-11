<?php

// === Setup ===

// === Includes ===

include (get_template_directory() . "/includes/front/enqueue.php");
include (get_template_directory() . "/includes/setup.php");
include (get_template_directory() . "/includes/filters/primary_menu_classes.php");
include (get_template_directory() . "/includes/widgets.php");

// === Hooks ===

add_action ("wp_enqueue_scripts", "rw_enqueue");
add_action ("after_setup_theme", "rw_setup_theme");
add_action ("widgets_init", "rw_widgets");
add_filter( 'nav_menu_css_class', 'primary_menu_classes', 10, 4 );

// === Shortcodes ===

// === Filters ===

function rw_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'rw_move_comment_field_to_bottom' );
