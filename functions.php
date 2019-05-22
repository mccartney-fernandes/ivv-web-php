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
		]
	);

	//cabeçalho customizados
	add_theme_support('custom-header', ['height' => 425, 'width' => 1920]);
	//adicinar suporte a miniaturas
	add_theme_support('post-thumbnails');
	//post formats
	add_theme_support('post-formats', ['gallery', 'audio', 'video', 'image']);
}

add_action('after_setup_theme', 'ivv_config', 0);

// adicionar barras laterasi widgets

add_action('widgets_init', 'ivv_sidebars');

function ivv_sidebars(){
	register_sidebar([
		'name' => 'Titulo do texto na pagina home',
		'id' => 'sidebar-1',
		'description' => 'Titulo do texto que fica na pagina inicial do site',
		'before_widget' => '<div class="text-center">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2>'
	]);

	register_sidebar([
		'name' => 'Botão pagina Home',
		'id' => 'sidebar-2',
		'description' => 'Botão da pagina home',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2>'
	]);

	register_sidebar([
		'name' => 'Imagem da Home',
		'id' => 'sidebar-3',
		'description' => 'Imagem da pagina Home',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="">',
		'after_title' => '</h2>'
	]);

	register_sidebar([
		'name' => 'Imagem da Logo',
		'id' => 'sidebar-4',
		'description' => 'Imagem da Logo',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	]);

	register_sidebar([
		'name' => 'Lider 1',
		'id' => 'sidebar-5',
		'description' => 'Pastor Presidente',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
	register_sidebar([
		'name' => 'Lider 2',
		'id' => 'sidebar-6',
		'description' => 'Vice-presidente',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
	register_sidebar([
		'name' => 'Lider 3',
		'id' => 'sidebar-7',
		'description' => '1º Diretor Financeiro',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
	register_sidebar([
		'name' => 'Lider 4',
		'id' => 'sidebar-8',
		'description' => '2º Diretor Financeiro',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
	register_sidebar([
		'name' => 'Lider 5',
		'id' => 'sidebar-9',
		'description' => '1º Secretário Executivo',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
	register_sidebar([
		'name' => 'Lider 6',
		'id' => 'sidebar-10',
		'description' => '2º Secretario Executivo',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
}
