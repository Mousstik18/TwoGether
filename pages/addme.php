<!doctype html>
<html>
<head>
 <?php include('../include/head.php') ?>
</head>

<body  style="font-family: 'Mansalva', cursive;">
    <?php include('../include/navbar.php') ?>
    
    <form class="form-signin" method="POST" action="addmemore.php">
  <div class="text-center mb-4">
    <h1 class="h1 mb-3 font-weight-normal">Add Me</h1>
    <p></p>
  </div>
<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="email" name="Email" class="form-control" placeholder="Email address" required>
    <label for="inputEmail">Email address</label>
</div>

<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="password" name="Password" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
</div>
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div  class="form-label-group">
    <input type="name" name="Name" class="form-control" placeholder="Name" required>
    <label for="inputName"><span>Name</span></label>          
    </div>
    <div class="form-label-group">
    <input type="nickname" name="Nickname" class="form-control" placeholder="Nickname">
    <label for="inputNickname"><span>Nickname</span></label>
    </div>
</div>
<div class="form-label-group" style="max-width: 70%; display: flex; margin: auto; margin-bottom: 20px;">
    <input type="date" name="DateofBirth" class="form-control" placeholder="DateofBirth" min="2004" required>
    <label for="inputDateofBirth">Date of Birth</label>
</div>
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
        
<fieldset class="text-center mb-4">
    <h2 class="h2 mb-3 font-weight-normal">How to contact you ?</h2>
    <p></p>
    
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div  class="form-label-group" style="max-width: 70%;">
    <input type="facebook" name="Facebook" class="form-control" placeholder="Facebook">
    <label for="inputFacebook"><i class="fab fa-facebook-f"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="messenger" name="Messenger" class="form-control" placeholder="Messenger">
    <label for="inputMessenger"><i class="fab fa-facebook-messenger"></i></label>
    </div>
</div>
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div class="form-label-group" style="max-width: 70%;">
    <input type="twitter" name="Twitter" class="form-control" placeholder="Twitter">
    <label for="inputTwitter"><i class="fab fa-twitter"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="skype" name="Skype" class="form-control" placeholder="Skype">
    <label for="inputSkype"><i class="fab fa-skype"></i></label>
    </div>
</div>
        
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div class="form-label-group" style="max-width: 70%;">
    <input type="instagram" name="Instagram" class="form-control" placeholder="Instagram">
    <label for="inputInstagram"><i class="fab fa-instagram"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="whatsapp" id="inputWhatsapp" class="form-control" placeholder="Whatsapp">
    <label for="inputWhatsapp"><i class="fab fa-whatsapp"></i></label>
    </div>
</div>        
<div class="col-auto" style="display: flex; justify-content: space-between;">
    <div class="form-label-group" style="max-width: 70%;">
    <input type="snapchat" name="Snapchat" class="form-control" placeholder="Snapchat">
    <label for="inputSnapchat"><i class="fab fa-snapchat-ghost"></i></label>
    </div>
    <div class="form-label-group" style="max-width: 70%;">
    <input type="twitch" name="Twitch" class="form-control" placeholder="Twitch">
    <label for="inputTwitch"><i class="fab fa-twitch"></i></label>
    </div>
</div>
</fieldset>    
  <div class="custom-file" style="margin-bottom: 20px">
    <input type="file" class="custom-file-input" id="AddPhoto" aria-describedby="AddPhoto" name="PhotoProfile">
    <label class="custom-file-label" for="AddPhoto">Choose file</label>
  </div>
        <fieldset style="margin-bottom: 50px;">
            <div class="text-center mb-4">
            <h3 class="h3 mb-3 font-weight-normal">Wich lang do you speak ?</h3>
            <p></p>
            </div>
            <div class="row" style="display: flex; justify-content: space-around; min-width: 30px">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langFR" name="lang[]" value="FR">
                    <label class="custom-control-label" for="langFR"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/20px-Flag_of_France.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langEN" name="lang[]" value="EN">
                    <label class="custom-control-label" for="langEN"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/20px-Flag_of_the_United_Kingdom.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langES" name="lang[]" value="ES">
                    <label class="custom-control-label" for="langES"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/20px-Flag_of_Spain.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langDE" name="lang[]" value="DE">
                    <label class="custom-control-label" for="langDE"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/20px-Flag_of_Germany.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langUS" name="lang[]" value="US">
                    <label class="custom-control-label" for="langUS"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/20px-Flag_of_the_United_States.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langCH" name="lang[]" value="CH">
                    <label class="custom-control-label" for="langCH"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/20px-Flag_of_the_People%27s_Republic_of_China.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langAR" name="lang[]" value="AR">
                    <label class="custom-control-label" for="langAR"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Flag_of_Morocco.svg/20px-Flag_of_Morocco.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langRU" name="lang[]" value="RU">
                    <label class="custom-control-label" for="langRU"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/20px-Flag_of_Russia.svg.png" style="width: 20; height: 13; padding: 10 10 10 10"></label>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="langOTHER" id="langOTHER" name="lang[]" value="OTHER">
                    <label class="custom-control-label" for="langOTHER"><p style="width: 20; height: 13; padding: 10 10 10 10">Other</p></label>
                </div>
                </div>
            </div>
        </fieldset>
        
  <div class="checkbox mb-3">
    <label>
        <input type="checkbox" value="accept-rules" required id="terms"><p>By using the web site, you are agreeing to be bound by the following terms and conditions ("<a href="#">Terms of Service</a>").</p>
    </label>
  </div>
  <button class="btn btn-lg btn-prim btn-block" type="submit" id="addmebtn" >Add me <i class="fas fa-user-astronaut"></i></button>
</form>
    
</body>
</html>
