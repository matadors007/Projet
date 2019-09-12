<?php
session_start();

$base = new PDO('mysql:host=localHost;dbname=db','root','');

if(isset($_POST["Rembourser"])){

$sql="UPDATE livre set etat = 0 , user = ? where id =?";
       
      $req= $base->prepare($sql);
$req->execute([$_SESSION['id'], $_POST['id']]);
}


$pdostat=$base->prepare('SELECT * FROM livre where etat =1 and user=?');
$executeIsOk =$pdostat->execute([$_SESSION['id']]);
$att=$pdostat->fetchAll();
//var_dump($att);
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/acceuil-user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      
    <title>Acceuil</title>
    </head>
    <body>
          <br>
          <form action="../../html/login-user.php">
            <button class="btnSubmit2" >Déconnexion</button>
            </form>
            <br>
            <form action="lister.php">
            <button class="btnSubmit2" >La liste</button>
            </form>
   
    <br>
    <table class="table table-striped">
            <thead>
              <tr>
                  <th scope="col">Titre</th>
                  <th scope="col">Catégorie</th>
                  <th scope="col">Nom  Auteur</th>
                  <th scope="col">Prenom Auteur</th>
                  <th scope="col">Nombre Disponible</th>
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
              <?php foreach ($att as $att): ?>
                <!--<th scope="row"></th>-->
                <td> <?= $att['titre'] ?></td>
                <td><?= $att['categorie'] ?></td>
                <td> <?= $att['nom'] ?></td>
                <td> <?= $att['prenom'] ?></td>
                <td> <?= $att['nb'] ?></td>
                   <form method="POST" action=""> 
                      <input type="hidden" name="id" value="<?php echo $att['id'] ?>">
                         <td><button name="Rembourser" type="submit" class="btn btn-danger">Rembourser</button></td>
                    </form>
              </tr>
            <?php endforeach; ?>  
            </tbody>
          </table>
</body>
</html>