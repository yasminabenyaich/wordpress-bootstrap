

<?php 
  get_header();
?>
<!-- doc: https://developer.wordpress.org/themes/basics/template-files/#using-template-files -->
<!-- // on séparer le header dans un fichier seul pour que toutes les pages puisse l'utiliser et qu'il ne faille modifier le header qu'à un seul endroit. -->
<!-- Ajout du header -->
<?php
get_template_part('templates/banner');
?>
  <!-- Header -->

<?php
get_template_part('templates/portfolio');
?>
 
 <?php
 get_template_part('templates/about')
 ?>
  <!-- Contact Section -->
  <?php
  get_template_part('templates/contact')
  ?>
  <!-- Footer -->
  <?php 
  get_footer();
  ?>
 
 