<?php
	/*
	*
	* Theme Functions
	*/
	
	// function theme_name_scripts() {
	//     wp_enqueue_style( 'style', get_stylesheet_uri() );

	// }
	// add_action( 'wp_enqueue_scripts', 'MajadaTheme_scripts' );

	// Load theme stylesheets
	// function MajadaTheme_enqueue_style() {
	// Load all the styles
		// wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	// 	wp_enqueue_style( 'style', get_stylesheet_uri() );
	// }

	// // function themeslug_enqueue_script() {
	// // 	wp_enqueue_script( 'my-js', 'filename.js', false );
	// // }

	// add_action( 'wp_enqueue_scripts', 'MajadaTheme_enqueue_style' );
	// add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

	Add_theme_support('menus');

	function register_theme_menus() {
		register_nav_menus (
			array (
				'primary-menu' => __('primary-menu')
			)
		);
	}

	add_action('init', 'register_theme_menus')
?>