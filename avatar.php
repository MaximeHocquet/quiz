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
        $check = $this->bdd->prepare("SELECT * FROM joueur WHERE  email='".$this->email."'");
        $check->execute(array($this->email));
        $data = $check->fetch();
        $row = $check->rowCount();
       
          $updatePhoto = $this->bdd->prepare("UPDATE joueur SET avatar='".$this->photo_profil."' WHERE email='".$this->email."'");

   // header('Location:index.php?login_err=validation_inscription');
        
                     //echo '<img src="' . $this->photo_profil . '">';

                    // echo $this->email;
       if(empty($this->photo_profil))
       {
        echo "pas de photo";
       }
       else{
        echo "";

       }    



       
       


}
}








    if (isset($_FILES['photo']['tmp_name'])) {
            //echo '<p>La photo a bien été envoyée.</p>';
        $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
                                //echo '<img src="' . $_FILES['photo']['name'] . '">';
        if($retour) {

           $avatarPhoto = new avatarProfil(file_get_contents($_FILES['photo']['name']), $data['email']);
            $avatarPhoto->affichage_photo();

            echo $_FILES['photo']['name'];
        }
      }



    ?>
    </body> 