<?php 

$base = new PDO('mysql:host=localHost;dbname=db','root','');

$pdostat=$base->prepare('SELECT * FROM livre WHERE titre like "%'.$_POST['recherche'].'%" and etat=0'); //requere sql pour faire une recherche sur un ivre qui n'est pas emprunter et la recherche se fait sur la titire
$executeIsOk =$pdostat->execute();
$att=$pdostat->fetchAll();
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
            <form action="emprunt.php">
            <button class="btnSubmit2" >les livres empruntés</button>
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
                  <th scope="col">Emprunter</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
              <?php foreach ($att as $att): ?>
               
                <td> <?= $att['titre'] ?></td>
                <td><?= $att['categorie'] ?></td>
                <td> <?= $att['nom'] ?></td>
                <td> <?= $att['prenom'] ?></td>
                <td> <?= $att['nb'] ?></td>
                <td>><button class="btn btn-danger">Emprunter</button></td>
              </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>
          <br><br><br>
          
          <form class="form-rech" name="rech" onsubmit="return verif()" action="recherche.php" method="POST">
          <div class="form-group" >
             
              <input type="text" class="form-control" name="recherche" placeholder="Sasir Une Catégorie  "/>
              <input type="Submit" class="btnSubmi" value="Recherche" >
          </div>
          </form>
          

    


</body>
</html>