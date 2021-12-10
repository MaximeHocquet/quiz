<?php
    declare(strict_types=1);

?>  

<!DOCTYPE html>
     <html lang="fr">

<head>
   
    <meta charset="utf-8"/>
    <meta name="date" content="21/03/2021"/>
    <meta name="author" content="Amine Belhaimeur"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style1.css" >
   <link rel="icon" type="image/png" sizes="16x16" href="./image/logo2.png">
      <meta name="keywords" content="quizzi, quizzi.io,quizz en ligne, quizz, jeux en ligne, questions, réponses, QUIZZI.IO, QUIZZI" />
      <meta name="description" content="Quizzi est un site permettant de jouer à de nombreux quizz " />
      <meta name="google-site-verification" content="jAluI5DmZ1rq6rWMAfMCoKdSBdR5iRHIzcE27X7vKLE" />
<title>QUIZZI.IO</title>

 <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {         
                font-size: 15px;
                font-weight: bold;
            }
        </style>
</head>
<body>
        <nav class="mb-4 navbar navbar-expand-lg navbar-dark " style="background-color: #983bd8;">
                <a class="navbar-brand font-bold" href="index.php" style="color: white; font-weight: bold;">QUIZZI.IO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText1">
                    
                    
                   
                </div>
            </nav>
     
    <h1 style='text-align: center; margin-bottom: 0px; background-color: #444; color: #fff;'>BIENVENUE SUR NOTRE QUIZZ EN LIGNE</h1>

      <section class="Acceuilpage" style="background-color: #E9E9E9;"> 



        <div class="login-form" style="margin-top: 75px;">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>

                        <?php 
                          break;
                        case 'mail_send':
                        ?>
                            <div class="alert alert-success">
                                Vous venez de recevoir un <strong>mail de notre part !</strong> Celui-ci contiendra le lien d'activation de votre compte.
                            </div>
                            
                        <?php 


                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div> 
                                               <p class="text-center"><a href="index.php">Connexion</a></p>
  
            </form>


               




        </div></section>
         <?php
            include "./include/footer.inc.php"; 
        ?>
       
        </body>
</html>
