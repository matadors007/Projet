<?php 
if(isset($_POST['submit'])){
  session_start();
$base = new PDO('mysql:host=localHost;dbname=db','root','');

$req = $base->prepare("select * from user where email=? and psd=?");
$req->execute(array($_POST['email'],($_POST['psd'])));
$data = $req->fetch();
if(!$data)
{ echo"<script>alert('Connexion échouée')</script>";
  echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="login-user.php"</SCRIPT>  ';

}
else{ echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="../php/acceuil/lister.php"</SCRIPT>  ';

  $_SESSION['id']=$data["id"];}
} 

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login-user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login-User</title>
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
                              <label for="inputEmail">Email address</label>
                            <input type="email" name="email"  class="form-control" placeholder="Email address" required >
                            
                          </div>
            
                          <div class="form-label-group">
                              <label for="inputPassword">Password</label>
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