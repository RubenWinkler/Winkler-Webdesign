<?php

function rw_widgets() {
    register_sidebar(array(
        "name"          => __("Blog Sidebar", "winkler_webdesign"),
        "id"            => "rw_blog_sidebar",
        "description"   => __("Sidebar für den Blog", "winkler_webdesign"),
        "before_widget" => '<div id="%1$s" class="widget %1$s"',
        "after_widget"  => '</div>',
        "before_title"  => '<h4>',
        "after_title"   => '</h4>'
    ));
}