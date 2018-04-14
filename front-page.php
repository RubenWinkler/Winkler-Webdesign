<?php /* Template Name: Startseite Template */ ?>

<?php get_header(); ?>

<!-- HERO-BEREICH -->

<?php

//Advanced Custom Fields
$logo               =       get_field("logo");
$slogan             =       get_field("slogan");
$sub_slogan         =       get_field("sub_slogan");
$button_text        =       get_field("button_text");
$button_url         =       get_field("button_url");

?>

<section>
    <div class="container spacer-sm-top spacer-xl-bottom">
        <div class="row">
            <div class="col-12 text-zentriert">
                <?php if( !empty($logo) ) : ?>
                <img src="<?php echo $logo; ?>" id="logo-icon">
                <?php endif; ?>
                <?php if( !empty($slogan) ) : ?>
                <h2><?php echo $slogan; ?></h2>
                <?php endif; ?>
                <?php if( !empty($sub_slogan) ) : ?>
                <p class="haupttext">
                    <?php echo $sub_slogan; ?>
                </p>
                <?php endif; ?>
                <?php if( !empty($button_text) && !empty($button_url) ) : ?>
                <a href="<?php echo $button_url; ?>" class="btn-typ-1"><?php echo $button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- KURS-PHILOSOPHIE -->

<?php

//Advanced Custom Fields
$ueberschrift_feature_bereich       =       get_field("ueberschrift_feature_bereich");
$einleitungstext_feature_bereich    =       get_field("einleitungstext_feature_bereich");
$ueberschrift_feature_1             =       get_field("ueberschrift_feature_1");
$text_feature_1                     =       get_field("text_feature_1");
$ueberschrift_feature_2             =       get_field("ueberschrift_feature_2");
$text_feature_2                     =       get_field("text_feature_2");
$ueberschrift_feature_3             =       get_field("ueberschrift_feature_3");
$text_feature_3                     =       get_field("text_feature_3");

?>

<section>
    <div class="container spacer-xl-both">
        <div class="row">
            <div class="col-12 text-zentriert">
                <?php if( !empty($ueberschrift_feature_bereich) ) : ?>
                <h2><?php echo $ueberschrift_feature_bereich; ?></h2>
                <?php endif; ?>
                <?php if( !empty($einleitungstext_feature_bereich) ) : ?>
                <p class="haupttext"><?php echo $einleitungstext_feature_bereich; ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-12 service text-zentriert">
                <div class="kreis">
                    <div class="sprite sprite-education"></div>
                </div>
                <?php if( !empty($ueberschrift_feature_1) ) : ?>
                <h4><?php echo $ueberschrift_feature_1; ?></h4>
                <?php endif; ?>
                <?php if( !empty($text_feature_1) ) : ?>
                <p><?php echo $text_feature_1; ?></p>
                <?php endif; ?>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 service text-zentriert">
                <div class="kreis">
                    <div class="sprite sprite-code"></div>
                </div>
                <?php if( !empty($ueberschrift_feature_2) ) : ?>
                <h4><?php echo $ueberschrift_feature_2; ?></h4>
                <?php endif; ?>
                <?php if( !empty($text_feature_2) ) : ?>
                <p><?php echo $text_feature_2; ?></p>
                <?php endif; ?>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 service text-zentriert">
                <div class="kreis">
                    <div class="sprite sprite-bubbles"></div>
                </div>
                <?php if( !empty($ueberschrift_feature_3) ) : ?>
                <h4><?php echo $ueberschrift_feature_3; ?></h4>
                <?php endif; ?>
                <?php if( !empty($text_feature_3) ) : ?>
                <p><?php echo $text_feature_3; ?></p>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>

<!-- VIDEO-BEREICH -->

<?php

//Advanced Custom Fields
$ueberschrift_video_bereich       =       get_field("ueberschrift_video_bereich");
$einleitungstext_video_bereich    =       get_field("einleitungstext_video_bereich");
$url_video_bereich                =       get_field("url_video_bereich");

?>

<section>

    <div class="container spacer-xl-both">
        <div class="row">
            <div class="col-12 text-zentriert">
                <?php if( !empty($ueberschrift_video_bereich) ) : ?>
                <h2><?php echo $ueberschrift_video_bereich; ?></h2>
                <?php endif; ?>
                <?php if( !empty($einleitungstext_video_bereich) ) : ?>
                <p class="haupttext"><?php echo $einleitungstext_video_bereich; ?></p>
                <?php endif; ?>
                <?php if( !empty($url_video_bereich) ) : ?>
                <div class="responsive-video-container">
                    <div class="responsive-video">
                        <iframe id="promo-video" src="<?php echo $url_video_bereich; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</section>

<!-- ZITAT-BEREICH -->

<?php

//Advanced Custom Fields
$zitat  =   get_field("zitat");

?>

<section id="zitat-bereich">
    <div class="transparent-top-layer2"></div>
    <div class="white-top-layer2"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-zentriert">
                <?php if( !empty($zitat) ) : ?>
                <h4 id="zitat"><?php echo $zitat; ?></h4>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="transparent-bottom-layer2"></div>
    <div class="white-bottom-layer2"></div>
</section>

<!-- ÜBER-MICH-BEREICH -->

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

<section id="über-mich-bereich">

    <div class="container spacer-xl-both">
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
