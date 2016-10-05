<?php

  function wpt_theme_style() {

    wp_enqueue_style('foundation_css', get_template_directory_uri() '. /css/foundation.css');
    wp_enqueue_style('normalize_css', get_template_directory_uri() '. /css/normalize.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('google_fonts', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');

  }
add_action( 'wp_enqueue_scripts','wpt_theme_style' );
?>
