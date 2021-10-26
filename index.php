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
   <link rel="icon" type="image/png" sizes="16x16" href="./image/icone.jpg">



    <title>QUIZZI.IO</title>
</head>
<body>
        <nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-danger" >
                <a class="navbar-brand font-bold" href="index.php" style="color: white; font-weight: bold;">QUIZZI.IO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="#">Profil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="#">Score</a>
                        </li>
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="#">Classement</a>
                        </li>
                    </ul>
                     <p class="form-inline" style="color: white;">
                       <img style="height: 50px;" src="./image/logo.png">
                    </p>
                   
                </div>
            </nav>
     
    <h1 style='text-align: center; margin-bottom: 0px;'>BIENVENUE SUR NOTRE QUIZZ EN LIGNE</h1>

      <section class="Acceuilpage" style="background-color: #E9E9E9;"> 
<div class="container">
  <div class="px-lg-5">

    <!-- For demo purpose -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-4 shadow-sm rounded banner">
          <h1 class="display-4">QUIZZ 2021 EDITION</h1>
          <p class="lead" style="margin-top: 15px;">Une grande variété de thème est proposé cet année</p>
          <p class="lead">Entrainez vous et devenez le meilleur joueur</p>
        </div>
      </div>
    </div>
    <!-- End -->
    <div class="dropdown" >
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choisir un thème
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#divertissement">Divertissement</a>
    <a class="dropdown-item" href="#culture">Culture</a>
    <a class="dropdown-item" href="#">Géographie</a>
    <a class="dropdown-item" href="#">Web</a>

  </div>
</div>
        <p style="font-weight: bold; margin-top: 25px;" id='divertissement'>THEME DIVERTISSEMENT </p>
<P><HR SIZE="4"></P>
    <div class="row" >
      <!-- Gallery item -->
    <a style=" text-decoration:none;" href="niveau.php?url_json=./OpenquizzDB/toy_story.json">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 testof" style="margin-top: 25px; ">
        <div class="bg-white rounded shadow-sm"><img src="./image/toy_story.png" alt="toy_story" class="img-fluid card-img-top " >
          <div class="p-4">
            <h5> <a href="niveau.php?url_json=./OpenquizzDB/toy_story.json" class="text-dark" style="font-weight: bold;">Toy Story</a></h5>
            <p class="small text-muted mb-0">Tester vos connaissance sur ce monde créer par PIXAR</p>
            
          </div>
        </div>
      </div></a>
      <!-- End -->
    <a style=" text-decoration:none;" href="niveau.php?url_json=./OpenquizzDB/pokemon.json">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 testof" style="margin-top: 25px;">
        <div class="bg-white rounded shadow-sm"><img src="./image/pokemon.jpg" alt="television" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="niveau.php?url_json=./OpenquizzDB/pokemon.json" class="text-dark" style="font-weight: bold;">Pokemon</a></h5>
            <p class="small text-muted mb-0">Tester vos connaissance sur ce monde créer par PIXAR</p>
            
          </div>
        </div>
      </div></a>
      <!-- Gallery item -->
       <a style=" text-decoration:none;" href="niveau.php?url_json=./OpenquizzDB/tintin.json">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 testof" style="margin-top: 25px;">
        <div class="bg-white rounded shadow-sm"><img src="./image/tintin.jpg" alt="tintin" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="niveau.php?url_json=./OpenquizzDB/tintin.json" class="text-dark" style="font-weight: bold;">Tintin</a></h5>
            <p class="small text-muted mb-0">Tester vos connaissance sur ce monde créer par PIXAR</p>
            
          </div>
        </div>
      </div></a>
      <!-- Gallery item -->
       <a style=" text-decoration:none;" href="niveau.php?url_json=./OpenquizzDB/star_wars.json">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 testof" style="margin-top: 25px;">
        <div class="bg-white rounded shadow-sm"><img src="./image/star_wars.jpg" alt="star_wars" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="niveau.php?url_json=./OpenquizzDB/star_wars.json" class="text-dark" style="font-weight: bold;">Star Wars</a></h5>
            <p class="small text-muted mb-0">Tester vos connaissance sur ce monde créer par PIXAR</p>
            
          </div>
        </div>
      </div></a>
      <!-- Gallery item -->
  <a style=" text-decoration:none;" href="niveau.php?url_json=./OpenquizzDB/television.json">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 testof" style="margin-top: 25px;">
        <div class="bg-white rounded shadow-sm"><img src="./image/television.jpg" alt="television" class="img-fluid card-img-top">
          <div class="p-4">
          <h5> <a href="niveau.php?url_json=./OpenquizzDB/television.json" class="text-dark" style="font-weight: bold;">Feuilleton Télé</a></h5>
            <p class="small text-muted mb-0">Tester vos connaissance sur ce monde créer par PIXAR</p>
            
          </div>
        </div>
      </div></a>

      <!-- New -->
    

       <a style=" text-decoration:none;" href="niveau.php?url_json=./OpenquizzDB/perso_imaginaire.json">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 testof" style="margin-top: 25px;">
        <div class="bg-white rounded shadow-sm"><img src="./image/perso_fictif.jpg" alt="marvel" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="niveau.php?url_json=./OpenquizzDB/perso_imaginaire.json" class="text-dark" style="font-weight: bold;">Fictif / Imaginaire</a></h5>
            <p class="small text-muted mb-0">Tester vos connaissance sur ses différents personnages fictifs</p>
            
          </div>
        </div>
      </div></a>
      <!--NEW-->
      
    </div>
    <p style="margin-top:50px; font-weight: bold;" id='culture'>THEME CULTURE </p>
<P ><HR SIZE="4"></P>


    <div class="row" >
      <!-- Gallery item -->
    <a style=" text-decoration:none;" href="niveau.php?url_json=./OpenquizzDB/toy_story.json">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4 testof" style="margin-top: 25px;">
        <div class="bg-white rounded shadow-sm"><img src="./image/toy_story.png" alt="toy_story" class="img-fluid card-img-top">
          <div class="p-4">
            <h5> <a href="niveau.php?url_json=./OpenquizzDB/toy_story.json" class="text-dark" style="font-weight: bold;">Toy Story</a></h5>
            <p class="small text-muted mb-0">Tester vos connaissance sur ce monde créer par PIXAR</p>
            
          </div>
        </div>



    </div>
    
</div>
       </div>              
       




        </section>

    <div class="footer-dark" style="margin-top: 50px;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>WebSite</h3>
                        <ul>
                            <li><a href="https://projetdevweb66192385.wordpress.com/" target="_blank">Présentation</a></li>
                            <li><a href="https://projetdevweb66192385.wordpress.com/projet/" target="_blank">Conception</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>A propos</h3>
                        <ul>
                            <li><a href="https://projetdevweb66192385.wordpress.com/contact/" target="_blank">Contact</a></li>
                            <li><a href="https://projetdevweb66192385.wordpress.com/projet/" target="_blank">Outils</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>QUIZZI.IO</h3>
                        <p class="small">Ce site est réaliser par 3 étudiants en Licence Inforamtique afin de concevoir un quizz en ligne avec différents utilisateurs. Vous pourrez tester vos capacité sur différents thèmes.</p>
                    </div>
                    
                </div>
                <p class="copyright">QUIZZI.IO © 2021</p>
            </div>
        </footer>
    </div>

 </body>
</html>