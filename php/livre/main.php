<?php


include "livre.php";

$u=new Livre();

//$id=$_REQUEST['id'];
$titre=$_POST['titre'];
$categorie=$_POST['categorie'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$nb=$_POST['nb'];
$dat=$_POST['dat'];


//$u->id=$id;
$u->titre=$titre;
$u->categorie=$categorie;
$u->nom=$nom;
$u->prenom=$prenom;
$u->nb=$nb;
$u->dat=$dat;



$u->insertLivre();
echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="../../html/livre.html"</SCRIPT>';


?>