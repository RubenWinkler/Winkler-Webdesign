<?php /* Template Name: Kurs Template */ ?>

<?php get_header( "v2" ); ?>

<!-- KURSE -->

<section>

        <?php

        $id = get_the_ID();

        //Advanced Custom Fields
        $kurstitel        =   get_field("kurstitel");
        $kursuntertitel   =   get_field("kursuntertitel");
        $kursbild         =   get_field("kursbild");
        $teasertext       =   get_field("teasertext");
        $kursbeschreibung       =   get_field("kursbeschreibung");

        ?>

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
        <div class="course-video-container spacer-sm-bottom">
          <div class="course-video">
            <iframe src="https://www.youtube.com/embed/9PJ7r9tjS_s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
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
          <div class="current-offer-text"><div><span>9,99€</span> statt 199,99€</div><br> mit dem Gutscheincode:</div>
          <a href="" class="btn-typ-3 voucher-code-btn">"WEBDESIGN"</a>
          <div class="subtext">Hinweis: Der Kurs wird über Udemy.com bereitgestellt. Der Gutschein-Code gilt ausschließlich auf Udemy.com.</div>
        </article>
        <article>
          <h2>Kursinformationen</h2>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-angle-double-up"></i>
            </span>
            alle Level
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-video"></i>
            </span>
            193 Video-Lektionen
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-clock"></i>
            </span>
            32h+ Videomaterial
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-users"></i>
            </span>
            400+ Studenten
          </div>
          <div class="course-feature">
            <span class="feature-icon">
              <i class="fas fa-star"></i>
            </span>
            4,9/5 Sternen
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
            <li>Ein PC oder Laptop (Windows, Mac oder Linux)</li>
            <li>Alle notwendigen Tools sind zu 100% kostenlos und werden im Laufe des Kurses installiert</li>
            <li>Es sind keine Programmier-Kenntnisse notwendig</li>
            <li>Es sind keine Englisch-Kenntnisse notwendig</li>
            <li>Lernbegeisterung und Neugier sind alles was du für diesen Kurs brauchst</li>
          </ul>
        </article>

        <article>
          <h2>Lernziele</h2>
          <ul>
            <li>Lerne alles zum Thema HTML5 und CSS3 in Theorie und Praxis</li>
            <li>Setze ein aufwändiges und umfangreiches Praxis-Projekt um</li>
            <li>Lerne responsive und mobile-first Webdesign</li>
            <li>Baue ein eigenes Grid-System für responsive Layouts</li>
            <li>Plane strukturierte Webprojekte, wie in der Praxis</li>
            <li>Starte deine Karriere als Webdesigner oder Webentwickler</li>
          </ul>
        </article>

        <article>
          <h2>Zielgruppe</h2>
          <ul>
            <li>Alle, die einen detaillierten und ausführlichen Kurs zum Thema HTML und CSS suchen</li>
            <li>Alle, die für Beruf, Praktikum oder Studium HTML und CSS lernen wollen</li>
            <li>Alle, die ihr Wissen über HTML und CSS auffrischen oder verbessern wollen</li>
            <li>Alle, die Webdesigner oder Webentwickler werden wollen</li>
            <li>Alle, die mit einer weiteren Qualifikation im Lebenslauf glänzen möchten</li>
          </ul>
        </article>

        <article class="offer-area hidden-lg">
          <h2>Aktuelles Angebot</h2>
          <div class="current-offer-text"><div><span>9,99€</span> statt 199,99€</div><br> mit dem Gutscheincode:</div>
          <a href="" class="btn-typ-3 voucher-code-btn">"WEBDESIGN"</a>
          <div class="subtext">Hinweis: Der Kurs wird über Udemy.com bereitgestellt. Der Gutschein-Code gilt ausschließlich auf Udemy.com.</div>
        </article>

      </aside>
    </div>
  </div>

</section>

<?php get_footer(); ?>
