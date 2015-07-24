<?php

// create a custom menu option for the theme
function custom_menu() {
  register_nav_menu('header-menu',__( 'Header Menu'));
}
add_action( 'init', 'custom_menu');
?>
