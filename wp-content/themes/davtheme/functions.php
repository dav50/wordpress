<?php
add_theme_support('post-thumbnails');

register_nav_menus(array('header' => 'Menu principal',));

if(function_exists('register_sidebar'))
{
register_sidebar();
}