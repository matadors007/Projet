<?php
include "connect.php";

class Livre{
    public $id;
    public $titre;
    public $categorie;
    public $nom;
    public $prenom;
    public $dat;
    public $nb;

    function insertLivre(){
        $base=connexion::getconnexion();
        $req="INSERT INTO livre(titre,categorie,nom,prenom,nb,dat) VALUES('".$this->titre."','".$this->categorie."','".$this->nom."','".$this->prenom."','".$this->nb."','".$this->dat."')";
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