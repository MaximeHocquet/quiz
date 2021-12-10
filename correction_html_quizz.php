 <?php
    include "./include/header.inc.php"; 
?>







<div class="resultat_score" style="background-color:" >
<h2 style=" color: #983bd8; margin-top: 1cm;">Vos réponses</h2>

         <?php
isset($_POST['difficulté']);
$niveau = $_POST['difficulté'];

isset($_POST['json_url']);
$json_quizz = $_POST['json_url'];

        $test = file_get_contents($json_quizz);

        $json = json_decode($test);



         $compteur_score = 0; 
          foreach($json->quizz as $p){
            
          $test_reponse = '<div class="container">';
      
      for($i=0; $i<10;$i= $i+1){
         if($_POST['reponse'.$i] == $p->$niveau[$i]->réponse){
          $score_question[$i] = 1;
          $compteur_score = $compteur_score +1 ;
                              $bg_color = '#a770ef';

        }else{
                    $bg_color = '#F12602';
                     $score_question[$i] = 0;
        }
        
        if($i % 2==0){
           $test_reponse.= '<div class="row justify-content-md-center">

           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 mb-4" style=" border-radius:6px; background-color:'.$bg_color.'; color:white; 
           width:15%; margin: 9px auto 9px auto; padding-top:6px;"><p>'.$_POST['reponse'.$i].'</p></div>';
            
        }
        else {
          $test_reponse.= '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 mb-4" style=" border-radius:6px;
           background-color:'.$bg_color.'; color:white; width:15%; margin: 9px auto 9px auto;padding-top:6px;"><p>'.$_POST['reponse'.$i].'</div></div>';
        }
        

      

       
        }
        $test_reponse.="</div>\n";
        echo $test_reponse;
      }



?>


</div>
<?php
       echo "<br><p style=' font-size: 25px;'>Votre score total est de : </p>
       <p style='font-weight:bold; font-size: 30px; color: #983bd8;'>". $compteur_score . "/10 </p>";




      if($_POST['json_url'] == './OpenquizzDB/pokemon.json'){
      $theme = 'divertissement';
      $nom_quiz = 'Pokemon';
    }
    if($_POST['json_url'] == './OpenquizzDB/tintin.json'){
      $theme = 'divertissement';
      $nom_quiz = "Tintin";      
    }
    if($_POST['json_url'] == './OpenquizzDB/star_wars.json'){
      $theme = 'divertissement';     
      $nom_quiz = "Star Wars";      

    }
    if($_POST['json_url'] == './OpenquizzDB/television.json'){
      $theme = 'divertissement';
      $nom_quiz = "Feuilleton télévisé";      
      
    }
    if($_POST['json_url'] == './OpenquizzDB/perso_imaginaire.json'){
      $theme = 'divertissement';  
      $nom_quiz = "Fictif / Imaginaire";      
    
    }
    if($_POST['json_url'] == './OpenquizzDB/toy_story.json'){
      $theme = 'divertissement'; 
      $nom_quiz = "Toy Story";      
    
    }
      if($_POST['json_url'] == './OpenquizzDB/date_20.json'){
      $theme = 'culture'; 
      $nom_quiz = "Date 20ème siècle ";      
    
    }
       if($_POST['json_url'] == './OpenquizzDB/peuple.json'){
      $theme = 'culture'; 
      $nom_quiz = "Peuple ";      
    
    }
     if($_POST['json_url'] == './OpenquizzDB/arbre_fruit.json'){
      $theme = 'nature'; 
      $nom_quiz = "Arbres Fruitiers ";      
    
    }
     if($_POST['json_url'] == './OpenquizzDB/climat.json'){
      $theme = 'nature'; 
      $nom_quiz = "Réchauffement Climatique ";      
    
    }
       if($_POST['json_url'] == './OpenquizzDB/logiciel.json'){
      $theme = 'web'; 
      $nom_quiz = "Logiciel ";      
    
    }
     if($_POST['json_url'] == './OpenquizzDB/internet.json'){
      $theme = 'web'; 
      $nom_quiz = "Internet ";      
    
    }
    if($theme == 'divertissement')
    {
      $id_theme = 1;
    }
    elseif($theme == 'culture')
    {
            $id_theme = 2;

    }elseif($theme == 'nature')
    {
      $id_theme=3;
    }
    elseif($theme == 'web')
    {
      $id_theme=4;
    }



$date_quizz = date('Y-m-d');

  $db = new PDO("mysql:host=mysql-amine.alwaysdata.net;dbname=amine_quizz;port=3306", "amine", "moamine01");
  // let's filter the data that comes in
  // prepare the mysql query to select the users 
  $insert = $db->prepare("INSERT INTO quizz(nom_quizz,score_total,date_quizz,difficulte_quizz, id_theme) 
    VALUES(:nom_quizz, :score_total, :date_quizz, :difficulte_quizz, :id_theme)");
  // execute the query
  $insert -> execute(array(
    'nom_quizz' => $nom_quiz,
    'score_total' => $compteur_score,
    'date_quizz' => $date_quizz,
    'difficulte_quizz' => $niveau,
    'id_theme' => $id_theme

  ));
$sql =  'SELECT MAX(id_quizz) AS max_id_quizz FROM quizz';
$statement = $db->prepare($sql);
$statement->execute(); // no need to add `$sql` here, you can take that out
$id_quizz = $statement->fetchColumn();


  $insert1 = $db->prepare("INSERT INTO joue(id_quizz, id_joueur) VALUES(:id_quizz,:id_joueur)");
  // execute the query
  $insert1 -> execute(array(
    'id_joueur' => $data['id_joueur'],
    'id_quizz' =>$id_quizz
  ));

  $insert2 = $db->prepare("INSERT INTO score_questions(
   id_quizz,
  reponse1, score_question1,
  reponse2, score_question2,
  reponse3, score_question3,
  reponse4, score_question4,
  reponse5, score_question5,
  reponse6, score_question6,
  reponse7, score_question7,
  reponse8, score_question8,
  reponse9, score_question9,
  reponse10, score_question10) 
  VALUES(
  :id_quizz,
  :reponse1, :score_question1,
  :reponse2, :score_question2,
  :reponse3, :score_question3,
  :reponse4, :score_question4,
  :reponse5, :score_question5,
  :reponse6, :score_question6,
  :reponse7, :score_question7,
  :reponse8, :score_question8,
  :reponse9, :score_question9,
  :reponse10, :score_question10)");
  // execute the query
  $insert2 -> execute(array(
    'id_quizz' =>$id_quizz,
    'reponse1' => $_POST['reponse0'],
    'score_question1' => $score_question[0],
     'reponse2' => $_POST['reponse1'],
    'score_question2' => $score_question[1],
     'reponse3' => $_POST['reponse2'],
    'score_question3' => $score_question[2],
     'reponse4' => $_POST['reponse3'],
    'score_question4' => $score_question[2],
     'reponse5' => $_POST['reponse4'],
    'score_question5' => $score_question[4],
     'reponse6' => $_POST['reponse5'],
    'score_question6' => $score_question[5],
     'reponse7' => $_POST['reponse6'],
    'score_question7' => $score_question[6],
     'reponse8' => $_POST['reponse7'],
    'score_question8' => $score_question[7],
     'reponse9' => $_POST['reponse8'],
    'score_question9' => $score_question[8],
     'reponse10' => $_POST['reponse9'],
    'score_question10' => $score_question[9]

  ));

?>
<div class='container' style="margin-top: 50px; margin-bottom: 150px;">
  <h4>Voici le classement pour le Quizz <strong style="font-weight: bold;"><?php echo $nom_quiz; ?></strong> de niveau 
    <strong style="font-weight: bold;"><?php echo $niveau ?></strong></h4>
  <p>Ce classement montre le meilleur résultat pour chaque joueur</p>
  <table class="table table-bordered" style="background-color:#983bd8; color: white; ">
    <thead>
      <tr>
        <th>Pseudo</th>
        <th>Difficulté</th>
        <th>Date</th>
        <th>Score Totale</th>
      </tr>
    </thead>
    <tbody>
      <?php

        /*$sql =  'SELECT *, MAX(score_total) FROM quizz JOIN joue ON quizz.id_quizz = joue.id_quizz JOIN score_questions ON quizz.id_quizz = score_questions.id_quizz JOIN joueur ON joue.id_joueur = joueur.id_joueur WHERE (nom_quizz ="'. $nom_quiz.'" AND difficulte_quizz="'.$niveau.'") GROUP BY pseudo';
        foreach  ($db->query($sql) as $row) {

      echo "<tr>";
        echo "<td>".$row['pseudo']."</td>";
        echo "<td>".$row['difficulte_quizz']."</td>";
        echo "<td>".$row['date_quizz']."</td>";
        echo "<td>".$row['MAX(score_total)']."/10</td>";
      echo "</tr>";



}
*/
class Classement
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
      
  
   public function affichage_classement()
      {
          // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        // Si le mot de passe est le bon
     
  
          $check  =  $this->bdd->query('SELECT *, MAX(score_total) FROM quizz JOIN joue ON quizz.id_quizz = joue.id_quizz JOIN score_questions ON quizz.id_quizz = score_questions.id_quizz JOIN joueur ON joue.id_joueur = joueur.id_joueur WHERE (nom_quizz ="'. $this->nom_quiz.'" AND difficulte_quizz="'.$this->niveau.'") GROUP BY pseudo ORDER BY score_total DESC' ) ;

    while ($row = $check->fetch()) {


      echo "<tr>";
        echo "<td>".$row['pseudo']."</td>";
        echo "<td>".$row['difficulte_quizz']."</td>";
        echo "<td>".$row['date_quizz']."</td>";
        echo "<td>".$row['MAX(score_total)']."/10</td>";
      echo "</tr>";
    }
    }
  }
$classement = new Classement($nom_quiz,$niveau);
$classement->affichage_classement();
  
        ?>
 </tbody>
  </table>
</div>
  <?php
    include "./include/footer.inc.php"; 
  ?>
     
  
</body>
</html>
