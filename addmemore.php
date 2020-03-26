<!doctype html>
<html>
<head>
 <?php include('head.php') ?>
</head>

<body  style="font-family: 'Mansalva', cursive;">
    <?php include('navbar.php') ?>
    

<div class="form-signin">
    <div class="text-center mb-4">
    <h1 class="h1 mb-3 font-weight-normal">Verify !</h1>
    <p>Are you sure ?</p>
    </div>
    
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item"><?php echo htmlspecialchars($_POST['inputEmail']); ?></li>
      <li class="list-group-item"><?php echo htmlspecialchars($_POST['inputPassword']); ?></li>
      <li class="list-group-item"><?php echo htmlspecialchars($_POST['inputSexe']); ?></li>
    </ul>
    
<div class="card mb-3" style="max-width: 840px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="<?php echo htmlspecialchars($_POST['inputName']); ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($_POST['inputName']); ?></h5>
        <p class="card-text">
            <ul>
                <li><?php echo htmlspecialchars($_POST['inputNickname']); ?></li>
                <li><?php echo htmlspecialchars($_POST['inputDateofBirth']); ?></li>
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