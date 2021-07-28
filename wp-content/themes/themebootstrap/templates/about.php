 <!-- About Section -->
 <?php
// https://developer.wordpress.org/reference/functions/get_theme_mod/
// Attention dans ce template on utilise un raccourci pour <?php echo par <?= ceci n'est possible que si la config php.ini le permet short_open_tag. À ne faire que si vous avez le control de la config php.ini
$text_column_left = get_theme_mod('coding-about-text-left', __('Texte about gauche'));
// Condition soit cette colonne existe donc il t'affiche son contenu => si la colonne n'existe pas alors on affiche par défaut ce qu'il y a en deuxieme parametre
$text_column_right = get_theme_mod('coding-about-text-right', __('Texte about Droit'));
// get_theme_mod: Récupère la valeur de modification de thème pour le thème actuel.
?>
 <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">About</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
        <p class="lead"><?= $text_column_left; ?></p>
        </div>
        <div class="col-lg-4 mr-auto">
        <p class="lead"><?= $text_column_right; ?></p>
        <!-- ici Récupère la valeur de modification de thème pour le thème actuel. grace get_theme_mod-->

        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-download mr-2"></i>
          Download Now!
        </a>
      </div>
    </div>
  </section>