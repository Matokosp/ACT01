<?php 

	function mesmerize_enqueue_styles_child() {
		wp_register_style('parent-style', get_template_directory_uri() . '/style.css', null, null, null);
		wp_enqueue_style('parent-style');
	}

	add_action( 'wp_enqueue_scripts', 'mesmerize_enqueue_styles_child' );
