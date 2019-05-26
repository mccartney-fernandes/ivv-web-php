<?php
//Required Plugins
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Carregar customizer.php
require_once get_template_directory() . '/inc/customizer.php';


//limitar a funcao the_excerpt
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

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
	add_theme_support('post-formats', ['audio', 'video', 'image', 'quote']);
	//title
	add_theme_support('title-tag');
	//logo home
	add_theme_support('custom-logo', array('height' => 110, 'width' => 140));
	// habilitar suporte a traducao
	// $textdomain = 'ivvsantamaria';
	// load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
	// load_theme_textdomain($textdomain, get_template_directory() . '/languages/');
}

add_action('after_setup_theme', 'ivv_config', 0);

// adicionar barras laterasi widgets

add_action('widgets_init', 'ivv_sidebars');

function ivv_sidebars(){
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
	register_sidebar([
		'name' => 'Lider 7',
		'id' => 'sidebar-12',
		'description' => 'Outors Lideres',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
	register_sidebar([
		'name' => 'Lider 8',
		'id' => 'sidebar-13',
		'description' => 'Outors Lideres',
		'before_widget' => '<div class="lideres-img">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="text-center">',
		'after_title' => '</h5>'
	]);
	register_sidebar([
		'name' => 'Social Icons',
		'id' => 'sidebar-11',
		'description' => 'Social Icons',
		'before_widget' => '<div class="align-self-center social-icons">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="text-center">',
		'after_title' => '</h2>'
	]);
}
