<?php
include "connect.php";

class User{
    
    public $nom;
    public $prenom;
    public $adresse;
    public $cin;
    public $email;
    public $password;
    public $id;
   


    function insertUser(){
        $base=connexion::getconnexion();
        $req="INSERT INTO user(nom,prenom,adresse,cin,email,psd) VALUES('".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->cin."','".$this->email."','".$this->password."')";
        $nbligne=$base->exec($req);

            if($nbligne==1){
                                        echo"<script>alert('succes')</script>";
            }
            else{
                echo"<script>alert('pas de success')</script>";
            }
    }

}

?>