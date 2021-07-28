<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Freelancer - Start Bootstrap Theme</title>
  <!-- Bootstrap core CSS -->
  <?php
  wp_head();
  ?>
  <!-- on mets tous nos lien dans notre functions.php avec notre méthode -->
  <!-- https://developer.wordpress.org/reference/functions/wp_head/ -->
</head>
<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo get_bloginfo('name'); ?></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <!--Ajouter une fonction qui va enregistrer un emplacement pour les menu. Cela permet alors de créer des menus dans le backoffice sous le sous onglet apparence > menus. on créé alors un menu avec les liens portfolio, about et contact en faisant en sorte d'avoir le bon lien (/#portfolio). Dans le header on rajouter la fonction wp_nav_menu() et on passe les paramêtre). on rempli les paramètres en se référant à la documentation. dans le back office on peu ajouter des class au li si on ajoute la possibilité dans les options de la page.
         On ajoutera les class pour la balise a plus tard 
        -->
        <?php
        // https://developer.wordpress.org/reference/functions/wp_nav_menu/
        wp_nav_menu([
            // 'menu' => 'main-menu',
          'menu_class' => 'navbar-nav ml-auto',
          'theme-location' => 'main-menu',
          'container' => ''
        ]);
        ?>
      </div>
    </div>
  </nav>