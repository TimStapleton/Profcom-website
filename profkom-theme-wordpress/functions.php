<?php
// Подключение CSS файла
function custom_css() {
  wp_enqueue_style('custom-css', get_stylesheet_directory_uri());
}
add_action('wp_enqueue_scripts', 'custom_css');

// Подключение JS файла с зависимостью от jQuery
function custom_js() {
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() .'/js/bootstrap.js');
}
add_action('wp_enqueue_scripts', 'custom_js');

//Подключение нав. меню
register_nav_menu('menu1', '1');
register_nav_menu('menu2', '2');
register_nav_menu('menu3', '3');
register_nav_menu('menu4', '4');
