<?php
session_start(); ?>

<!doctype html>
<html>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/include/head.php'); ?>

<body>


    <?php require($_SERVER['DOCUMENT_ROOT'].'/admin/include/adminnav.php'); ?>
    <?php require($_SERVER['DOCUMENT_ROOT'].'/admin/include/navleft.php'); ?>
    
        <?php 
    $arrayPages = array(
 
    'gestion' => 'dashboard.php',
    'recette' => 'articles.php',
    'money' => 'boutique.php',
    'news' => 'newsletter.php',
    'warning' => 'reports.php',
    'webhook' => 'integrations.php',
    'site' => 'site.php',
    'users' => 'utilisateurs.php',
    'social' => 'social.php',
    'divers' => 'divers.php'
  );
    
if(!empty($_GET['admin']))
  {
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(array_key_exists(strtolower($_GET['admin']), $arrayPages))
    {
      // Oui, alors on l'importe
      include('pages/'. $arrayPages[ strtolower($_GET['admin']) ] );
    }
      else
    {
      // Non, alors on importe un fichier par défaut
      include('../include/pages/404.php');
    }
  }
    else
  {
    // Non, on affiche la page d'accueil par défaut
    include('pages/'. $arrayPages['gestion']);
  }
    
    
    require ($_GET['admin'] .'/.php'); ?>

</body>
</html>