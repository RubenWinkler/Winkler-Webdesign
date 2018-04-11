</main>

<!-- FOOTER -->

<footer class="footer">

  <div class="container">
    <div class="row">
      <div class="col-4">
        <span>&copy; 2017, Winkler Webdesign</span>
      </div>
      <nav class="col-8">
        <?php

        if ( has_nav_menu("secondary") ) {

          wp_nav_menu(array(
            "theme_location"    => "secondary",
            "container"         => false,
            "menu_class"        => false,
            "fallback_cb"       => false,
            "depth"             => 0
          ));

        }

        ?>
      </nav>
    </div>
  </div>

  <?php wp_footer(); ?>

</footer>

</body>

</html>
