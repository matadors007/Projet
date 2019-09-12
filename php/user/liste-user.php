<?php


$base = new PDO('mysql:host=localHost;dbname=db','root','');


$pdostat=$base->prepare('SELECT * FROM user');
$executeIsOk =$pdostat->execute();
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
          <form action="../adherant/delete.php">
            <button class="btnSubmit" >Retour</button>
            </form>
   
    <br>
    <table class="table table-striped">
            <thead>
              <tr>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">cin</th>
                  <th scope="col">E-Mail</th>
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
              <?php foreach ($att as $att): ?>
                <!--<th scope="row"></th>-->
                <td> <?= $att['nom'] ?></td>
                <td><?= $att['prenom'] ?></td>
                <td> <?= $att['adresse'] ?></td>
                <td> <?= $att['cin'] ?></td>
                <td> <?= $att['email'] ?></td>

                <td><a href="delete.php?nom=<?=$att['id'];?>"> ><button class="btn btn-danger">Supprimer</button> </a></td> 
   
              </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>
          <br><br><br>
         

    


</body>
</html>