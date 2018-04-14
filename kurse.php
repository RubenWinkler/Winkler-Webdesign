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
      <article class="col-12 col-md-6 col-lg-6">
        <div class="course-teaser">
          <h2>Der ultimative HTML- und CSS-Kurs</h2>
          <h3>Lerne wirklich alles zum Thema HTML und CSS mit 100% Praxis und 100% Theorie</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/atom.jpg" alt="Das Logo von Atom.io" class="course-teaser-img">
          <p>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
          magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
          gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
          </p>
          <button href="https://www.winkler-webdesign.com/" type="button" class="btn-typ-3">Mehr erfahren...</button>
        </div>
      </article>
      <article class="col-12 col-md-6 col-lg-6">
        <div class="course-teaser">
          <h2>Der ultimative JavaScript-Kurs</h2>
          <h3>Lerne wirklich alles zum Thema JavaScript mit 100% Praxis und 100% Theorie</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/src/img/github.jpg" alt="Das Logo von Atom.io" class="course-teaser-img">
          <p>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
          magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
          gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
          </p>
          <button href="https://www.winkler-webdesign.com/" type="button" class="btn-typ-3">Mehr erfahren...</button>
        </div>
      </article>
    </div>
  </div>

</section>

<?php get_footer(); ?>
