<?php
    declare(strict_types=1);

?>  

<!DOCTYPE html>
     <html lang="fr">

<head>
   
    <meta charset="utf-8"/>
    <meta name="date" content="21/03/2021"/>
    <meta name="author" content="Amine Belhaimeur"/>
    <meta name="description" content="Projet" />
    <meta name="keywords" content="td, index"/>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logosite.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>QUIZZI.IO</title>
</head>
<body>
        <nav class="mb-4 navbar navbar-expand-lg navbar-dark" style="background-color: #983bd8;" >
        <a class="navbar-brand font-bold" href="index.php" style="color: white; font-weight: bold;"><img style="height: 50px;" src="./image/logo2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText1">
                      
                    
                   
                </div>
            </nav>
     
    <h1 style='text-align: center; margin-bottom: 0px;'>BIENVENUE SUR NOTRE QUIZZ EN LIGNE</h1>

      <section class="Acceuilpage" style="background-color: #E9E9E9;"> 
<img href='./image/logo2.png'>
<div class="container" style="margin-top: 35px;">
  <div class="row">

              <div id="carouselExampleIndicators " class="carousel slide" data-ride="carousel" style="width: 400px;display: inline-block; float: left;margin-right: 150px;margin-top: 46px;margin-left: 150px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./image/presentation.png" alt="First slide" style=" border-radius: 10px; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/presentation2.png" alt="Second slide" style=" border-radius: 10px; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/presentation.png" alt="Third slide" style=" border-radius: 10px; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    </div>
  </div>
  
</div>
<script type="text/javascript">
    $('.carousel').carousel({
  interval: 4500
})
</script>
<div class="login-form" style="float: left;display: inline-block;">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                         case 'validation_inscription':
                        ?>
                            <div class="alert alert-success">
                                Votre compte a bien été validé !
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                Email ou Mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'inscription_reussi':
                        ?>
                            <div class="alert alert-success">
                                Inscription effectué
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
              
            <div style=" width: 100%;">
            <form action="connexion.php" method="post" >
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group" >
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
                            <p class="text-center"><a href="inscription.php" >Inscription</a></p>

            </form>
        </div>
                </div>

        <style>
            .login-form {
                width: 420px;
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