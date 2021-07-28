<?php 

require_once(get_template_directory() . '/include/enqueue-script.php');

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
// **
//  * Ajout la fonctionnalité d'un ajout d'image pour les posts pour ce thème ci
//  *
//  * @return void
//  */




function ajout_image_article()
{
  //Ajout de la fonctionnalité d'ajout d'image pour les posts pour ce thème ci=> pour l'activer dans wordpress
  add_theme_support('post-thumbnails');

}

// Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', 'ajout_image_article');

// Ajout d'un écouteur d'événement pour activer les images mise en avant pour les post (article)
add_action('init', 'ajout_image_article');


/**
 * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
 * //https://developer.wordpress.org/themes/customize-api/customizer-objects/

 */
function ajout_personnalisation_about($wp_customize)
{
  // Ajout d'un panel avec des options
  // Attention, un panel ne s'affichera que s'il contient des sections
  //https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
  $wp_customize->add_panel('coding-panel-about', [
    'title' => __('Section About'),
    'Description' => __('Personnalisation de la section about')
  ]);

  // Ajout d'une section à un panel définie, si pas de panel défini, alors la section sera visible directement
  // Attention il faut que la panel ait déjà été ajouter pour que la section puisse s'y greffer.
  // Attention une section ne s'affichera que si elle contient des controls.
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
  $wp_customize->add_section('coding-about-section-text', [
    'panel' => 'coding-panel-about',
    'title' => __('Personnalisation du texte'),
    'description' => __('Personnalisez le texte')
  ]);
  
  // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting('coding-about-text-left', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);

   // Ajout d'un setting qui contiendra des informations dans la base de donnée sous la clé correspondant à son id (premier paramètre)
   // La clé est utilisé pour récuperer les valeurs dans le thème grâce à la fonction get_theme_mod()
   // Attention la ligne précédente n'est valable que si le 'type' du setting est défini à 'theme_mod'
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting('coding-about-text-right', [
    'type' => 'theme_mod',
    'sanitize_callback' => 'sanitize_textarea_field'
  ]);

  // Ajout d'un control (un label avec input et autre information). Le control doit être attaché à une section ainsi qu'à un setting.
  // Attention le setting doit déjà être créer afin que le control puisse s'ajouter.
  // Attention un control ne s'affiche que s'il est lié à un setting.
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  $wp_customize->add_control('coding-about-text-left-control', [
    'section' => 'coding-about-section-text',
    'settings' => 'coding-about-text-left',
    'label' => __('Texte colonne gauche'),
    'description' => __('Personnalisez le texte de la colonne gauche'),
    'type' => 'textarea'
  ]);
  $wp_customize->add_control('coding-about-text-right-control', [
    'section' => 'coding-about-section-text',
    'settings' => 'coding-about-text-right',
    'label' => __('Texte colonne right'),
    'description' => __('Personnalisez le texte de la colonne droite'),
    'type' => 'textarea'
  ]);
}
add_action('customize_register', 'ajout_personnalisation_about');