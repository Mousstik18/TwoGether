<!doctype html>
<html>
<head>
 <?php include('../include/head.php') ?>
</head>

<body  style="font-family: 'Mansalva', cursive;">
    <?php include('../include/navbar.php') ?>
    

<div class="form-signin">
    <div class="text-center mb-4">
    <h1 class="h1 mb-3 font-weight-normal">Verify !</h1>
    <p>Are you sure ?</p>
    </div>
    
    <ul class="list-group list-group-horizontal flex-fill" style="min-width: 550px; justify-content: center;padding: 15px">
      <li class="list-group-item" style="flex: auto"><?php echo htmlspecialchars($_POST['Email']); ?></li>
      <li class="list-group-item" style="flex: auto"><?php echo htmlspecialchars($_POST['Password']); ?></li>
      <li class="list-group-item" style="flex: auto"><?php echo htmlspecialchars($_POST['Sexe']); ?></li>
    </ul>
    
<div class="card mb-3" style="max-width: 840px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="../..." class="card-img" alt="<?php echo htmlspecialchars($_POST['Name']); ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($_POST['Name']); ?></h5>
        <p class="card-text">
            <ul>
                <li><?php echo htmlspecialchars($_POST['Nickname']); ?></li>
                <li><?php echo htmlspecialchars($_POST['DateofBirth']); ?></li>
                <li><?php echo htmlspecialchars($_POST['lang']); ?></li>
          </ul>
          </p>
      </div>
    </div>
  </div>
</div>
    
    <button class="btn btn-lg btn-prim btn-block" type="submit" id="addmemorebtn" >YES <i class="fas fa-user-astronaut"></i></button>
</div>
</body>
</html>