<?php 

function ivv_customizer($wp_customizer){
	// Copyright footer
	$wp_customizer->add_section(
		'sec_copyright',
		array(
			'title' => 'Copyright',
			'description' => 'Copyright Section'
		)
	);

	$wp_customizer->add_setting(
		'set_copyright',
		array(
			'type' => 'theme_mod',
			'default' => 'Copyright M.I.H.A Sistemas',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customizer->add_control(
		'set_copyright',
		array(
			'label' => 'Copyright',
			'description' => 'mudar Copyright do footer',
			'section' => 'sec_copyright',
			'type' => 'text',
		)
	);

	//Texto da Home 
	$wp_customizer->add_section(
		'sec_home_text',
		array(
			'title' => 'Texto da Home Page',
			'description' => 'Copyright Section'
		)
	);

	// Titulo
	$wp_customizer->add_setting(
		'set_home_title',
		array(
			'type' => 'theme_mod',
			'default' => 'We are what we preach',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customizer->add_control(
		'set_home_title',
		array(
			'label' => 'Titulo texto da Home',
			'description' => 'mudar o titulo do texto home',
			'section' => 'sec_home_text',
			'type' => 'text',
		)
	);

	// Texto
	$wp_customizer->add_setting(
		'set_home_txt',
		array(
			'type' => 'theme_mod',
			'default' => 'A Bíblia é a Palavra inspirada de Deus, produto de homens santos do passado que falaram e escreveram conforme eram movidos pelo Espírito Santo. Aceitamos a Nova Aliança, registrada no Novo Testamento, como nosso guia infalível em assuntos concernentes à conduta e doutrina (2Tm 3.16, 1Ts 2.13 e 1Pe 1.21).',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customizer->add_control(
		'set_home_txt',
		array(
			'label' => 'Texto da Home',
			'description' => 'mudar o texto da home',
			'section' => 'sec_home_text',
			'type' => 'textarea',
		)
	);

	//map
	$wp_customizer->add_section(
		'sec_map',
		array(
			'title' => 'Maps',
			'description' => 'Map Section'
		)
	);

	//Maps API KEY
	$wp_customizer->add_setting(
		'set_map_apikey',
		array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customizer->add_control(
		'set_map_apikey',
		array(
			'label' => 'API Key',
			'description' => 'Get your Key <a href="https://developers.google.com/maps/documentation/javascript/get-api-key?hl=pt" target="_blank">here</a>',
			'section' => 'sec_map',
			'type' => 'text',
		)
	);

	//Maps lat
	$wp_customizer->add_setting(
		'set_map_lat',
		array(
			'type' => 'theme_mod',
			'default' => 'Latitude',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customizer->add_control(
		'set_map_lat',
		array(
			'label' => 'Latitude',
			'description' => 'Adicionar a latitude',
			'section' => 'sec_map',
			'type' => 'text',
		)
	);

	//Maps lng
	$wp_customizer->add_setting(
		'set_map_lng',
		array(
			'type' => 'theme_mod',
			'default' => 'Longitude',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customizer->add_control(
		'set_map_lng',
		array(
			'label' => 'Adicionar longitude',
			'description' => 'adicionar a longitude',
			'section' => 'sec_map',
			'type' => 'text',
		)
	);

	//Address
	$wp_customizer->add_setting(
		'set_map_address',
		array(
			'type' => 'theme_mod',
			'default' => '<h6>Igreja Verbo da Vida</h6>
						<p>Avenida 7 de Setembro - N 566 - Agamenon Magalhães. <br>
             			   Santa Maria da Boa Vista - PE</p>',
			'sanitize_callback' => 'wp_kses_post'
		)
	);

	$wp_customizer->add_control(
		'set_map_address',
		array(
			'label' => 'Adicionar Endereço ',
			'description' => 'endereço da igreja',
			'section' => 'sec_map',
			'type' => 'textarea',
		)
	);
}

add_action('customize_register', 'ivv_customizer');