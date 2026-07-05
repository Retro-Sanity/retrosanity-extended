<?php

defined('ABSPATH') || exit;

define('RETROSANITY_VERSION', wp_get_theme()->get('Version'));

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('script', 'style', 'navigation-widgets'));

  register_nav_menus(array(
    'primary'   => __('Hoofd Menu', 'retrosanity'),
    'secondary' => __('Footer menu 1', 'retrosanity'),
    'tertiary'  => __('Footer menu 2', 'retrosanity'),
  ));
});

add_action('wp_enqueue_scripts', function () {
  $uri = get_template_directory_uri();

  wp_enqueue_style('retrosanity-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Kristi:wght@400&display=swap', array(), null);
  wp_enqueue_style('retrosanity-style', get_stylesheet_uri(), array(), RETROSANITY_VERSION);
  wp_enqueue_style('retrosanity-header', $uri . '/css/header.css', array(), RETROSANITY_VERSION);
  wp_enqueue_style('retrosanity-sidenav', $uri . '/css/sidenav.css', array(), RETROSANITY_VERSION);
  wp_enqueue_style('retrosanity-footer', $uri . '/css/footer.css', array(), RETROSANITY_VERSION);
  wp_enqueue_style('retrosanity-bottom', $uri . '/css/bottom.css', array(), RETROSANITY_VERSION);

  wp_enqueue_script('retrosanity-sidenav', $uri . '/javascript/sidenav.js', array(), RETROSANITY_VERSION, true);
});

// Preconnect for Google Fonts
add_filter('wp_resource_hints', function ($urls, $relation_type) {
  if ('preconnect' === $relation_type) {
    $urls[] = 'https://fonts.googleapis.com';
    $urls[] = array('href' => 'https://fonts.gstatic.com', 'crossorigin');
  }
  return $urls;
}, 10, 2);

require get_template_directory() . '/php/customizer.php';
require get_template_directory() . '/php/global.php';
