<?php
include 'partials/head.php';
include 'partials/header-navigation.php';
?>

<body <?php body_class(); ?>>
  <div id="container">
    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <main id="main" class="site-main">
          <!-- Elementor content -->
          <?php
          while (have_posts()) :
            the_post();
            the_content();
          endwhile;
          ?>
        </main>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

<?php
include 'partials/footer.php';
include 'partials/bottom.php';
?>
