<?php
$base = new PDO('mysql:host=localHost;dbname=db','root','');

$pdostat=$base->prepare('DELETE  FROM user WHERE  id=:num ');
$pdostat->bindValue(':num',$_GET['nom'],PDO::PARAM_INT);
$executeIsOk =$pdostat->execute();

if($executeIsOk){
    	                echo"<script>alert('l\'utilisateur est supprimer')</script>";

}
else{
    	                echo"<script>alert('echec de suppression')</script>";

}
echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="./liste-user.php"</SCRIPT>';

?>

