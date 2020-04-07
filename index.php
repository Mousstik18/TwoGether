<?php
session_start(); ?>

<!doctype html>
<html lang="fr">
<?php require 'include/head.php' ?>

<body  style="font-family: 'Mansalva', cursive;">
    
    <div id="myModal" class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"><h5 class="modal-title" id="staticBackdropLabel">Attetion</h5></div>
      <div class="modal-body">
        Site en construction
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Je comprends</button>
      </div>
    </div>
  </div>
</div>
    
    
    <?php require 'include/navbar.php' ?>

    <?php 
    $arrayPages = array(
 
    'accueil' => 'accueil.php',
    'galerie' => 'photos.php',
    'addme' => 'addme.php',
    'support' => 'support.php'
  );
    
if(!empty($_GET['page']))
  {
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(array_key_exists(strtolower($_GET['page']), $arrayPages))
    {
      // Oui, alors on l'importe
      include('pages/'. $arrayPages[ strtolower($_GET['page']) ] );
    }
      else
    {
      // Non, alors on importe un fichier par défaut
      include('pages/404.php');
    }
  }
    else
  {
    // Non, on affiche la page d'accueil par défaut
    include('pages/'. $arrayPages['accueil']);
  }
    
    
    require ($_GET['page'] .'/.php'); ?>

    <?php include 'include/footer.php' ?>

</body>
</html>