<?php /* Template Name: Suche Template */ ?>

<?php get_header( "v2" ); ?>

<!-- BLOG -->

<section class="text-zentriert">
  <div class="container spacer-md-top">
    <div class="row">
      <div class="col-12">
        <div class="introduction">
          <h1>#BLOG DURCHSUCHEN:</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-md-8 col-sm-12 col-xs-12">
        <div class="container">

            <?php

            if (have_posts()) {
            while(have_posts()) {
            the_post();

            ?>
            <div class="row spacer-sm-both">
                <div class="col-xs-12">

                    <article class="blogpost-teaser">
                        <header>
                            <h3 class="blogpost-teaser-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="blogpost-teaser-meta">
                                <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author(); ?></a>
                                <i class="far fa-calendar-alt"></i> <time><?php echo get_the_date("d. F Y"); ?></time>
                                <i class="fa fa-folder"></i> <?php the_category(", "); ?>
                                <i class="fa fa-tags"></i> <?php the_tags(); ?>
                            </div>
                        </header>

                        <?php
                        if (has_post_thumbnail()) {
                        ?>

                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail("full", array("class" => "blog-thumbnail")); ?>
                        </a>

                        <?php
                        }
                        ?>
                        <div class="blogpost-teaser-text">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                </div>
            </div>

            <?php

                }
            }

            ?>

            <?php if( get_previous_posts_link() ) {
            ?>
            <span class="newer-blog-posts">
                <?php previous_posts_link('<i class="fas fa-long-arrow-alt-left"></i> Neuere Blog-Posts'); ?>
            </span>
            <?php
            }
            ?>
            <?php if( get_next_posts_link() ) {
            ?>
            <span class="older-blog-posts">
                <?php next_posts_link('Ältere Blog-Posts <i class="fas fa-long-arrow-alt-right"></i>'); ?>
            </span>
            <?php
            }
            ?>


        </div>
      </div>

        <?php get_sidebar(); ?>

    </div>
  </div>

</section>

<?php get_footer(); ?>
