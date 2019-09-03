<?php
add_theme_support( 'post-thumbnails' );
//Register Menu
    function register_my_menus() {
        register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
        )
        );
    }
    add_action( 'init', 'register_my_menus' );
//Widgets
	add_action( 'widgets_init', '_steve_widgets_init' );
    function _steve_widgets_init() {
        register_sidebar(array(
            'name' => 'Footer Menu',
            'id'   => 'footer-menu',
            'before_widget' => '',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '<i class="fas fa-chevron-down"></i></h3>',
            'after_widget'  => ''
        ));
        register_sidebar(array(
            'name' => 'Footer Copyright',
            'id'   => 'footer-copyright',
            'before_widget' => '',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '<i class="fas fa-chevron-down"></i></h3>',
            'after_widget'  => ''
        ));
    }