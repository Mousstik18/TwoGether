<?php 
$connection = new mysqli('localhost:3306', 'couizine', 'U33ar_n1', 'blackbir_');

if ($mysqli->connect_errno) {
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Articles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Créer un article</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Modifier un article</button>
          </div>
        </div>
      </div>
    
  <h2>Articles :</h2>
      <form class="form-signin" method="POST" action="addmemore.php">
<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="text" name="Auteur" class="form-control" placeholder="Auteur" required>
    <label for="AjoutAuteur">Auteur</label>
</div>

<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="text" name="Titre" class="form-control" placeholder="Titre" required>
    <label for="AjoutTitre">Titre</label>
</div>
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div  class="form-label-group">
    <input type="text" name="Ingredients" class="form-control" placeholder="Ingrédients" required>
    <label for="AjoutIngredients"><span>Ingrédients :</span></label>          
    </div>
    <div class="form-label-group">
    <input type="text" name="Ustensiles" class="form-control" placeholder="Ustensiles" required>
    <label for="AjoutUstensiles"><span>Ustensiles :</span></label>
    </div>
</div>
<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="date" name="Date" class="form-control" placeholder="Date" required>
    <label for="AjoutDate">Date</label>
</div>

<div class="custom-control custom-radio custom-control-inline" style="display: flex; justify-content: space-around; padding-bottom: 20px">
            <input type="radio" id="CategorieSelect" name="Categorie[]" class="custom-control-input" value="Aperitif">
            <label class="custom-control-label" for="Categorie">Apéritif</label>
            <input type="radio" id="CategorieSelect" name="Categorie[]" class="custom-control-input" value="Entree">
            <label class="custom-control-label" for="Categorie">Entrée</label>
            <input type="radio" id="CategorieSelect" name="Categorie[]" class="custom-control-input" value="Plat">
            <label class="custom-control-label" for="Categorie">Plat</i></label>
            <input type="radio" id="CategorieSelect" name="Categorie[]" class="custom-control-input" value="Dessert">
            <label class="custom-control-label" for="Categorie">Dessert</label>
        </div>

          
  <div class="custom-file" style="margin-bottom: 20px">
    <input type="file" class="custom-file-input" id="AddPhoto" aria-describedby="AddPhoto" name="PhotoProfile">
    <label class="custom-file-label" for="AddPhoto">Choose file</label>
  </div>

  <button class="btn btn-lg btn-prim btn-block" type="submit" id="addmebtn" >Ajouter la recette</button>
</form>
    </main>