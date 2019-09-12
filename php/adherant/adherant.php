<?php
include "connect.php";

class Adherant{
    public $nom;
    public $prenom;
    public $email;
    public $tel;
    public $psd;
    public $confirm;


    function insertAdherant(){
        $base=connexion::getconnexion();
        $req="INSERT INTO adherant(nom,prenom,email,tel,psd) VALUES('".$this->nom."','".$this->prenom."','".$this->email."','".$this->tel."','".$this->psd."')";
        $nbligne=$base->exec($req);

            if($nbligne==1){
                echo"<script>alert('succes')</script>";
            }
            else{
                                echo"<script>alert('pas de succes')</script>";

            }
    }

}

?>