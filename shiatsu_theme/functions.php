<?php
 function my_styles_method() {
    // Register the style like this for a theme:
    wp_register_style( 'style', get_template_directory_uri().'/style.css');
    wp_register_style( 'styles_home', get_template_directory_uri().'/css/styles_home.css');
    wp_register_style( 'styles_methoden', get_template_directory_uri().'/css/styles_methoden.css');
    wp_register_style( 'styles_portrait', get_template_directory_uri().'/css/styles_portrait.css');
    wp_register_style( 'styles_kosten', get_template_directory_uri().'/css/styles_kosten.css');
    wp_register_style( 'styles_praxis', get_template_directory_uri().'/css/styles_praxis.css');
    wp_register_style( 'styles_kontakt', get_template_directory_uri().'/css/styles_kontakt.css');
    wp_register_style( 'styles_submet', get_template_directory_uri().'/css/styles_submet.css');


    // enqueue the style
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'styles_home' );
    wp_enqueue_style( 'styles_methoden' );
    wp_enqueue_style( 'styles_portrait' );
    wp_enqueue_style( 'styles_kosten' );
    wp_enqueue_style( 'styles_praxis' );
    wp_enqueue_style( 'styles_kontakt' );
    wp_enqueue_style( 'styles_submet' );
  }
  add_action( 'wp_enqueue_scripts', 'my_styles_method' );

  function wpsites_google_fonts() {
  wp_enqueue_style( 'gfonts', '//fonts.googleapis.com/css?family=Nothing+You+Could+Do', array(), CHILD_THEME_VERSION );
  }
  add_action( 'wp_enqueue_scripts', 'wpsites_google_fonts' );

  ?>
