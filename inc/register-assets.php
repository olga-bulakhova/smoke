<?php

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts');


function register_styles()
{
  wp_enqueue_style('styles', SMOKE_DIR_URI . '/dist/css/global.bundle.css', [], filemtime(SMOKE_DIR_PATH . '/dist/css/global.bundle.css'), 'all');
}

function register_scripts()
{
  wp_enqueue_script('jquery');

  wp_enqueue_script('global', SMOKE_DIR_URI . '/dist/js/global.bundle.js', ['jquery'], filemtime(SMOKE_DIR_PATH . '/dist/js/global.bundle.js'), true);
}
