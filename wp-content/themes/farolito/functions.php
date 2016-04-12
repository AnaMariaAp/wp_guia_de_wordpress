<?php 

	add_theme_support('menus');
	add_theme_support('post-thumbnails');

	function register_theme_menus(){
		register_nav_menus(
			array( 'main-menu' => __('Main Menu') )
		);
	}

	function amap_theme_style(){
		wp_enqueue_style('style', get_template_directory_uri() . '/stylesheets/main.css');
	}
	add_action('wp_enqueue_scripts', 'amap_theme_style');

	function amap_theme_js(){
		wp_enqueue_script( 'jq', get_template_directory_uri() . '/javascripts/jquery.min.js', array(), '', true );
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/javascripts/js.js', array(), '', true );
	}
	add_action('wp_enqueue_scripts', 'amap_theme_js');
			
?>