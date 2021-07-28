<?php 


 function register_styles()
 {
    wp_enqueue_style('style_id',get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('freelancer',get_stylesheet_directory_uri() . ' /freelancer.css');
    wp_enqueue_style('freelancer',get_stylesheet_directory_uri() . ' /freelancer.min.css');

     
    // => Cette fonction permet de refaire le chemin du fichier style.css de notre dossier enfantBlade::component('string(65) "http://localhost:8888/wordpress/wp-content/themes/twentyone-child"', PackageNameComponent::class);
 }
 add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

 add_action('wp_enqueue_scripts','register_styles');

 ?>