<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données


class JoueurConnect
{

        private $email;
        private $password;


 public function __construct($email, $password)
    {
        $this->bdd = new Database();
        $this->bdd = $this->bdd->getBdd();
        $this->email            = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        $this->password         = $password;
    }
    

 public function connexion()
    {
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $this->bdd->prepare('SELECT pseudo, email, password, token, autorisation FROM joueur WHERE email = ?');
        $check->execute(array($this->email));
        $data = $check->fetch();
        $row = $check->rowCount();
       
        // Si dif à 0 alors l'utilisateur existe
        if($row = 0) return false;
        
            // Si le mail est bon niveau format
           else{
                try{
        if($data['autorisation'] == 1){
            if(filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($this->password, $data['password']))
                {
                    // On créer la session et on redirige sur accueil.php
                    $_SESSION['user'] = $data['token'];

}
else
{
    return false;
}
}
else
{
    return false;
}
}
else

{
    return false;
}
}catch (PDOException $x) {
            return false;
        }
}

return true;

}
}







    if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); // email transformé en minuscule
        

        

  $joueurConnect = new JoueurConnect($email, $password);
    if ($joueurConnect->connexion()) {
        // On redirige avec le message de succès
        header('Location:accueil.php?login_err=success');
    } else {
        header('Location: index.php?login_err=already');
        
    }
}
