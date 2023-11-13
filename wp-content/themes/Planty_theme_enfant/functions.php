<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {

//  Chargement du style du theme parent

     wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

//  Chargement du style personnalisé

     wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css',
     array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));

}



 //  ***       HOOK      ***    //

 function nav_admin ( $items ) {

     if (is_user_logged_in() && current_user_can('administrator')) {
         $items .= '<a class="hook-style" href="'. admin_url() .'">Admin</a>';
     }
     return $items;
 }
 
 add_filter( 'wp_nav_menu_items', 'nav_admin', 10, 1 );     // Hook filter

?>