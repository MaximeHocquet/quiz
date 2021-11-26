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
          $compteur_score = $compteur_score +1 ;
                              $bg_color = '#a770ef';

        }else{
                    $bg_color = '#F12602';

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


                 /* $test = file_get_contents("'".$json_quizz."'");*/

?>


</div>
<?php
       echo "<br><p style=' font-size: 25px;'>Votre score total est de : </p>
       <p style='font-weight:bold; font-size: 30px; color: #983bd8;'>". $compteur_score . "/10 </p>";

?>
  
</body>
</html>
