<?php
require_once('libs/wp_bootstrap_navwalker.php');

// DEFINICION DE MENUS
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu Encabezado' ),
      //'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// DEFINICION DE WIDGETS
function theme_lds_widgets_init() {
    register_sidebar( 
        array(
        'name' => __( 'Footer', 'theme-lds' ),
        'id' => 'footer',
        'description' => __( 'Contenido para la linea de footer.', 'theme-lds' ),
        'class'         => 'footer',
        'before_widget' => '<span>',
	'after_widget'  => '</span>',
	'before_title'  => '<span>',
	'after_title'   => '</span>',
    ));
     register_sidebar(    array(
        'name' => __( 'Destacados Inicio 1', 'theme-lds-home-1' ),
        'id' => 'home_1',
        'description' => __( 'Contenido para inicio 1', 'theme-lds-home-1' ),
        'class'         => 'home-featured-1',
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ));
     
    register_sidebar(    array(
        'name' => __( 'Destacados Inicio 2', 'theme-lds-home-2' ),
        'id' => 'home_2',
        'description' => __( 'Contenido para inicio 2', 'theme-lds-home-2' ),
        'class'         => 'home-featured-2',
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ));
          
//    register_sidebar(    array(
//        'name' => __( 'Destacados Inicio 3', 'theme-lds-home-3' ),
//        'id' => 'home_3',
//        'description' => __( 'Contenido para inicio 3', 'theme-lds-home-3' ),
//        'class'         => 'home-featured-3',
//        'before_widget' => '',
//	'after_widget'  => '',
//	'before_title'  => '<h3>',
//	'after_title'   => '</h3>',
//    ));
}
add_action( 'widgets_init', 'theme_lds_widgets_init' );


// REDIRECCION CUANDO FALLA LOGIN
function login_errors_message() {
	header('Location: '.home_url().'/?login_error=1');
}
add_filter('login_errors', 'login_errors_message');


// EVENTOS

function create_posttype() {
  register_post_type( 'eventos',
    array(
      'labels' => array(
        'name' => __( 'Eventos' ),
        'singular_name' => __( 'Evento' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'eventos'),
    )
  );
}

add_action( 'init', 'create_posttype' );