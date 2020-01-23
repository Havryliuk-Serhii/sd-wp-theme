<?php

if ( ! function_exists( 'sadoviy_decor_setup' ) ) :
	function sadoviy_decor_setup() {
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'sadoviy-decor' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}		
endif;
add_action( 'after_setup_theme', 'sadoviy_decor_setup' );
/**
 * Подключение скриптов и стилей
 */
function load_sd_style_scripts() {
	//Подключение стилей
	wp_enqueue_style( 'sd-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bts-sd_style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'fontawesome-sd_style', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'main-sd_style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'media-sd_style', get_template_directory_uri() . '/css/media.css' );
	//Подключение скриптов
	wp_enqueue_script( 'jquery-my',  get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script( 'wpbootstrap-min-script', get_template_directory_uri() . '/js/bootstrap.min.js' );	
}
add_action( 'wp_enqueue_scripts', 'load_sd_style_scripts' );

