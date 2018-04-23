<?php /* Template Name: Kurse Template */ ?>

<?php get_header( "v2" ); ?>

<!-- KURSE -->

<?php

//Advanced Custom Fields
$ueberschrift_kurse_seite         =   get_field("ueberschrift_kurse_seite");
$einleitungstext_kurse_seite      =   get_field("einleitungstext_kurse_seite");

?>

<section class="text-zentriert">

  <div class="container spacer-md-top spacer-xl-bottom">
    <div class="row">
      <div class="col-12">
        <div class="introduction">
          <?php if( !empty($ueberschrift_kurse_seite) ) : ?>
          <h1><?php echo $ueberschrift_kurse_seite; ?></h1>
          <?php endif; ?>
          <?php if( !empty($einleitungstext_kurse_seite) ) : ?>
          <p class="haupttext"><?php echo $einleitungstext_kurse_seite; ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">

      <?php

      $loop = new WP_Query( array("post_type" => "kurse", "orderby" => "post_id", "order" => "ASC") );

      while ( $loop->have_posts() ) : $loop->the_post();

      //Advanced Custom Fields
      $kurstitel        =   get_field("kurstitel");
      $kursuntertitel   =   get_field("kursuntertitel");
      $kursbild         =   get_field("kursbild");
      $teasertext       =   get_field("teasertext");

      ?>

      <article class="col-12 col-md-6 col-lg-6">
        <div class="course-teaser">
          <?php if ( !empty($kurstitel) ): ?>
          <h2><a href="<?php the_permalink(); ?>"><?php echo $kurstitel; ?></a></h2>
          <?php endif; ?>
          <?php if ( !empty($kursbild) ): ?>
          <a href="<?php the_permalink(); ?>">
            <div class="thumbnail-container">
              <img src="<?php echo $kursbild ?>" alt="Kurs-Thumbnail" class="course-teaser-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/PSD/sale_overlay.png" alt="Kurs-Thumbnail" class="sale-overlay">
            </div>
          </a>
          <?php endif; ?>
          <div class="price"><span class="sale-price">9,99€</span> statt 199,99€</div>
          <?php if ( !empty($kursuntertitel) ): ?>
          <h3><?php echo $kursuntertitel; ?></h3>
          <?php endif; ?>
          <a href="<?php the_permalink(); ?>" class="btn-typ-3">Kurs ansehen</a>
        </div>
      </article>

      <?php endwhile; ?>

    </div>
  </div>

</section>

<?php get_footer(); ?>
