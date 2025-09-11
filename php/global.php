<?php

//WordPress automatically out of fullscreen page editing
if (is_admin()) {
  function jba_disable_editor_fullscreen_by_default()
  {
  $script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
  wp_add_inline_script('wp-blocks', $script);
  }
  add_action('enqueue_block_editor_assets', 'jba_disable_editor_fullscreen_by_default');
}

// Register nav menu's
add_action('after_setup_theme', function() {
  register_nav_menu('primary', __('Hoofd Menu', 'retrosanity'));
});

add_action('after_setup_theme', function () {
  register_nav_menu('secondary', __('Footer menu 1', 'retrosanity'));
});

add_action('after_setup_theme', function () {
  register_nav_menu('tertiary', __('Footer menu 2', 'retrosanity'));
});
