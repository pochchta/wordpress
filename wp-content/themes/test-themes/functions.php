<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'test_theme_link_files');
add_action('after_setup_theme', 'test_theme_reg_menu');

function test_theme_link_files(){
	wp_enqueue_style('style-main', get_stylesheet_uri(), [], null);
	wp_enqueue_style('style-shop-cat', get_template_directory_uri().'/assets/css/style_shop_cat.css', [], null);
	wp_enqueue_style('style-fa', get_template_directory_uri().'/assets/libs/font-awesome/css/font-awesome.min.css', [], null);
};

function test_theme_reg_menu(){
	register_nav_menu('left_menu', 'Left menu');
};