<?php 


 function register_styles()
 {
  //  Notre Style & fonts
   //  wp_enqueue_style('style_id',get_stylesheet_directory_uri() . '/style.css');
   // => Cette fonction permet de refaire le chemin du fichier style.css de notre dossier enfantBlade::component('string(65) "http://localhost:8888/wordpress/wp-content/themes/twentyone-child"', PackageNameComponent::class);
    wp_enqueue_style('freelancer',get_template_directory_uri() . ' /freelancer.css');
    wp_enqueue_style('freelancer',get_template_directory_uri() . ' /freelancer.min.css');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style('font-montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,700");
    wp_enqueue_style('font-lato', "https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic");
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css');

  // Ajout des scripts js
  // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
//   Ajout des fonctions wp_enqueue_script(); qui permette de charger les …
// …scripts
  wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('boostrap-validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', ['bootstrap'], null, true);
  wp_enqueue_script('contact-me', get_template_directory_uri() . '/js/contact_me.js', ['jquery-perso'], null, true);
  wp_enqueue_script('freelancer', get_template_directory_uri() . '/js/freelancer.min.js', ['jquery-perso'], null, true);
     
 }

 add_action('wp_enqueue_scripts','register_styles');
 // Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
 // Cette écouteur va déclancher la fonction

//  * Fonction qui ajoute un menu au thème.
 function register_main_menu()
{
  register_nav_menu('main-menu', 'Menu principal dans le header.');
}
add_action('after_setup_theme', 'register_main_menu'); 

function ajout_menu_a_class($atts, $item, $args)
{
  $class = 'nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger'; // or something based on $item
  $atts['class'] = $class;
  return $atts;
}
add_filter('nav_menu_link_attributes', 'ajout_menu_a_class', 10, 3);