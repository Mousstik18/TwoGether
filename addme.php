<!doctype html>
<html>
<head>
 <?php include('head.php') ?>
</head>

<body  style="font-family: 'Mansalva', cursive;">
    <?php include('navbar.php') ?>
    
    <form class="form-signin" method="POST" action="addmemore.php">
  <div class="text-center mb-4">
    <h1 class="h1 mb-3 font-weight-normal">Add Me</h1>
    <p></p>
  </div>
<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
    <label for="inputEmail">Email address</label>
</div>

<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
</div>
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div  class="form-label-group">
    <input type="name" id="inputName" class="form-control" placeholder="Name" required>
    <label for="inputName"><span>Name</span></label>          
    </div>
    <div class="form-label-group">
    <input type="nickname" id="inputNickname" class="form-control" placeholder="Nickname">
    <label for="inputNickname"><span>Nickname</span></label>
    </div>
</div>
<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="date" id="DateofBirth" class="form-control" placeholder="DateofBirth" min="2004" required>
    <label for="inputDateofBirth">Date of Birth</label>
</div>
        
<fieldset class="text-center mb-4">
    <h2 class="h2 mb-3 font-weight-normal">How to contact you ?</h2>
    <p></p>
    
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div  class="form-label-group" style="max-width: 70%;">
    <input type="facebook" id="inputFacebook" class="form-control" placeholder="Facebook">
    <label for="inputFacebook"><i class="fab fa-facebook-f"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="messenger" id="inputMessenger" class="form-control" placeholder="Messenger">
    <label for="inputMessenger"><i class="fab fa-facebook-messenger"></i></label>
    </div>
</div>
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div class="form-label-group" style="max-width: 70%;">
    <input type="twitter" id="inputTwitter" class="form-control" placeholder="Twitter">
    <label for="inputTwitter"><i class="fab fa-twitter"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="skype" id="inputSkype" class="form-control" placeholder="Skype">
    <label for="inputSkype"><i class="fab fa-skype"></i></label>
    </div>
</div>
        
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div class="form-label-group" style="max-width: 70%;">
    <input type="instagram" id="inputInstagram" class="form-control" placeholder="Instagram">
    <label for="inputInstagram"><i class="fab fa-instagram"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="whatsapp" id="inputWhatsapp" class="form-control" placeholder="Whatsapp">
    <label for="inputWhatsapp"><i class="fab fa-whatsapp"></i></label>
    </div>
</div>        
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div class="form-label-group" style="max-width: 70%;">
    <input type="snapchat" id="inputSnapchat" class="form-control" placeholder="Snapchat">
    <label for="inputSnapchat"><i class="fab fa-snapchat-ghost"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="twitch" id="inputTwitch" class="form-control" placeholder="Twitch">
    <label for="inputTwitch"><i class="fab fa-twitch"></i></label>
    </div>
</div>
</fieldset>    
      <div class="form-group" style="margin: 20 20 20 20;">
        <label for="photo">Photo : </label>
        <input type="file" class="form-control-file" id="addphoto">
      </div>

        <fieldset style="margin-bottom: 50px;">
            <div class="text-center mb-4">
            <h3 class="h3 mb-3 font-weight-normal">Wich lang do you speak ?</h3>
            <p></p>
            </div>
            <div class="row" style="display: flex; justify-content: space-around; min-width: 30px">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langFR">
                    <label class="custom-control-label" for="langFR"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/20px-Flag_of_France.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langEN">
                    <label class="custom-control-label" for="langEN"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/20px-Flag_of_the_United_Kingdom.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langES">
                    <label class="custom-control-label" for="langES"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/20px-Flag_of_Spain.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langDE">
                    <label class="custom-control-label" for="langDE"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/20px-Flag_of_Germany.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langUS">
                    <label class="custom-control-label" for="langUS"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/20px-Flag_of_the_United_States.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langCH">
                    <label class="custom-control-label" for="langCH"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/20px-Flag_of_the_People%27s_Republic_of_China.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langAR">
                    <label class="custom-control-label" for="langAR"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/20px-Flag_of_Morocco.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langRU">
                    <label class="custom-control-label" for="langRU"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/20px-Flag_of_Russia.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langOTHER">
                    <label class="custom-control-label" for="langOTHER"><p style="width: 20; height: 13; padding: 10 10 10 10">Other</p></label>
                </div>
                </div>
            </div>
        </fieldset>
        
  <div class="checkbox mb-3">
    <label>
        <input type="checkbox" value="accept-rules" required id="terms"><p>By using the web site, you are agreeing to be bound by the following terms and conditions ("<a href="#">Terms of Service</a>").</p>
        <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-prim btn-block" type="submit" id="addmebtn" >Add me <i class="fas fa-user-astronaut"></i></button>
</form>
    
</body>
</html>
