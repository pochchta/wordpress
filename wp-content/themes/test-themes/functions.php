<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'link_files');
add_action('after_setup_theme', 'reg_menu');

function link_files(){
	wp_enqueue_style('style-main', get_stylesheet_uri(), [], null);
	wp_enqueue_style('style-shop-cat', get_template_directory_uri().'/style_shop_cat.css', [], null);
	wp_enqueue_style('style-fa', get_template_directory_uri().'/libs/font-awesome/css/font-awesome.min.css', [], null);
};

function reg_menu(){
	register_nav_menu('left_menu', 'left menu');
}