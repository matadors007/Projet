<?php
class Connexion{
    public static function getconnexion(){
        try{
            $base = new PDO('mysql:host=localHost;dbname=db','root','');
            return $base;
        }catch(PDOException $e){
            die("erreur:".$e->getMessage());
        }
    }
}
?>