<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'test_theme_link_files');
add_action('after_setup_theme', 'test_theme_after_setup');
add_action('widgets_init', 'test_theme_widget');

function test_theme_link_files(){
	wp_enqueue_style('style-main', get_stylesheet_uri(), [], null);
	wp_enqueue_style('style-shop-cat', get_template_directory_uri().'/assets/css/style_shop_cat.css', [], null);
	wp_enqueue_style('style-fa', get_template_directory_uri().'/assets/libs/font-awesome/css/font-awesome.min.css', [], null);
};

function test_theme_after_setup(){
	register_nav_menu('left_menu', 'Left menu');

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
};
function test_theme_widget(){
	register_sidebar([
		'name' => 'Left widget',
		'id' => 'left-widget',
		'description' => 'Левый виджет',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => "</div>\n"
	]);
}