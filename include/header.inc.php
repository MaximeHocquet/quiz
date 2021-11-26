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

 <script type='text/javascript' src='https://code.jquery.com/jquery-1.5.js'></script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.js"></script>
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
                      <ul class="navbar-nav mr-auto">
                      
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="#">Vos Score</a>
                        </li>
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="#">Classement</a>
                        </li>
  

  <li class="nav-item" style="margin-left: 25px; width: 500px;">                    


<form autocomplete action="niveau.php" >
  <div class="autocomplete"style="float: left; " >
    <input id="tags" type="search" name="url_json" placeholder=" Quizz" >
  </div>
    <button type="submit" style="float: left;background-color: #444;color: white;"><i class="fa fa-search"></i></button>

</form>
</li>

                    </ul>
                     <p class="form-inline" style="color: white;">
                                          <ul class="navbar-nav " style="margin-right: 65px;">

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php 

                     // echo '<img style="width:50px;" src="' . $data['avatar'] . '">';

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
     
            <script type="text/javascript">
$(function() {
    var availableTags = [
     
    {label: 'Tintin', value:'Tintin'},
    {label : 'Pokemon' , value:'Pokemon'} ,
    {label: 'Toy Story', value:'Toy Story'},
    {label: 'Star Wars', value:'Star Wars'},
    {label: 'Feuilleton Télévisé', value:'Feuilleton Télévisé'},
    {label: 'Fictif / Imaginaire', value:'Fictif / Imaginaire'}
 
        
    ];
    $( "#tags" ).autocomplete({
        source: availableTags,
    }).bind('focus', function(){ $(this).autocomplete("search"); } );
    $('#tags').val(ui.item.label); 
});

</script>
     
    <h1 style='text-align: center; margin-bottom: 0px;'>BIENVENUE <em><?php echo $data['pseudo']; ?></em> SUR NOTRE QUIZZ EN LIGNE</h1>