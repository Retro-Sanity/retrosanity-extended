<?php

add_action('customize_preview_init', function () {
  wp_enqueue_script(
    'cd_customizer',
    get_template_directory_uri() . '/javascript/customizer.js',
    array('jquery', 'customize-preview'),
    '',
    true
  );
});

// Register heading menu 

add_action('customize_register', 'cd_customizer_settings');
function cd_customizer_settings($wp_customize)
{

  // Global settings init

  $wp_customize->add_section('cd_colors', array(
    'title'      => 'Retrosanity - Heading',
    'priority'   => 30,
  ));

  // Body bg color setting 

  $wp_customize->add_setting('background_color', array(
    'default'     => '#fff',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_color', array(
    'label'        => 'Heading Background Color',
    'section'    => 'cd_colors',
    'settings'   => 'background_color',
  )));

  // Navigation text color 

  $wp_customize->add_setting('text_color', array(
    'default'     => '#000',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'text_color', array(
    'label'        => 'Navigation Text Color',
    'section'    => 'cd_colors',
    'settings'   => 'text_color',
  )));

  // Navigation underline hover color

  $wp_customize->add_setting('hover_color', array(
    'default'     => '#1E123A',
    'transport'   => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hover_color', array(
    'label'        => 'Navigation underline hover Color',
    'section'    => 'cd_colors',
    'settings'   => 'hover_color',
  )));

  // Site logo/left header image
  $wp_customize->add_setting('logo_image', array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
    'label' => __('Logo Image'),
    'section' => 'cd_colors',
    'settings' => 'logo_image',
  )));
}

// Css styling that can be dynamically changed 
add_action('wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
  ?>
  <style type="text/css">
    .header {
      background: <?php echo get_theme_mod('background_color', '#43C6E4'); ?>;
    }

    .nav-menu>li>a {
      color: <?php echo get_theme_mod('text_color', '#43C6E4'); ?>;
    }

    .toggle span,
    .toggle span:before,
    .toggle span:after {
      background: <?php echo get_theme_mod('text_color', '#43C6E4'); ?>;
    }

    .nav-menu>li>a::after {
      background: <?php echo get_theme_mod('hover_color', '#43C6E4'); ?>;
    }
  </style>
  <?php
}