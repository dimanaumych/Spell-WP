<?php
register_nav_menus(array(
    'head'    => 'Меню Шапка',
    'foot'    => 'Меню Подвал',
));

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' => 'Настройки сайта',
        'menu_title' => 'Настройки сайта',
        'menu_slug' => 'sites_seting',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

add_theme_support( 'post-thumbnails' );//подключить миниатюры записей


