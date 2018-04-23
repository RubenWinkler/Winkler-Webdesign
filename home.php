<?php /* Template Name: Blog Template */ ?>

<?php get_header( "v2" ); ?>

<!-- BLOG -->

<section class="text-zentriert">
  <div class="container spacer-md-top">
    <div class="row">
      <div class="col-12">
        <div class="introduction">
          <h1>#BLOG</h1>
          <p class="haupttext">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
              magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
              gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
          </p>
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
                            <h2 class="blogpost-teaser-title"><a href="<?php the_permalink(); ?>">#<?php the_title(); ?></a></h2>
                            <div class="blogpost-teaser-meta">
                                <i class="far fa-calendar-alt"></i> <span><time><?php echo get_the_date("d. F Y"); ?></time></span>
                                <i class="fa fa-folder"></i> <span><?php the_category(", "); ?></span>
                                <i class="fa fa-tags"></i> <span><?php the_tags(); ?></span>
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
            } else {

            ?>

            <p>Aktuell gibt es leider noch keine Beiträge.</p>

            <?php
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
