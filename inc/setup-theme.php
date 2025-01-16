<?php

add_action('after_setup_theme', 'setup_theme');

function setup_theme()
{
  add_theme_support('title-tag');

  add_theme_support('post-thumbnails');

  load_theme_textdomain('smoke', get_template_directory() . '/languages');

  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  add_theme_support('customize-selective-refresh-widgets');

  add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    )
  );
}
