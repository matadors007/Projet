<?php
session_start(); //ouvrir une session

$base = new PDO('mysql:host=localHost;dbname=db','root','');

if(isset($_POST["Emprunter"])){//lorsque on click sur le bouton emprunter

$sql="UPDATE livre set etat = 1 , user = ? where id =?"; //requete sql pour faire un mise a jour a la table livre par changé l'etat vers 1 de l'utilisatuer recoit l'id de la session et l'id  recoit l'id a partir de la base
$req= $base->prepare($sql);
$req->execute([$_SESSION['id'], $_POST['id']]);
}


$pdostat=$base->prepare('SELECT * FROM livre where etat =0'); //requete de selectioner les livres qui ne sont pas emprunter qui sont leur etat =0 
$executeIsOk =$pdostat->execute();//executer la requete
$att=$pdostat->fetchAll();//afficher la liste

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
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
              <?php foreach ($att as $att): ?> <!-- afficher des donnees de la table dans un tableau  -->
                <td> <?= $att['titre'] ?></td>
                <td><?= $att['categorie'] ?></td>
                <td> <?= $att['nom'] ?></td>
                <td> <?= $att['prenom'] ?></td>
                <td> <?= $att['nb'] ?></td>
                <form method="POST" action=""> 
                    <input type="hidden" name="id" value="<?php echo $att['id'] ?>">
                  <td><button name="Emprunter" type="submit" class="btn btn-danger">Emprunter</button></td>
</form>
              </tr>
              <?php endforeach; ?>
              
            </tbody>
          </table>
          <br><br><br>
          
          <form class="form-rech" name="rech" onsubmit="return verif()" action="recherche.php" method="POST">
          <div class="form-group" >
             
              <input type="text" class="form-control" name="recherche" placeholder="Sasir Un Titre  "/>
              <input type="Submit" class="btnSubmi" value="Recherche" >
          </div>
          </form>


    


</body>
</html>