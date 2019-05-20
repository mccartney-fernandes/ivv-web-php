<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// inserindo scripts css js
function load_scripts(){
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], '4.3.1', true);

	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', [], '4.3.1', 'all');
	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', [], '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'load_scripts');

//Configuração Tema WP
function ivv_config(){
	// Registrando menus
	register_nav_menus(
		[
			'menu_institucional' => 'MENU INSTITUCIONAL',
			'menu_principal'	 => 'MENU PRINCIPAL'
		],
	);

	//cabeçalho customizados
	add_theme_support('custom-header', ['height' => 225, 'width' => 1920]);
	//adicinar suporte a miniaturas
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ivv_config', 0);
