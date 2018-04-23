<?php /* Template Name: Kurs Template */ ?>

<?php get_header( "v2" ); ?>

<!-- KURSE -->

<?php

$id = get_the_ID();

//Advanced Custom Fields
$kurstitel          =   get_field("kurstitel");
$kursuntertitel     =   get_field("kursuntertitel");
$kursbild           =   get_field("kursbild");
$teasertext         =   get_field("teasertext");
$kursbeschreibung   =   get_field("kursbeschreibung");
$playlist           =   get_field("playlist");
$angebotspreis      =   get_field("angebotspreis");
$standardpreis      =   get_field("standardpreis");
$gutscheincode      =   get_field("gutscheincode");
$gutscheincode_url  =   get_field("gutscheincode_url");
$kurslevel          =   get_field("kurslevel");
$videozahl          =   get_field("videozahl");
$kurslaenge         =   get_field("kurslaenge");
$teilnehmerzahl     =   get_field("teilnehmerzahl");
$bewertung          =   get_field("bewertung");
$anforderungen      =   get_field("anforderungen");
$lernziele          =   get_field("lernziele");
$zielgruppe         =   get_field("zielgruppe");

?>

<section>

  <div class="container spacer-md-top spacer-xl-bottom">
    <div class="row">
      <div class="col-12 text-zentriert">
        <div class="introduction">
          <?php if ( !empty($kurstitel) ): ?>
          <h1><?php echo $kurstitel; ?></h1>
          <?php endif; ?>
          <?php if ( !empty($kursuntertitel) ): ?>
          <h2><?php echo $kursuntertitel; ?></h2>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <?php if ( !empty($playlist) ): ?>
        <div class="course-video-container spacer-sm-bottom">
          <div class="course-video">
            <iframe src="<?php echo $playlist; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
        <?php endif; ?>
        <div class="course-description">
        <h2>Kursbeschreibung</h2>
        <?php if ( !empty($kursbeschreibung) ): ?>
        <?php echo $kursbeschreibung; ?>
        <?php endif; ?>
        </div>
      </div>
      <aside class="col-lg-4 col-md-12" id="course-sidebar">
        
        <article class="offer-area hidden-md">
          <h2>Aktuelles Angebot</h2>
          <div class="current-offer-text">
            <div>
              <?php if ( !empty($angebotspreis) ): ?>
              <span><?php echo $angebotspreis; ?></span>
              <?php endif; ?>
              <?php if ( !empty($standardpreis) ): ?>
              statt <?php echo $standardpreis; ?>
              <?php endif; ?>
            </div>
            <br> mit dem Gutscheincode:
          </div>
          <?php if ( !empty($gutscheincode_url) && !empty($gutscheincode) ): ?>
          <a href="<?php echo $gutscheincode_url; ?>" class="btn-typ-3 voucher-code-btn" target="_blank">"<?php echo $gutscheincode; ?>"</a>
          <?php endif; ?>
          <div class="subtext">Hinweis: Der Kurs wird über Udemy.com bereitgestellt. Der Gutschein-Code gilt ausschließlich auf Udemy.com.</div>
        </article>
        <article>
          <h2>Kursinformationen</h2>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-angle-double-up"></i>
            </span>
            <?php if ( !empty($kurslevel) ): ?>
            <?php echo $kurslevel; ?>
            <?php endif; ?>
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-video"></i>
            </span>
            <?php if ( !empty($videozahl) ): ?>
            <?php echo $videozahl; ?>
            <?php endif; ?> Video-Lektionen
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-clock"></i>
            </span>
            <?php if ( !empty($kurslaenge) ): ?>
            <?php echo $kurslaenge; ?>
            <?php endif; ?> Videomaterial
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-users"></i>
            </span>
            <?php if ( !empty($teilnehmerzahl) ): ?>
            <?php echo $teilnehmerzahl; ?>
            <?php endif; ?> Studenten
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-star"></i>
            </span>
            <?php if ( !empty($bewertung) ): ?>
            <?php echo $bewertung; ?>
            <?php endif; ?> Sternen
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-certificate"></i>
            </span>
            Abschlusszertifikat
          </div>
        </article>
        
        <article>
          <h2>Anforderungen</h2>
          <ul>
          <?php if ( !empty($anforderungen) ): ?>
          <?php echo $anforderungen; ?>
          <?php endif; ?>
          </ul>
        </article>

        <article>
          <h2>Lernziele</h2>
          <ul>
          <?php if ( !empty($lernziele) ): ?>
          <?php echo $lernziele; ?>
          <?php endif; ?>
          </ul>
        </article>

        <article>
          <h2>Zielgruppe</h2>
          <ul>
          <?php if ( !empty($zielgruppe) ): ?>
          <?php echo $zielgruppe; ?>
          <?php endif; ?>
          </ul>
        </article>

        <article class="offer-area hidden-lg">
        <h2>Aktuelles Angebot</h2>
          <div class="current-offer-text">
            <div>
              <?php if ( !empty($angebotspreis) ): ?>
              <span><?php echo $angebotspreis; ?></span>
              <?php endif; ?>
              <?php if ( !empty($standardpreis) ): ?>
              statt <?php echo $standardpreis; ?>
              <?php endif; ?>
            </div>
            <br> mit dem Gutscheincode:
          </div>
          <?php if ( !empty($gutscheincode_url) && !empty($gutscheincode) ): ?>
          <a href="<?php echo $gutscheincode_url; ?>" class="btn-typ-3 voucher-code-btn">"<?php echo $gutscheincode; ?>"</a>
          <?php endif; ?>
          <div class="subtext">Hinweis: Der Kurs wird über Udemy.com bereitgestellt. Der Gutschein-Code gilt ausschließlich auf Udemy.com.</div>
        </article>

      </aside>
    </div>
  </div>

</section>

<?php get_footer(); ?>
