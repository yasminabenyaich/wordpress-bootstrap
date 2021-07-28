
<?php
class EnqueueScript
{
  /**
   * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
   * Nous avons ajouter le mot public afin que cette méthode puisse être utiliser depuis l'exterieur. Cela veut dire que l'on peut créer une instance de cette class et puis faire appel à la méthode ( ex: $instance->methode() )
   *
   * @return void
   */
  public static function ajout_css_js()
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
    wp_enqueue_style('freelancer', get_template_directory_uri() . '/css/freelancer.min.css');
  // Ajout des scripts js
  // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
//   Ajout des fonctions wp_enqueue_script(); qui permette de charger les …
// …scripts
   // Ajout des scripts js
  // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
  
    wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery-perso'], null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', ['jquery-perso'], null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', ['jquery-perso'], null, true);
    wp_enqueue_script('boostrap-validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', ['bootstrap'], null, true);
    wp_enqueue_script('contact-me', get_template_directory_uri() . '/js/contact_me.js', ['jquery-perso'], null, true);
    wp_enqueue_script('freelancer', get_template_directory_uri() . '/js/freelancer.min.js', ['jquery-perso'], null, true);

    }
}
 // Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
 // Cette écouteur va déclancher la fonction
 // Nous créeons une instance de la class EnqueueScript afin de la passer en paramètre dans notre add_action
 
//  $enqueue_script = new EnqueueScript();
 //$enqueue_script = new EnqueueScript();
 
 // la function add_action prend en deuxième paramêtre soit un string (qui correspond au nom d'une fonction), soit un tableau. Dans le tableau on passe en premier paramêtre l'un objet instance d'une class et en deuxième paramêtre un string qui correspond au nom de la méthode de l'objet passé en premier paramêtre.

 
// Il est possible de ne pas devoir instancier la class avec la syntaxe ci-dessous. Attention il faut alors que la méthode soit static
add_action('wp_enqueue_scripts', [EnqueueScript::class, 'ajout_css_js']);
