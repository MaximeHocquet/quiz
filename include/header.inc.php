<?php
    declare(strict_types=1);

   session_start();
require_once 'config.php'; // ajout connexion bdd 
// si la session existe pas soit si l'on est pas connecté on redirige
if (!isset($_SESSION['user'])) {
    header('Location:index.php');
    die();
}

$bdd = new Database();
$bdd = $bdd->getBdd();
// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM joueur WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();

?> 


<!DOCTYPE html>
     <html lang="fr">

<head>
   
    <meta charset="utf-8"/>
    <meta name="date" content="2021-11-26T16:28:08+0100" />
    <meta name="author" content="Amine Belhaimeur"/>
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

 <script type='text/javascript' src='https://code.jquery.com/jquery-1.5.js'></script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <title>QUIZZI.IO</title>
      <meta name="keywords" content="quizzi, quizzi.io,quizz en ligne, quizz, jeux en ligne, questions, réponses, QUIZZI.IO, QUIZZI" />
      <meta name="description" content="Quizzi est un site permettant de jouer à de nombreux quizz " />
      <meta name="google-site-verification" content="jAluI5DmZ1rq6rWMAfMCoKdSBdR5iRHIzcE27X7vKLE" />


          <meta name="viewport" content="width=device-width, initial-scale=0.7">


</head>
<div class="container-fluid" style="display: flex;
  flex-direction: column;
  height: 100vh; padding-right: 0px;
  padding-left: 0px;
  margin-right:  0px;
  margin-left: 0px;">
<body style="margin-bottom:0px;height: 100%;" >

<style>

</style>

<script>
$(document).ready(function(e){
  $("#search").keyup(function(){
    var text = $(this).val();
    if(text == ''){
    $("#show_up").hide();

    }else{
    $("#show_up").show();
    $.ajax({
      type: 'GET',
      url: 'search.php',
      data: 'txt=' + text,
      success: function(data){
        $("#show_up").html(data);
      }
    });
}
  })
});
</script>
    <nav class="mb-4 navbar navbar-expand-lg navbar-dark" style="background-color: #983bd8;" >
        <a class="navbar-brand font-bold" href="accueil.php" style="color: white; font-weight: bold;"><img style="height: 50px;" src="./image/logo2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText1" aria-controls="navbarText1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText1">
                      <ul class="navbar-nav mr-auto">
                      
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="vos_score.php">Vos Score</a>
                        </li>
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="classement.php">Classement</a>
                        </li>
  

  <li class="nav-item" style="margin-left: 25px; width: 500px;">                    


<form action = 'niveau.php'>
<input style="padding: 8px 3cm 8px 8px; border: none; background-color: whitesmoke;  font-size: 17px;  box-shadow: rgb(200 200 200) 0px 0px 6px 0.1px; border-radius: 4px;" type="text" name="url_json" id="search" placeholder="Rechercher un quizz"/>
  <div id='show_up' style="position: absolute;z-index: 2; border: none; background-color: whitesmoke;  font-size: 17px;  box-shadow: rgb(200 200 200) 0px 0px 6px 0.1px; border-radius: 4px; left: 23.7%;">
  </div>


</form>
                    </ul>
                     <p class="form-inline" style="color: white;">
                                          <ul class="navbar-nav " style="margin-right: 65px;">

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php 

                 if(empty($data['avatar'])){
                  echo "<img style='width:50px;'src='./image/logo.png'>";

                 }else{

                   // echo '<img style="width:50px;" src="' . $data['avatar'] . '">';
                 echo "<img class='rounded-circle' style='width:50px;height:50px;'src='data:image/png;base64,". base64_encode($data['avatar'])."'>";

                  }

             ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="avatar_profil.php">Profil</a>
          <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>
        </div>
      </li>        
      </ul>
                  </p>
                    
                   
                </div>
            </nav>
        <h1 class="titre_presentation" style='text-align: center; margin-bottom: 0px;'>BIENVENUE <em><?php echo $data['pseudo']; ?></em> SUR NOTRE QUIZZ EN LIGNE</h1>