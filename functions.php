<?php

// Adding the CSS and JS files

function gt_setup() {
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
  wp_enqueue_style('font-awesome', 'https://kit.fontawesome.com/3899a97913.js');
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

?>