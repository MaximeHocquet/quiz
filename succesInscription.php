<?php
session_start();
include "inscription_traitement.php";






    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données


class JoueurValid
{



 public function __construct($cle)
    {
        $this->bdd = new Database();
        $this->bdd = $this->bdd->getBdd();
        $this->cle         = $cle;
    }
    

 public function veriftoken()
    {
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $this->bdd->prepare("SELECT * FROM joueur WHERE token ='".$this->cle."'");
        $check->execute(array($this->cle));
        $data = $check->fetch();
        $row = $check->rowCount();
       
        // Si dif à 0 alors l'utilisateur existe
        if($row = 0) return false;
        
            // Si le mail est bon niveau format
           else{
               
                // Si le mot de passe est le bon
                if($this->cle == $data['token'])
                {

 				 $update = $this->bdd->prepare("UPDATE joueur SET autorisation = '1' WHERE  token ='".$this->cle."'");
            $update->execute(array($this->cle));
    header('Location:index.php?login_err=validation_inscription');
				}
                else
                {
                	echo $data['token']."   faux";
                	echo '<br>';
                	echo $this->cle;
                }



}
}
}


$cle = $_GET['token'];
$validation = new JoueurValid($cle);
$validation->veriftoken();


