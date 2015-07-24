<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WriteSpace for WordPress</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" charset="utf-8">
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
      <hr />
      <div id="nav">
        <nav>
          <?php wp_nav_menu(); ?>
        </nav>
      </div>
      <hr />
