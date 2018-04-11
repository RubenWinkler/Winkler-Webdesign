<?php /* Template Name: Kontakt Template */ ?>

<?php get_header( "v2" ); ?>

<!-- KONTAKT -->

<section class="text-zentriert">

  <div class="container spacer-md-top spacer-xl-bottom">
    <div class="row">
      <div class="col-12">
        <div class="introduction">
          <h1>#KONTAKT</h1>
          <p class="haupttext">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
          magna aliquyam erat, sed diam voluptua.
          </p>
        </div>
      </div>
    </div>
    <form action="" method="">
      <div class="row">
        <div class="col-6">
          <input type="text" name="vorname" placeholder="Vorname" class="input-on-light" required>
        </div>
        <div class="col-6">
          <input type="text" name="nachname" placeholder="Nachname" class="input-on-light" required>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="text" name="email" placeholder="E-Mail Adresse" class="input-on-light" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <textarea rows="10" cols="1" name="nachricht" placeholder="Deine Nachricht" class="textarea-on-light" required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <button type="submit" name="absenden" class="btn-typ-2">Senden</button>
        </div>
      </div>
    </form>
  </div>

</section>

<?php get_footer(); ?>
