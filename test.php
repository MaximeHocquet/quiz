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

 <div style='color: black;margin-top: 0px; background-color: white; width: 815px; height: 195px; padding-top: 15px; display: block; margin-left: auto;margin-right: auto; border-radius: 0px; padding-left:20px; ' ><div class='test1' ></div>
        </div>
    </div>
 </div>
</div>


  <script type="text/javascript" src="quizzagain3.js"></script>



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
        
        let searchParams = new URLSearchParams(window.location.search)
searchParams.has('url_json') 
let url = searchParams.get('url_json')
console.log(url);

 let searchParams1 = new URLSearchParams(window.location.search)
searchParams1.has('difficulté') 
let difficulté = searchParams.get('difficulté')
console.log(difficulté);

switch (url) {
  case './OpenquizzDB/star_wars.json':
    let img = './image/star_wars.jpg'
        console.log(img);
        document.getElementById('imageBox').src = img;

    break;
  case './OpenquizzDB/toy_story.json':
    console.log('./OpenquizzDB/toy_story.json');
        let img1 = './image/toy_story.png'
        console.log(img1);
        document.getElementById('imageBox').src = img1;

    break;
     case './OpenquizzDB/tintin.json':
    console.log('./OpenquizzDB/tintin.json');
        let img2 = './image/tintin.jpg'
        console.log(img2);
        document.getElementById('imageBox').src = img2;

    break;

    case './OpenquizzDB/perso_imaginaire.json':
    console.log('./OpenquizzDB/perso_imaginaire.json');
        let img3 = './image/perso_fictif.jpg'
        console.log(img3);
        document.getElementById('imageBox').src = img3;

    break;
    case './OpenquizzDB/television.json':
    console.log('./OpenquizzDB/television.json');
        let img4 = './image/television.jpg'
        console.log(img4);
        document.getElementById('imageBox').src = img4;

    break;
     case './OpenquizzDB/pokemon.json':
    console.log('./OpenquizzDB/pokemon.json');
        let img5 = './image/pokemon.jpg'
        console.log(img5);
        document.getElementById('imageBox').src = img5;

    break;
  default:
    console.log('Sorry, we are out of' );
}
   var a = url;
   var b = difficulté;

      </script>
</body>
</html>