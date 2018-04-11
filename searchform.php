<?php $unique_id = esc_attr( uniqid("search-form-")); ?>

<form method="get" action="<?php echo esc_url(home_url("/")); ?>" role="form" class="search-form">
    <label for="sidebar-search" class="sr-only">Search the blog</label>
    <input type="search" class="form-control sidebar-search" id="<?php echo $unique_id; ?>" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e("Im Blog suchen...", "winkler_webdesign"); ?>">
</form>