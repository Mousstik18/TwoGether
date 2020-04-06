<html>
    <head>
        <meta name = "google-signin-client_id" content = "728405344522-i85vsonn5d2bs7qr01cv19saa2lnd0ch.apps.googleusercontent.com" >
    </head>

    
    <body>
        <div id = "my-signin2" > </div>
        Fonction <script> onSuccess ( googleUser ) {
            console . log ( 'Connecté en tant que:' + googleUser . getBasicProfile (). getName ());
            console . journal ( erreur ); } fonction renderButton () {       gapi . signin2 . render ( 'my-signin2' , { 'scope' : 'email de profil' , 'width' : 240 , 'height' : 50 , 'longtitle' : true , 'theme' : 'dark' , 'onsuccess' : onSuccess , 'onfailure' : onFailure });</script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>