<?php

add_action('init', 'smoke_menus');

function smoke_menus()
{

  $locations = array(
    'header' => 'Header Menu',
    'footer' => 'Footer Menu'
  );

  register_nav_menus($locations);
}
