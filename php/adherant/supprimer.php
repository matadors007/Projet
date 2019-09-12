<?php
$base = new PDO('mysql:host=localHost;dbname=db','root','');

$pdostat=$base->prepare('DELETE  FROM livre WHERE  id=:num ');
$pdostat->bindValue(':num',$_GET['numLivre'],PDO::PARAM_INT);
$executeIsOk =$pdostat->execute();

if($executeIsOk){
	                echo"<script>alert('le livre est supprimer')</script>";

}
else{
	                echo"<script>alert('echec de suppression')</script>";

}
echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="./delete.php"</SCRIPT>';


?>
