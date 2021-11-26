    <?php
    include "./include/header.inc.php"; 
?>
   <body>
           <form method="post" enctype="multipart/form-data">
            <input type="file" name="photo">
            <input type="submit">
        </form>
    <?php

class avatarProfil
{

        public $photo_profil;
        public $email;

 public function __construct($photo_profil, $email)
    {
        $this->bdd = new Database();

        $this->bdd = $this->bdd->getBdd();
        $this->photo_profil = $photo_profil;
        $this->email = $email;
    }
    

 public function affichage_photo()
    {
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
      // Si le mot de passe est le bon
   

        $check = $this->bdd->prepare("SELECT * FROM joueur WHERE token ='".$this->email."'");
        $check->execute(array($this->email));
          $data = $check->fetch();
       
echo $data['email'];

$update = $this->bdd->prepare("UPDATE joueur SET avatar = '".$this->photo_profil."' WHERE  token ='".$this->email."'");
            $update->execute(array(

              $this->photo_profil, 
              $this->email

            ));
    

   // header('Location:index.php?login_err=validation_inscription');
        
                     //echo '<img src="' . $this->photo_profil . '">';

                    // echo $this->email;
       if(empty($this->photo_profil))
       {
        echo "pas de photo";
       }
       else{
       }    



       
       


}
}




            echo '<p>La photo a bien été envoyée.</p>';
            //echo '<img src="' . $_FILES['photo']['name'] . '">';
            //echo file_get_contents($_FILES['photo']['tmp_name']);
            $photo= base64_encode(file_get_contents($_FILES['photo']['tmp_name']));
            $avatarPhoto = new avatarProfil($photo, $data['email']);
            $avatarPhoto->affichage_photo();



    ?>
    
    </body> 