<?php

add_action( 'wp_enqueue_scripts', function () {

	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );
	wp_enqueue_style( 'style-wp', get_template_directory_uri() . '/assets/css/style-wp.css' );

	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js' );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.min.js', array('swiper'), 'null', true );
}); 

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );
// Додає svg в список дозволених для завантаження файлів
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
pll_register_string("common", "CONTACT ME");
pll_register_string("common", "About me");
pll_register_string("common", "Services");
pll_register_string("common", "Portfolio");
pll_register_string("common", "Reviews");
pll_register_string("common", "Contacts");
pll_register_string("common", "MY SERVICES");
pll_register_string("common", "PORTFOLIO");
pll_register_string("common", "RECENSIONI");
pll_register_string("common", "CONTATTI");
pll_register_string("common", "Tutti i diritti riservati © 2022");
pll_register_string("common", "Recensione da:");
?>
