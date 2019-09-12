<?php


include "adherant.php";

$u = new Adherant();

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$psd=$_POST['psd'];
$confirm=$_POST['confirm'];

$pwd = md5($psd);

$u->nom=$nom;
$u->prenom=$prenom;
$u->email=$email;
$u->tel=$tel;
$u->psd=$pwd;
$u->confirm=$confirm;

$u->insertAdherant();

echo '<SCRIPT LANGUAGE="JavaScript"> document.location.href="../../html/adherant.html"</SCRIPT>';
?>




