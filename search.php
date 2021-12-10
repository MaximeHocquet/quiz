<?php
// create a new function
function search($text){
	
	// connection to the Ddatabase
	$db = new PDO("mysql:host=mysql-amine.alwaysdata.net;dbname=amine_quizz;port=3306", "amine", "moamine01");
	// let's filter the data that comes in
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the users 
	$get_name = $db->prepare("SELECT titre_quizz FROM liste_quizz WHERE titre_quizz LIKE concat(:titre_quizz, '%')");
	// execute the query
	$get_name -> execute(array('titre_quizz' => $text));
	// show the users on the page
	while($url_json = $get_name->fetch(PDO::FETCH_ASSOC)){
		// show each user as a link
		if($url_json['titre_quizz'] == 'Pokemon'){
			$url = './OpenquizzDB/pokemon.json';
		}
		if($url_json['titre_quizz'] == 'Tintin'){
			$url = './OpenquizzDB/tintin.json';
		}
		if($url_json['titre_quizz'] == 'Star Wars'){
			$url = './OpenquizzDB/star_wars.json';
		}
		if($url_json['titre_quizz'] == 'Feuilleton télévisé'){
			$url = './OpenquizzDB/television.json';
		}
		if($url_json['titre_quizz'] == 'Fictif / Imaginaire'){
			$url = './OpenquizzDB/perso_imaginaires.json';
		}
		if($url_json['titre_quizz'] == 'Toy Story'){
			$url = './OpenquizzDB/toy_story.json';
		}
			if($url_json['titre_quizz'] == 'Date 20ème siècle'){
			$url = './OpenquizzDB/date_20.json';
		}
			if($url_json['titre_quizz'] == 'Peuple'){
			$url = './OpenquizzDB/peuple.json';
		}
			if($url_json['titre_quizz'] == 'Arbres Fruitiers'){
			$url = './OpenquizzDB/arbre_fruit.json';
		}
		if($url_json['titre_quizz'] == 'Réchauffement Climatique'){
			$url = './OpenquizzDB/climat.json';
		}
		if($url_json['titre_quizz'] == 'Logiciel'){
			$url = './OpenquizzDB/logiciel.json';
		}
		if($url_json['titre_quizz'] == 'Internet'){
			$url = './OpenquizzDB/internet.json';
		}
		echo '<a href="niveau.php?url_json='.$url.'">'.$url_json['titre_quizz'].'</a>';
		
	}
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>