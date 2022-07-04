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



// Register Post Types 

function registerPostType()
{
  register_post_type('works', array(
    'labels' => array(
      'name' => 'Works',
      'singular_name' => 'Work'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'menu_icon' => 'dashicons-portfolio',
    'rewrite' => array(
      'slug' => 'works',
      'with_front' => false
    )

  ));

  register_post_type('skills', array(
    'labels' => array(
      'name' => 'Skills',
      'singular_name' => 'Skill'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'thumbnail'),
    'menu_icon' => 'dashicons-hammer'
  ));

  register_post_type('languages', array(
    'labels' => array(
      'name' => 'Languages',
      'singular_name' => 'Language'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'thumbnail'),
    'menu_icon' => 'dashicons-translation'
  ));

  register_post_type('education', array(
    'labels' => array(
      'name' => 'Education',
      'singular_name' => 'Education'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'editor'),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

  register_post_type('experience', array(
    'labels' => array(
      'name' => 'Experience',
      'singular_name' => 'Experience'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'editor'),
    'menu_icon' => 'dashicons-editor-paste-word'
  ));
}

add_action('init', 'registerPostType');
