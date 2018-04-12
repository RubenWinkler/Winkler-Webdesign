<?php /* Template Name: 404 Template */ ?>

<?php get_header( "v2" ); ?>

<!-- BLOG -->

<section class="text-zentriert">
  <div class="container spacer-md-top">
    <div class="row">
      <div class="col-12">
        <div class="introduction">
          <h1>#FEHLER 404</h1>
          <p class="haupttext">
            Ooops... Die Seite wurde leider nicht gefunden, aber keine Sorge das kriegen wir wieder hin. Sollte dir keine der Optionen zusagen, kannst du natürlich auch einfach zur <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a> zurückkehren.<br>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
        <div class="container">
        <h2><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">#BLOG</a></h2>
        <div class="row">
            <div class="col-12 spacer-sm-top col-no-padding">
                <?php get_search_form(); ?>
            </div>
        </div>

        <?php

        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>4));
        
        if ( $wpb_all_query->have_posts() ) : ?>
        
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                
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

            <?php endwhile; ?>
            <!-- end of the loop -->
        
            <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
						

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

        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <div class="container">
            <h2><a href="<?php echo esc_url( home_url( '/kurse/' ) ); ?>">#KURSE</a></h2>


            </div>
        </div>

        

    </div>
  </div>

</section>

<?php get_footer(); ?>
