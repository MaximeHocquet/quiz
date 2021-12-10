 <?php
    include "./include/header.inc.php"; 
  ?>
  <section class="Acceuilpage" style="background-color: #E9E9E9;"> 
    <div class="container">
        <div class="px-lg-5">

  <p style="font-weight: bold; margin-top: 25px;">CLASSEMENT </p>
  <p>Meilleur score pour chaque joueur</p>
<P><HR SIZE="4"></P>
<?php
$nom_quiz = $_GET['nomQuizz'];

class Classement_affichage
  {
  
          public $nom_quiz;
          public $niveau;
  
   public function __construct($nom_quiz, $niveau)
      {
          $this->bdd = new Database();
  
          $this->bdd = $this->bdd->getBdd();
          $this->nom_quiz = $nom_quiz;
        $this->niveau = $niveau;

      }
      
  
   public function affichage_classementfinal()
      {

          $check  =  $this->bdd->query('SELECT *, MAX(score_total) FROM quizz JOIN joue ON quizz.id_quizz = joue.id_quizz JOIN score_questions ON quizz.id_quizz = score_questions.id_quizz JOIN joueur ON joue.id_joueur = joueur.id_joueur WHERE (nom_quizz ="'. $this->nom_quiz.'" AND difficulte_quizz="'.$this->niveau.'") GROUP BY pseudo ORDER BY score_total DESC' ) ;
          echo '<table class="table table-bordered" style="background-color:#983bd8; color: white; ">';
    echo '<thead>';
      echo '<tr>';
        echo '<th>Pseudo</th>';
        echo '<th>Difficulté</th>';
        echo '<th>Date</th>';
       echo '<th>Score Totale</th>'; 
     echo '</tr>';
   echo '</thead>'; 
   echo '<tbody>'; 

    while ($row = $check->fetch()) {


      echo "<tr>";
        echo "<td>".$row['pseudo']."</td>";
        echo "<td>".$row['difficulte_quizz']."</td>";
        echo "<td>".$row['date_quizz']."</td>";
        echo "<td>".$row['MAX(score_total)']."/10</td>";
      echo "</tr>";
    }
     echo '</tbody>';
  echo "</table>";
    }
  }
  echo ' <p style="font-weight: bold; margin-top: 25px;">Niveau débutant </p>';
$classement = new Classement_affichage($nom_quiz,'débutant');
$classement->affichage_classementfinal();
  echo ' <p style="font-weight: bold; margin-top: 25px;">Niveau confirmé </p>';

$classement1 = new Classement_affichage($nom_quiz,'confirmé');
$classement1->affichage_classementfinal();
  echo ' <p style="font-weight: bold; margin-top: 25px;">Niveau expert </p>';

$classement2 = new Classement_affichage($nom_quiz,'expert');
$classement2->affichage_classementfinal();
  ?>

  

</section><?php
            include "./include/footer.inc.php"; 
        ?><body></html>