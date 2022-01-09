<?php

/*==============================
   Add theme supports 
  ==============================*/
function nickm_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','nickm_theme_support');

/*==============================
  Menu functions
  ==============================*/
  function register_menus() {
    register_nav_menus(
      array(
        'header-menu' => 'Header Menu' ,
        'footer-menu' => 'Footer Menu',
        'sidebar-menu' => 'Sidebar Menu',
       )
     );
   }
   add_action( 'init', 'register_menus' );

/*==============================
  Enqueue CSS
  ==============================*/
function nickm_enqueue_styles(){
    wp_enqueue_style('nickm-style', get_template_directory_uri() . "/style.css", array('nickm-bootstrap-css'), wp_get_theme()->get( 'Version' ),false);
    wp_enqueue_style('nickm-bootstrap-css', get_template_directory_uri() . "/assets/css/bootstrap-wp.css", array(), '5.1.2',false);
    wp_enqueue_style('nickm-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css", array(), '1.4.1',false);
}
add_action( 'wp_enqueue_scripts', 'nickm_enqueue_styles');

/*==============================
  Enqueue JS
  ==============================*/
function nickm_enqueue_scripts(){
    
    wp_enqueue_script('nickm-js', get_template_directory_uri() . "/assets/js/scripts.js", array(), wp_get_theme()->get( 'Version' ),false);
    wp_enqueue_script('nickm-bootstrap-js', get_template_directory_uri() . "/assets/js/bootstrap.js", array(), '5.1.1',true);

}
add_action( 'wp_enqueue_scripts', 'nickm_enqueue_scripts');

/*==============================
  Include Walker Class
  ==============================*/
  require get_template_directory() . '/inc/walker.php';

?>

