<?php
		include "./include/header.inc.php";	
	?>
	<section class="Acceuilpage" style="background-color: #E9E9E9; margin-top : 30px; position: relative; margin-bottom: 450px; "> 
		<div class="container">
			 <h2>Voici vos scores</h2>
  <p>Cliquer sur détails pour accéder aux réponses avec leur score</p>            
  <table class="table table-bordered" style="background-color:#983bd8; color: white; ">
    <thead>
      <tr>
        <th>Quizz</th>
        <th>Difficulté</th>
        <th>Date</th>
        <th>Score Totale</th>
      </tr>
    </thead>
    <tbody>
			<?php
			 
class Vos_score
  {
  
          public $id_joueur;
  
   public function __construct($id_joueur)
      {
          $this->bdd = new Database();
  
          $this->bdd = $this->bdd->getBdd();
          $this->id_joueur = $id_joueur;

      }
      
  
   public function affichage_voscore()
      {
          // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        // Si le mot de passe est le bon
     

  $check =  $this->bdd->query('SELECT * FROM quizz JOIN joue ON  quizz.id_quizz = joue.id_quizz JOIN score_questions ON  quizz.id_quizz = score_questions.id_quizz 
			   WHERE id_joueur ="'. $this->id_joueur.'"');

    while ($row = $check->fetch()) {

     echo "<tr>";
        echo "<td>".$row['nom_quizz']."</td>";
        echo "<td>".$row['difficulte_quizz']."</td>";
        echo "<td>".$row['date_quizz']."</td>";
        echo "<td>".$row['score_total']."/10</td>";
      echo "</tr>";
    }
    }
  }
$vos_score = new Vos_score($data['id_joueur']);
$vos_score->affichage_voscore();
  
        ?>

  
			  
 </tbody>
  </table>



		</div>

	</section> 
   <?php
            include "./include/footer.inc.php"; 
        ?>
     </body></div></html>