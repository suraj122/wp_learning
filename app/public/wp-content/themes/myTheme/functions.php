<?php
  function university_files() {
    wp_enqueue_script('js', get_theme_file_uri('/js/script.js'), NULL, 1.0, true);
    wp_enqueue_style('font-familu', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'university_files');