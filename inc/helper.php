<?php

function my_pagenavi()
{
  $big = 999999999; // need an unlikely integer
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'prev_next' => false,
    'mid_size' => 2,
    'show_all' => false,
  ));
}


function my_filter_head()
{
  remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'my_filter_head');

// CSS для прилепления админки к нижнему краю страницы
function true_move_admin_bar()
{
  echo '
    <style type="text/css">
    
    
    #wpadminbar{top:auto !important;bottom:0}
    #wpadminbar .menupop .ab-sub-wrapper{bottom:32px;-moz-box-shadow:2px -2px 5px rgba(0,0,0,.2);-webkit-box-shadow:2px -2px 5px rgba(0,0,0,.2);box-shadow:2px -2px 5px rgba(0,0,0,.2)}
    @media screen and ( max-width:782px ){
        #wpadminbar{position:fixed}
        #wpadminbar .menupop .ab-sub-wrapper{bottom:46px}
    }
    </style>
    ';
}

add_action('wp_head', 'true_move_admin_bar'); // на сайте
