<?php /* Template Name: Über mich Template */ ?>

<?php get_header( "v2" ); ?>

<!-- KONTAKT -->

<?php

//Advanced Custom Fields
$ueberschrift_ueber_mich        =   get_field("ueberschrift_ueber_mich");
$name_ueber_mich                =   get_field("name_ueber_mich");
$udemy_url                      =   get_field("udemy_url");
$xing_url                       =   get_field("xing_url");
$linkedin_url                   =   get_field("linkedin_url");
$youtube_url                    =   get_field("youtube_url");
$facebook_url                   =   get_field("facebook_url");
$twitter_url                    =   get_field("twitter_url");
$einleitungstext_ueber_mich     =   get_field("einleitungstext_ueber_mich");
$haupttext_ueber_mich           =   get_field("haupttext_ueber_mich");

?>

<section id="über-mich">

  <div class="container spacer-md-top spacer-xl-bottom">
    <div class="row">
      <div class="col-xl-8 col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <?php if( !empty($ueberschrift_ueber_mich) ) : ?>
            <h2 id="über-mich-bereich-heading"><?php echo $ueberschrift_ueber_mich; ?> 
            <?php endif; ?>
            <?php if( !empty($name_ueber_mich) ) : ?>
            <span id="über-mich-bereich-name"><?php echo $name_ueber_mich; ?></span>
            <?php endif; ?>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?php if( !empty($udemy_url) ) : ?>
            <a href="<?php echo $udemy_url; ?>" class="social-badge udemy" target="_blank"><img class="udemy-logo" src="<?php echo get_template_directory_uri(); ?>/assets/src/img/udemy-logo.png" alt="Logo von Udemy"></a>
            <?php endif; ?>
            <?php if( !empty($youtube_url) ) : ?>
            <a href="<?php echo $youtube_url; ?>" class="social-badge youtube" target="_blank"><i class="fab fa-youtube"></i></a>
            <?php endif; ?>
            <?php if( !empty($facebook_url) ) : ?>
            <a href="<?php echo $facebook_url; ?>" class="social-badge facebook" target="_blank"><i class="fab fa-facebook"></i></a>
            <?php endif; ?>
            <?php if( !empty($twitter_url) ) : ?>
            <a href="<?php echo $twitter_url; ?>" class="social-badge twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>
            <?php if( !empty($xing_url) ) : ?>
            <a href="<?php echo $xing_url; ?>" class="social-badge xing" target="_blank"><i class="fab fa-xing"></i></a>
            <?php endif; ?>
            <?php if( !empty($linkedin_url) ) : ?>
            <a href="<?php echo $linkedin_url; ?>" class="social-badge linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
            <?php endif; ?>
          </div>
        </div>
        <?php if( !empty($einleitungstext_ueber_mich) ) : ?>
        <p id="über-mich-bereich-einleitung"><?php echo $einleitungstext_ueber_mich; ?></p>
        <?php endif; ?>
        <?php if( !empty($haupttext_ueber_mich) ) : ?>
        <p><?php echo $haupttext_ueber_mich; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
