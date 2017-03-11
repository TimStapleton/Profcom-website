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
register_nav_menu('fav_article', '5');

//Поддержка картинок-превью
add_theme_support('post-thumbnails');
set_post_thumbnail_size('360','236', true);

function my_pagenavi() {
	global $wp_query;
	$big = 999999999; // уникальное число для замены

	$args = array(
		'base'    => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format'  => '',
		'current' => max( 1, get_query_var('paged') ),
		'total'   => $wp_query->max_num_pages,
	);

	$result = paginate_links( $args );

	// удаляем добавку к пагинации для первой страницы
	$result = str_replace( '/page/1/', '', $result );

	echo $result;
}

// Теперь, где нужно вывести пагинацию используем
// my_pagenavi();
