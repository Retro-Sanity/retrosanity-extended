<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?><?php wp_title('&mdash;'); ?></title>
  <?php wp_head(); ?>

  <!-- Main stylesheet -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/header.css' ?>" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/sidenav.css' ?>" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/footer.css' ?>" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/bottom.css' ?>" />

  <!-- Custom JS -->
  <?php
  wp_enqueue_script(
    'sidenav',
    get_template_directory_uri() . '/javascript/sidenav.js',
    array('jquery', 'customize-preview'),
    '',
    true
  );

  ?>

  <!-- Google font load -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Kristi:wght@400&display=swap" rel="stylesheet">

</head>
