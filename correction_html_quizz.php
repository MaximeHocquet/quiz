<!DOCTYPE PHP>
<html>
    <head> <meta http-equiv="Content-type" content="text/html; charset="utf8" />
             <link href="style.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="styles.css" rel="stylesheet">

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
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="correction_html_quizz.php">Profil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link waves-effect waves-light" style="color: white;" href="test.php">Score</a>
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
         <h1 style='text-align: center; margin-bottom: 15px;'>BIENVENUE SUR NOTRE QUIZZ EN LIGNE</h1>

     
  

<div class="resultat_score" style="display: block; margin-left: auto;margin-right:auto; height: 380px; width: 500px; background-color: lightblue;
border: 6px solid gray; border-radius: 20px; padding-left: 15px; " >
<h2>Vos réponses</h2>

         <?php

isset($_GET['json_url']);
$json_quizz = $_GET['json_url'];

           $test = file_get_contents($json_quizz);

        $json = json_decode($test);

         $compteur_score = 0; 
          foreach($json->quizz as $p){

for($i=0; $i<10;$i= $i+1){

isset($_GET['reponse'.$i]);
$test_reponse = $_GET['reponse'.$i];
echo $test_reponse;

if($test_reponse == $p->débutant[$i]->réponse)
{
  $compteur_score = $compteur_score +1 ;
}
echo "<br>";
        }
      }


                 /* $test = file_get_contents("'".$json_quizz."'");*/

?>


</div>
<?php
       echo "<p style='font-weight:bold;'>Votre score total est de : ". $compteur_score . "/10 </p>";

?>

</body>
</html>