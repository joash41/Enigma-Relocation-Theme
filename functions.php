<?php
	include_once('functions/wp-functions.php');
	function header_bc_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'hi-style',  get_template_directory_uri() .'/css/theme-style.css');
		wp_enqueue_style( 'fa-style',  get_template_directory_uri() .'/css/all.min.css');
		wp_enqueue_style( 'flickity-style',  get_template_directory_uri() .'/css/flickity.min.css');
		wp_enqueue_style( 'menu-icon-transition',  get_template_directory_uri() .'/css/menu-icon-transition.css');
		wp_enqueue_script( 'google-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		wp_enqueue_script( 'scroll-reveal', 'https://unpkg.com/scrollreveal@4');
		wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css?family=Lato:400,700');
	}
	add_action( 'get_header', 'header_bc_scripts' );
	function footer_bc_scripts() {
		wp_enqueue_script( 'flickity-js', get_template_directory_uri() . '/js/flickity.pkgd.min.js');
		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js');
	}
	add_action( 'get_footer', 'footer_bc_scripts' );
	
// Custom login screen for wp-admin
	function custom_loginlogo() {
		echo '<style type="text/css">
		h1 a {
			background-image: url('.get_template_directory_uri().'/images/logo.png) !important;
			background-size: 75% !important;
			height: 90px !important;
			width: 100% !important; }
		body{
			background: #fff !important;
			color: #fff !important;}
		.login form{
			background: #373a46 !important;
			border: 2px solid;}
		.login #login_error, .login .message, .login .success{
			color: #373a46 !important;}
		.login form label{
				color: #fff;}
		.login #login_error, .login .message, .login .success{
				background-color: transparent;}
		</style>';
	}
	add_action('login_head', 'custom_loginlogo');

//Registering Gutenberg Block Category
function jkg_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'enigma-blocks',
				'title' => __( 'Enigma Blocks', 'enigma-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'jkg_block_category', 60, 2);

//Registering Gutenberg Blocks
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {
    // check function exists
    if( function_exists('acf_register_block') ) {
        // Info Blocks
		acf_register_block(array(
            'name'              => 'home_info',
            'title'             => __('Home Info'),
			'description'       => __('Home Info'),
			'render_template'   => 'templates/parts/home_info.php',
            'category'          => 'enigma-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'custom', 'block' ),
		));
		// Specifications Blocks
		acf_register_block(array(
            'name'              => 'home_specs',
            'title'             => __('Home Specs'),
			'description'       => __('Home Specs'),
			'render_template'   => 'templates/parts/home_specs.php',
            'category'          => 'enigma-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'custom', 'block' ),
        ));
        // Service Blocks
		acf_register_block(array(
            'name'              => 'services',
            'title'             => __('Services'),
			'description'       => __('Services'),
			'render_template'   => 'templates/parts/services.php',
            'category'          => 'enigma-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'services', 'block' ),
        ));
        // Spec Blocks
		acf_register_block(array(
            'name'              => 'specifications',
            'title'             => __('Specifications'),
			'description'       => __('Specifications'),
			'render_template'   => 'templates/parts/specifications.php',
            'category'          => 'enigma-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'Specifications', 'block' ),
        ));
        // Packages CTA Blocks
		acf_register_block(array(
            'name'              => 'packages-cta',
            'title'             => __('Packages CTA'),
			'description'       => __('Packages CTA'),
			'render_template'   => 'templates/parts/packages-cta.php',
            'category'          => 'enigma-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'Packages CTA', 'block' ),
        ));
        // Packages Content Blocks
		acf_register_block(array(
            'name'              => 'packages-content',
            'title'             => __('Packages Content'),
			'description'       => __('Packages Content'),
			'render_template'   => 'templates/parts/packages-info.php',
            'category'          => 'enigma-blocks',
            'icon'              => 'admin-comments',
            'mode'              => 'edit',
            'keywords'          => array( 'Packages Content', 'block' ),
		));
    }
}