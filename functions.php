<?php
function central_city_add_resources()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'central_city_add_resources');
function central_city_Menu_Register()
{
    register_nav_menu('nav-menu', 'Menu de navegação');
}

add_action('init', 'central_city_Menu_Register');
