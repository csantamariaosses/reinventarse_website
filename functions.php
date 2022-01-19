<?php
function my_theme_enqueue_styles() {

 $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.

 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style',
 get_stylesheet_directory_uri() . '/style.css',
 array( $parent_style ),
 wp_get_theme()->get('Version')
 );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*-----------------------------------------------------------*/
/*------------- Bootstrap ------------------*/
/*-----------------------------------------------------------*/

// Incluir Bootstrap CSS
function bootstrap_css() {
    wp_enqueue_style( 'bootstrap_css', 
          get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
          array(), 
          '4.1.3'
          ); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');
   
// Incluir Bootstrap JS
function bootstrap_js() {
    wp_enqueue_script( 'bootstrap_js', 
          get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
          array('jquery'), 
          '4.1.3', 
          true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');


// Slick.css
function slick_css() {
      wp_enqueue_style( 'slick_css', 
          get_stylesheet_directory_uri() . '/css/slick.css', 
          array(), 
          '4.1.3'
          ); 
}
add_action( 'wp_enqueue_scripts', 'slick_css');

// Slick-theme.css
function slick_theme_css(){
    wp_enqueue_style( 'slick_theme_css', 
        get_stylesheet_directory_uri() . '/css/slick-theme.css', 
        array(), 
        '4.1.3'
        ); 
}
add_action( 'wp_enqueue_scripts', 'slick_theme_css');


// Slick.js
function slick_min_js() {
      wp_enqueue_style( 'slick_min_js', 
          get_stylesheet_directory_uri() . '/js/slick.min.js', 
          array(), 
          '4.1.3'
          ); 
}
add_action( 'wp_enqueue_scripts', 'slick_min_js');



?>