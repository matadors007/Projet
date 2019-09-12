<?php


$base = new PDO('mysql:host=localHost;dbname=db','root','');


$pdostat=$base->prepare('SELECT * FROM livre');
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
    
    <form action="../../php/user/liste-user.php">
            <button class="btnSubmit" >G.Emprunt</button>
            </form>
    
    <form action="../../html/livre.html">
            <button class="btnSubmit1" >Gestion Livre</button>
            </form>
        
          <form action="../../html/login-adherant.php">
            <button class="btnSubmit2" >Déconnexion</button>
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
                  <th scope="col">Date D'Edition</th>
                  <th scope="col">Emprunté</th>
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
              <?php foreach ($att as $att): ?>
                <!--<th scope="row"></th>-->
                <td> <?= $att['titre'] ?></td>
                <td> <?= $att['categorie'] ?></td>
                <td> <?= $att['nom'] ?></td>
                <td> <?= $att['prenom'] ?></td>
                <td> <?= $att['nb'] ?></td>
                <td> <?= $att['dat'] ?></td>
               <td><?php if($att['etat']=='1') echo 'oui'; else  echo 'non'; ?></td>
                <td><a href="supprimer.php?numLivre=<?=$att['id'] ?>"><button class="btn btn-danger">Supprimer</button></a></td>
              </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>
          <br><br><br>
          
          <!--
          <form class="form-rech" name="rech" onsubmit="return verif()">
          <div class="form-group" >
             
              <input type="text" class="form-control" name="recherche" placeholder="Sasir Une Catégorie  "/>
              <input type="Submit" class="btnSubmi" value="Recherche" >
          </div>
          </form>
          -->

    


</body>
</html>