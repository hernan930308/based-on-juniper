<?php

add_action('wp_enqueue_scripts', function() {
	if (has_block('acf/prueba')) {
	$time = time();
	$theme_path = get_template_directory_uri();

		wp_enqueue_style('prueba-css', $theme_path . '/dist/blocks/prueba/style.css', array(), $time, 'all');
		wp_enqueue_script('prueba-js', $theme_path . '/dist/blocks/prueba/script.js', array(), $time, true);
	}
});

add_action('admin_init', function() {
		add_editor_style('/dist/blocks/prueba/style.css');
});

add_filter(
	'timber/acf-gutenberg-blocks-data/prueba',
	function( $context ) {
	return $context;
});