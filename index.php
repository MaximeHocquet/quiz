<?php
    declare(strict_types=1);

?>  

<!DOCTYPE html>
     <html lang="fr">

<head>
   
    <meta charset="utf-8"/>
    <meta name="date" content="2021-12-03T13:24:17+0100" />
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
 
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
                border-color: #a770ef;
            }
            .form-control:focus {
                border-color: #a770ef;
                box-shadow: 0 4px 10px .2rem rgba(167,112,239, 0.94);
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
                background-color: #983bd8;
           }
            .btn:hover{
                 background-color: #983bd8;
                }
                .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle{background-color: #983bd8; box-shadow:none;}
                .btn-primary.focus, .btn-primary:focus{background-color: #983bd8; box-shadow: 0 4px 10px .2rem rgba(167,112,239, 0.94);}
        </style>
</head>

<body>

        <nav class="mb-4 navbar navbar-expand-lg navbar-dark " style="background-color: #983bd8">
                <a class="navbar-brand font-bold" href="index.php" style="color: white; font-weight: bold;"><img style="height: 75px;" src="./image/logo2.png" alt='image'></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText1">
                    
                    
                   
                </div>
            </nav>
     
    <h1 style='text-align: center; margin-bottom: 0px; background-color: #444; color: #fff;'>BIENVENUE SUR NOTRE QUIZZ EN LIGNE</h1>

      <section class="Acceuilpage" style="background-color: #E9E9E9;"> 


<div class="container" style="margin-top: 2cm; margin-bottom: 2cm; padding-top: 0.5cm; padding-bottom: 0.5cm; ">
  <div class="row">
    <div class="col">
            <p style="font-size: 26px; ">QUIZZI est un site de quizz en ligne ! Différents thèmes et difficultés selon votre choix !</p>
            <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post" style=" border-radius: 10px; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group" style="margin-top: 1cm;">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
                <p class="text-center"><a href="inscription.php" style=" color: #983bd8;">Inscription</a></p>
            </form>
           
           
        </div>
    </div>
    <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="min-width:100px; border-radius: 10px; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./image/presentation.png" alt="First slide" style="min-width: 200px; width: 100%; border-radius: 10px;">
                </div>
                <div class="carousel-item">
                <img  src="./image/presentation2.png" alt="Second slide" style="min-width: 200px; width: 100%; border-radius: 10px;">
                </div>
                <div class="carousel-item">
                <img src="./image/presentation.png" alt="Third slide" style="min-width: 200px; width: 100%; border-radius: 10px;">
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
 
    </section>
      <?php
            include "./include/footer.inc.php"; 
        ?>
</body>



</html>
