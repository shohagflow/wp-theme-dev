<?php
add_theme_support( 'menus');
add_theme_support( 'widgets');
add_theme_support( 'custom-header');
add_theme_support( 'custom-background');
add_theme_support( 'custom-logo');
add_theme_support( 'post-formats',['video','Audio','Gallery']);
add_theme_support( 'post-thumbnail');
add_theme_support( 'tag-title');

register_nav_menus( [
    'hm'    =>'Header Menu',
    'fm'    =>'Footer Menu'
] );

register_post_type('notice-bord',[
    'public'  =>true,
    'labels'  =>[
        'name'              =>'Notic Board',
        'all_items'         =>'All Notic',
        'add_new'           =>'Add New Notic',
        'add_new_item'      =>'Add New Notic',
    ],
    'suports'               =>['title'],
    'menu_icon'             =>get_template_directory_uri(  ).'/img/icon.png'

]);














?>