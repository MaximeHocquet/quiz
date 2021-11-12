<?php
    declare(strict_types=1);

    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM joueur WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   


?>  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Projet</title>
    
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>

   <link rel="stylesheet" href="style1.css" >

   <link rel="icon" type="image/png" sizes="16x16" href="./image/icone.jpg">



  </head>
    <body>
     
      <nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-danger" >
                <a class="navbar-brand font-bold" href="index.php" style="color: white; font-weight: bold;">QUIZZI.IO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Paramètres</a>
          <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>
        </div>
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
     
    <h1 style='text-align: center; margin-bottom: 0px;'>BIENVENUE <em><?php echo $data['pseudo']; ?></em> SUR NOTRE QUIZZ EN LIGNE</h1>
           <p><i>Une seule réponse par question, faîtes attention car une mauvaise réponse entraînera un point négatif. (pas encore fait)</br>
          </i><p>
  <div class='container'>

     <div style="display: block; margin-left: auto;margin-right: auto;" class="col-xl-8 col-lg-7 col-md-12 mb-4" style="margin-top: 25px; ">
        <div class="row py-6" style="margin-top: 0px;">     

        <div class="bg-white rounded shadow-sm" ><img src=""  id='imageBox' alt="toy_story" class="img-fluid card-img-top"  >
</div>

 <div style='color: black;margin-top: 0px; background-color: white; width: 815px; height: 195px; padding-top: 15px; display: block; margin-left: auto;margin-right: auto; border-radius: 0px; padding-left:20px; ' >  
    <form action='test.php'>
<div id='remplir'></div>

<script type="text/javascript">
        
        let searchParams = new URLSearchParams(window.location.search)
searchParams.has('url_json') 
let url = searchParams.get('url_json')
console.log(url);
var html1 = " ";


            html1 += "<input type='hidden' name='url_json' value='" + url + "'/>";

      $("#remplir").append(html1);

</script>

                   <p id='choix_difficulte'>Selectionner un niveau de difficulté</p>

             <div id='niveau_quizz' class='radio' style='margin-top:15px;'>
<form>
  <input style="padding-top: 2px;" id='débutant' class='show_input col-xl-6 col-lg-5 col-md-5 mb-4' label='débutant'  name= 'difficulté' type='submit' value='débutant'>
  <input  style="padding-top: 2px;"id='confirmé' class='show_input col-xl-6 col-lg-5 col-md-5 mb-4' label='confirmé'  name= 'difficulté' type='submit' value='confirmé'>
 <input  style="padding-top: 2px;"id='expert' class='show_input col-xl-6 col-lg-5 col-md-5 mb-4' label='expert'  name= 'difficulté' type='submit' value='expert'>
</div>
 </form>
        </div>
    </div>
 </div>
</div>





<div class="footer-dark" style="margin-top: 50px;">




        <footer>
            <div class="container ">
                <div class="row ">
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


 <script type="text/javascript">
        
        
switch (url) {
  case './OpenquizzDB/star_wars.json':
    let img = './image/star_wars.jpg'
        console.log(img);
        document.getElementById('imageBox').src = img;

    break;
  case './OpenquizzDB/toy_story.json':
    console.log('./OpenquizzDB/toy_story.json');
        let img1 = './image/toy_story.png'
        console.log(img1);
        document.getElementById('imageBox').src = img1;

    break;
     case './OpenquizzDB/tintin.json':
    console.log('./OpenquizzDB/tintin.json');
        let img2 = './image/tintin.jpg'
        console.log(img2);
        document.getElementById('imageBox').src = img2;

    break;

    case './OpenquizzDB/perso_imaginaire.json':
    console.log('./OpenquizzDB/perso_imaginaire.json');
        let img3 = './image/perso_fictif.jpg'
        console.log(img3);
        document.getElementById('imageBox').src = img3;

    break;
    case './OpenquizzDB/television.json':
    console.log('./OpenquizzDB/television.json');
        let img4 = './image/television.jpg'
        console.log(img4);
        document.getElementById('imageBox').src = img4;

    break;
     case './OpenquizzDB/pokemon.json':
    console.log('./OpenquizzDB/pokemon.json');
        let img5 = './image/pokemon.jpg'
        console.log(img5);
        document.getElementById('imageBox').src = img5;

    break;
  default:
    console.log('Sorry, we are out of' );
}

      </script>
</body>
</html>