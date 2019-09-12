<?php


include "user.php";

$u=new User();
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$cin=$_POST['cin'];
$email=$_POST['email'];
$password=$_POST['password'];



$u->nom=$nom;
$u->prenom=$prenom;
$u->adresse=$adresse;
$u->cin=$cin;
$u->email=$email;
$u->password=$password;

$u->insertUser();
echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="../../html/user.html"</SCRIPT>';


?>