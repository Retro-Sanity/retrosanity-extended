<div class="footer">
  <div class="footer-container">
    <div class="footer-col">
      <h6 class="footer-about">
        Maak het simpel. <br> Maak het goed.
      </h6>
      <div class="footer-signature">
        ICT-mannetje
      </div>
    </div>
    <div class="footer-col">
      <div class="footer-navigation">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'secondary',
          'container' => 'nav',
          'container_class' => 'footer-menu',
          'menu_class' => 'nav-menu',
        ));
        ?>
      </div>
    </div>
    <div class="footer-col">
      <div class="footer-navigation">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'tertiary',
          'container' => 'nav',
          'container_class' => 'footer-menu',
          'menu_class' => 'nav-menu',
        ));
        ?>
      </div>
    </div>
    <div class="footer-col">
      <a class="footer-social" href="https://wa.me/31629875259"><img src="<?php echo get_template_directory_uri() . '/images/whatsapp.svg' ?>" alt="Default Logo"></a>
      <a class="footer-social" href="https://www.instagram.com/ictmannetje/"><img src="<?php echo get_template_directory_uri() . '/images/instagram.svg' ?>" alt="Default Logo"></a>
    </div>
  </div>
</div>
