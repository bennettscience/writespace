<?php

// create a custom menu option for the theme
function custom_menu() {
  register_nav_menu('header-menu',__( 'Header Menu'));
}
add_action( 'init', 'custom_menu');

// Site custom header image
$args = array(
  'default-image' => '',
  'uploads'       => true,
);
add_theme_support('custom-header', $args );

// Post featured image
add_theme_support( 'post-thumbnails' );

?>
