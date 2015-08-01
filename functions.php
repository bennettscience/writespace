<?php

// create a custom menu option for the theme
function custom_menu() {
  register_nav_menu('header-menu',__( 'Header Menu'));
}
add_action( 'init', 'custom_menu');

// Post featured image
add_theme_support( 'post-thumbnails' );

// Remove paragraph tag from images
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// Set default image link to 'none'
// This allows the previous function to remove the tags correctly.
// This is also necessary to ensure body images are full width.

update_option('image_default_link_type', 'none');

?>
