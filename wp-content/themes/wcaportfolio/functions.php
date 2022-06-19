<?php

function themeSupport()
{
  //Set languages folder
  load_theme_textdomain('wca-portoflio', get_template_directory() . '/lang');
  //Set thumbnails (featured images)
  add_theme_support('post-thumbnails');
  //Set locations for dinamic navbar
  register_nav_menus(
    array(
      'main-menu' => 'Navbar'

    )
  );
}

add_action('after_setup_theme', 'themeSupport');

function scripts()
{

  wp_dequeue_style('wp-block-library');

  wp_enqueue_style('theme-styles', get_theme_file_uri('/assets/css/main.css'), null, filemtime(get_template_directory() . '/assets/css/main.css'));
}

add_action('wp_enqueue_scripts', 'scripts');
