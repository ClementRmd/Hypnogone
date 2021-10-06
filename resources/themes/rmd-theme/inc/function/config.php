<?php
//SCRIPTS
add_action('wp_enqueue_scripts', 'my_scripts');
function my_scripts() {
  wp_enqueue_script('glide', 'https://unpkg.com/@glidejs/glide', array(), '1.0.0', true);
  wp_enqueue_script('script', THEME_URL .'/dist/scripts/app.js', array(), false, true);
}

//STYLE
add_action('wp_enqueue_scripts', 'my_style');
function my_style() {
  wp_enqueue_style('stylecss', THEME_URL .'/dist/styles/app.css');
  wp_enqueue_style('glidecore', THEME_URL .'/dist/styles/css/glide.core.min.css');
  // wp_enqueue_style('glidetheme', THEME_URL .'/dist/styles/css/glide.theme.min.css');
}

add_action('wp_enqueue_scripts', 'ajaxJs');
function ajaxJs() {
  wp_localize_script('main', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support() {
  add_theme_support( 'post-thumbnails' );
}

//retire accent de fichier uploade
add_filter( 'sanitize_file_name', 'remove_accents' );

//Creation menu
register_nav_menu( 'header', 'Header Menu' );
register_nav_menu( 'footer', 'Footer Menu' );

// Permet l'utilisation des "type=text/css ...."
add_action(
  'after_setup_theme',
  function() {
      add_theme_support( 'html5', [ 'script', 'style' ] );
  }
);

add_action( 'after_setup_theme', 'setup_picture' );
function setup_picture() {
  add_image_size( 'image-slide', 300 , 300 , true ); // 300 pixels wide (and unlimited height)
}