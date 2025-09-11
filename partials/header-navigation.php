<div class="sidebarclose" id="sidebarclose"></div>
<div class="header">
  <!-- Header logo from customizer -->
  <div class="header-logo">
    <?php
    $logo_image_url = get_theme_mod('logo_image', '');
    if (!empty($logo_image_url)) {
      echo '<a href="/"><img src="' . esc_url($logo_image_url) . '" alt="Logo"></a>';
    } else {
      echo '<a href="/"><img src="' . get_template_directory_uri() . '/images/ict-mannetje-logo.png" alt="Default Logo"></a>';
    }
    ?>
  </div>
  <!-- Tablet/Desktop navigation -->
  <div class="header-navigation">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'main-menu',
      'menu_class' => 'nav-menu',
    ));
    ?>
  </div>
  <!-- Sibar navigation -->
  <div class="sidebar" id='sidebar'>
    <?
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => 'nav',
      'container_class' => 'main-menu',
      'menu_class' => 'nav-menu',
    ));
    ?>
  </div>
  <button type="button" class="toggle" id="toggle">
    <span></span>
  </button>
</div>
