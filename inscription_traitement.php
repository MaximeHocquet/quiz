<?php
session_start();
include_once 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

class Joueur
{
  public $pseudo;
    public $email;
    public $password;
    public $token;
    public $bdd;

    public function __construct($email, $password, $pseudo,$token)
    {
        echo $this->email;
        $this->bdd = new Database();
        $this->bdd = $this->bdd->getBdd();
        $this->pseudo           = $pseudo;
        $this->email            = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        $this->password         = $password;
        $this->token = $token;

    }
    
    public function inscription_joueur()
    {
        // On vérifie si l'utilisateur existe
        $check = $this->bdd->prepare('SELECT pseudo, email, password FROM joueur WHERE email = ?');
        $check->execute(array($this->email));
        $row = $check->rowCount();
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if ($row != 0) return false;
        // On hash le mot de passe avec Bcrypt, via un coût de 12
        $cost = ['cost' => 12];
        $this->password = password_hash($this->password, PASSWORD_BCRYPT, $cost);

        // On stock l'adresse IP
        $this->ip = $_SERVER['REMOTE_ADDR'];

        // On insère dans la base de données
        try {

            $insert = $this->bdd->prepare('INSERT INTO joueur(pseudo, email, password, token) VALUES(:pseudo, :email, :password, :token)');
            $insert->execute(array(
                'pseudo' => $this->pseudo,
                'email' => $this->email,
                'password' => $this->password,
                'token' => $this->token
            ));
        } catch (PDOException $x) {
            return false;
        }
        return true;
    }


  public function __getToken($token) {
 
      return $this->token;
    }
       



}

 // Si les variables existent et qu'elles ne sont pas vides
if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype'])) {
    // Patch XSS
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);
    if (strlen($pseudo) >= 100) {
        header('Location: inscription.php?reg_err=pseudo_length'); // On verifie que la longueur du pseudo <= 100
        return;
    }
    if (strlen($email) >= 100) { // On verifie que la longueur du mail <= 100
        header('Location: inscription.php?reg_err=email_length');
        return;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Si l'email est de la bonne forme
        header('Location: inscription.php?reg_err=email');
        return;
    }
    if ($password !== $password_retype) { // si les deux mdp saisis sont bon
        header('Location: inscription.php?reg_err=password');
        return;
    }

   $_SESSION['pseudo'] = $pseudo;
$_SESSION['email']   = $email ;
$_SESSION['$password'] = $password ;


$joueur = new Joueur($email, $password, $pseudo,bin2hex(openssl_random_pseudo_bytes(64)));
if($joueur->inscription_joueur()){ 

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'quizziwebsite@gmail.com';                     //SMTP username
    $mail->Password   = 'mcejbqgxdgxgjjyr';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('quizziwebsite@gmail.com', 'QuizziWebSite');
    $mail->addAddress(trim($_POST["email"]));    //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Activation de votre Compte Quizzi';
    $mail->Body    = "Bonjour, cliquer sur ce lien afin d'activer votre compte Quizzi : <a href='https://amine.alwaysdata.net/succesInscription.php?token=".$joueur->__getToken($token)."'> Cliquer Ici</a>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('Location:inscription.php?reg_err=mail_send');
  


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
else{
     header('Location: inscription.php?reg_err=already');
        return;
}
             
}


