<?php

function load_style_scripts (){
	/*wp_enqueue_script( 'jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js' );*/
	wp_enqueue_script( 'jquery-my',  get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script( 'wpbootstrap-script', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'wpbootstrap-min-script', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_style( 'sd-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bts-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'media-style', get_template_directory_uri() . '/css/media.css' );
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/css/font-awesome.css' );
}
	
add_action( 'wp_enqueue_scripts', 'load_style_scripts' );
add_theme_support('post-thumbnails');

set_post_thumbnail_size( auto, 650);

	
register_sidebar(array(
	'name' => 'Футер виджеты',
	'id'=>'footer_wid',
   'before_widget' => '<div class="widget %2Ss">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
	



 