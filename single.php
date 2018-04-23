<?php /* Template Name: Blog-Post Template */ ?>

<?php get_header( "v2" ); ?>

    <!-- BLOG -->

    <section id="blogpost">

        <?php

        if (have_posts()) {
            while(have_posts()) {
                the_post();

        ?>

        <div class="container spacer-md-top text-zentriert">
            <div class="row">
                <div class="col-12">
                    <h1><?php the_title(); ?></h1>
                    <div class="blogpost-meta">
                        <i class="fa fa-user"></i> <span><a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author(); ?></a></span>
                        <i class="far fa-calendar-alt"></i> <span><time><?php echo get_the_date("d. F Y"); ?></time></span>
                        <i class="fa fa-folder"></i> <span><?php the_category(", "); ?></span>
                        <i class="fa fa-tags"></i> <span><?php the_tags(); ?></span>
                    </div>
                    <?php the_post_thumbnail("full", array("class" => "blog-thumbnail")); ?>
                    <div class="blog-text">
                        <?php

                        the_content();
                        wp_link_pages(array(
                                "before"    =>  "<p class=\"text-center\">" . __("Seiten", "winkler_webdesign"),
                                "after"     =>  "</p>"
                        ));

                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php

            }
        }

        ?>

    </section>


    <?php

    if (comments_open() || get_comments_number()) {
        comments_template();
    }

    ?>



<?php get_footer(); ?>