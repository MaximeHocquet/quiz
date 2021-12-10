    <?php
    include "./include/header.inc.php"; 

if(isset($_POST["valider"]))
{


    $req = $bdd->prepare("UPDATE joueur SET avatar = :image WHERE  email= :email");
    $req->execute(array(
            'image' => file_get_contents($_FILES["image"]["tmp_name"]),
            'email' => $data['email']

));

}

?> 
   <body>
    <div class="container" style="background-color: white; border: 1px solid black; margin-top: 50px; padding-top: 25px; width: 550px; border-radius: 20px; padding-bottom: 25px;">
    <?php
          

                 if(empty($data['avatar'])){
                  echo "<img style='width:150px;'src='./image/logo.png'>";

                 }else{

                   // echo '<img style="width:50px;" src="' . $data['avatar'] . '">';
                 echo "<img class='rounded-circle' style='width:150px;height:150px;'src='data:image/png;base64,". base64_encode($data['avatar'])."'>";

                  }

             
                ?>
                <HR>

           <form name="fo" method="post" enctype="multipart/form-data">
            <h3 style="font-weight: bold; margin-bottom: 10px;"> Changer d'Avatar</h3>
            <input type="file" name="image" /><br /><br />
            <input type="submit" name="valider" value="Charger">
        </form><HR>
         <h3 style="font-weight: bold; margin-bottom: 10px;"> Profil</h3>
         <?php
            echo"Pseudo : ". $data['pseudo'];
            echo "<br>";
            echo"Email : ". $data['email'];

         ?>

 
</div>
    
     <?php
            include "./include/footer.inc.php"; 
        ?>
     </body></html>
