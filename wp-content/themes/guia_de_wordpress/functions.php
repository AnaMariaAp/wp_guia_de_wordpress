<?php 

	add_theme_support('menus');

	function register_theme_menus(){
		register_nav_menus(array('main-menu' => __('Main Menu')));
	}
	add_action('init', 'register_theme_menus');

	function wpg_theme_styles(){
		wp_enqueue_style('ebm', get_template_directory_uri() . '/stylesheets/ebm.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/stylesheets/style.css');
		wp_enqueue_style('google_fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,300,700');
	}
	add_action('wp_enqueue_scripts','wpg_theme_styles');

?>