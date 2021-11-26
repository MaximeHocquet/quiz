 <?php
    include "./include/header.inc.php"; 
?>
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
      case 'Star Wars':
    let img = './image/star_wars.jpg'
        console.log(img);
        document.getElementById('imageBox').src = img;
                url = './OpenquizzDB/star_wars.json';


    break;
  case './OpenquizzDB/toy_story.json':
    case 'Toy Story':

    console.log('./OpenquizzDB/toy_story.json');
        let img1 = './image/toy_story.png'
        console.log(img1);
        document.getElementById('imageBox').src = img1;
        url = './OpenquizzDB/toy_story.json';

    break;
     case './OpenquizzDB/tintin.json':
     case 'Tintin':
    console.log('./OpenquizzDB/tintin.json');
        let img2 = './image/tintin.jpg'
        console.log(img2);
        document.getElementById('imageBox').src = img2;
                url = './OpenquizzDB/tintin.json';


    break;

    case './OpenquizzDB/perso_imaginaire.json':
    case 'Fictif / Imaginaire':
    console.log('./OpenquizzDB/perso_imaginaire.json');
        let img3 = './image/perso_fictif.jpg'
        console.log(img3);
        document.getElementById('imageBox').src = img3;
                url = './OpenquizzDB/perso_imaginaire.json';


    break;
    case './OpenquizzDB/television.json':
    case 'Feuilleton Télévisé':
    console.log('./OpenquizzDB/television.json');
        let img4 = './image/television.jpg'
        console.log(img4);
        document.getElementById('imageBox').src = img4;
                url = './OpenquizzDB/television.json';


    break;
     case './OpenquizzDB/pokemon.json':
        case 'Pokemon':    
    console.log('./OpenquizzDB/pokemon.json');
        let img5 = './image/pokemon.jpg'
        console.log(img5);
        document.getElementById('imageBox').src = img5;
                url = './OpenquizzDB/pokemon.json';


    break;
  default:
    console.log('Sorry, we are out of' );
}

      html1 += "<input type='hidden' name='url_json' value='" + url + "'/>";

      $("#remplir").append(html1);

      </script>
</body>
</html>