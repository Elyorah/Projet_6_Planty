<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {

//  Chargement du style du theme parent

     wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

//  Chargement du style personnalisé

     wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css');

}

?>