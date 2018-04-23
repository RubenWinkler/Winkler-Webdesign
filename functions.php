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

function new_excerpt_more($more) {
    global $post;
 return ' <a class="moretag" href="'. get_permalink($post->ID) . '">...weiterlesen</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wpdev_filter_login_head() {
 
    if ( has_custom_logo() ) :
 
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo esc_url( $image[0] ); ?>);
                -webkit-background-size: <?php echo absint( $image[1] )?>px;
                background-size: <?php echo absint( $image[1] ) ?>px;
                height: <?php echo absint( $image[2] ) ?>px;
                width: <?php echo absint( $image[1] ) ?>px;
            }
        </style>
        <?php
    endif;
}
 
add_action( 'login_head', 'wpdev_filter_login_head', 100 );

add_filter( 'wpcf7_autop_or_not', '__return_false' );
