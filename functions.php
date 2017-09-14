<?php
	/*
	*
	* Theme Functions
	*/
	
	add_action( 'after_setup_theme', 'setup' );
	
	// Set post thumbnails
	function setup() {
	    add_theme_support( 'post-thumbnails' ); // This feature enables post-thumbnail support for a theme
	    add_image_size( 'header', 600, 200, true ); // header image
	    add_image_size( 'custom-size1', 400, 200 ); // 400 pixel wide and 200 pixel tall, resized proportionally
	    add_image_size( 'custom-size2', 400, 200, true ); // 400 pixel wide and 200 pixel tall, cropped
	}

	// Set max words for the excerpt
	function custom_excerpt_length( $length ) {
		return 15;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// Add Menu to the theme
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