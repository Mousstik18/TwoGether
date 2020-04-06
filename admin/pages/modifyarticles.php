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
    
  <h2>Modification</h2>
    
    <div class="btn-group">
        <button class="btn btn-secondary btn-lg" type="button">
    Sélectionner l'article :
        </button>
        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Article n°236</a>
            <a class="dropdown-item" href="#">Article n°32843 </a>
            <a class="dropdown-item" href="#">Article n°1654</a>
        </div>
    </div>
    
    <div class="co-md-10 anti-blog">
        <div class="card border-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body text-success">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    
    
    
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
        <!-- SELECTEUR CATEGORIES

<div class="custom-control custom-radio custom-control-inline" style="display: flex; justify-content: space-around; padding-bottom: 20px">
            <input type="radio" id="GenderSelect" name="Gender[]" class="custom-control-input" value="Male">
            <label class="custom-control-label" for="Gender">Male <i class="fas fa-mars"></i></label>
            <input type="radio" id="GenderSelect" name="Gender[]" class="custom-control-input" value="Female">
            <label class="custom-control-label" for="Gender">Female <i class="fas fa-venus"></i></label>
            <input type="radio" id="GenderSelect" name="Gender[]" class="custom-control-input" value="Neutral">
            <label class="custom-control-label" for="Gender">Neutral <i class="fas fa-neuter"></i></label>
            <input type="radio" id="GenderSelect" name="Gender[]" class="custom-control-input" value="Other">
            <label class="custom-control-label" for="Gender">Other <i class="fas fa-genderless"></i>/<i class="fas fa-transgender"></i>/<i class="fas fa-transgender-alt"></i>/<i class="fas fa-mercury"></i></label>
        </div>

-->
          
  <div class="custom-file" style="margin-bottom: 20px">
    <input type="file" class="custom-file-input" id="AddPhoto" aria-describedby="AddPhoto" name="PhotoProfile">
    <label class="custom-file-label" for="AddPhoto">Choose file</label>
  </div>

  <button class="btn btn-lg btn-prim btn-block" type="submit" id="addmebtn" >Ajouter la recette</button>
</form>
    </main>