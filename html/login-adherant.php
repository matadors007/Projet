<?php 
if(isset($_POST['submit'])){ //test de click sur le bouton
  session_start();// ouvrir une session 
$base = new PDO('mysql:host=localHost;dbname=db','root','');//connexion a la base

$req = $base->prepare("select * from adherant where email=? and psd=?");//requete sql de selection tous les chanps de la base dans le cas l'email et le password ce qui ecrit par l'utilisateur dans la formulaire
$req->execute(array($_POST['email'],($_POST['psd'])));//prendre l'email et le mot de passe saisie par l'utilisateur
$data = $req->fetch();//prendre tous les donnees a partir de la base
if(!$data) //test si les données saisie ne sont pas le meme dans la base et retournée une erreur avec retourne a la meme page
{ echo"<script>alert('Connexion échouée')</script>";
  echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="login-adherant.php"</SCRIPT>  ';

}
else
{ echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="../php/adherant/delete.php"</SCRIPT>  ';
//lorsque les données saisie sont les meme dans la base il va acceder a la page 
  $_SESSION['id']=$data["id"]; // la session ouvrir avec un id d'un utilisateur il va recoit que les données de l'utilisateur de cette id 
                               //chaque utilisateur a une session unique 
  }
} 

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login-user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <a class="home-photo" href="home.html"></a>
    
        <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                      <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" method="POST" action="" name="log" onsubmit="return verif()">
                          <div class="form-label-group" >
                              <label for="inputEmail">Adresse E-Mail</label>
                            <input type="email"  class="form-control"name="email" placeholder="Email address" required >
                            
                          </div>
            
                          <div class="form-label-group">
                              <label for="inputPassword">Mot De Passe</label>
                            <input type="password" name="psd"  class="form-control" placeholder="Password" >
                            <br>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Login</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <script src="../js/login.js"></script>
</body>
</html>