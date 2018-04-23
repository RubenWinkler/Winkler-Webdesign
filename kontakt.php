<?php /* Template Name: Kontakt Template */ ?>

<?php get_header( "v2" ); ?>

<!-- KONTAKT -->

<?php

//Advanced Custom Fields
$ueberschrift_kontakt_seite       =       get_field("ueberschrift_kontakt_seite");
$einleitungstext_kontakt_seite    =       get_field("einleitungstext_kontakt_seite");

?>

<section class="text-zentriert">

  <div class="container spacer-md-top spacer-xl-bottom">
    <div class="row">
      <div class="col-12">
        <div class="introduction">
          <?php if( !empty($ueberschrift_kontakt_seite) ) : ?>
          <h1><?php echo $ueberschrift_kontakt_seite; ?></h1>
          <?php endif; ?>
          <?php if( !empty($einleitungstext_kontakt_seite) ) : ?>
          <p class="haupttext">
          <?php echo $einleitungstext_kontakt_seite; ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php echo do_shortcode( '[contact-form-7 id="292" title="Kontakt-Formular"]' ); ?>


    
  </div>

</section>

<?php get_footer(); ?>
