 <?php
    include "./include/header.inc.php"; 
?>
         
  <div class='container' style="margin-top: 50px;">

     <div style="display: block; margin-left: auto;margin-right: auto;" class="col-xl-8 col-lg-7 col-md-12 mb-4" style="margin-top: 25px; ">
        <div class="row py-6" style="margin-top: 0px;">     

        <div class="bg-white rounded shadow-sm" ><img src=""  id='imageBox' alt="toy_story" class="img-fluid card-img-top"  >
</div>

 <div style='color: black;margin-top: 0px; background-color: white; width: 815px; height: 225px; padding-top: 15px; display: block; margin-left: auto;margin-right: auto; border-radius: 0px; padding-left:20px; ' ><div class='test1' ></div>
        </div>
    </div>
 </div>
</div>


  <script type="text/javascript" src="quizzagain3.js"></script>




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
  case 'star_wars':
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
    case 'Feuilleton télévisé': 

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
      case './OpenquizzDB/date_20.json':
    console.log('./OpenquizzDB/date_20.json');
        let img6 = './image/date_20eme.jpg'
        console.log(img6);
        document.getElementById('imageBox').src = img6;
        url = './OpenquizzDB/date_20.json';

    break;
      case './OpenquizzDB/peuple.json':
    console.log('./OpenquizzDB/peuple.json');
        let img7 = './image/peuple.jpg'
        console.log(img7);
        document.getElementById('imageBox').src = img7;
        url = './OpenquizzDB/peuple.json';

    break;

       case './OpenquizzDB/arbre_fruit.json':
    console.log('./OpenquizzDB/arbre_fruit.json');
        let img8 = './image/arbre_fruit.png'
        console.log(img8);
        document.getElementById('imageBox').src = img8;
        url = './OpenquizzDB/arbre_fruit.json';

    break;

       case './OpenquizzDB/climat.json':
    console.log('./OpenquizzDB/climat.json');
        let img9 = './image/climat.png'
        console.log(img9);
        document.getElementById('imageBox').src = img9;
        url = './OpenquizzDB/climat.json';

    break;
          case './OpenquizzDB/logiciel.json':
    console.log('./OpenquizzDB/logiciel.json');
        let img10 = './image/logiciel.png'
        console.log(img10);
        document.getElementById('imageBox').src = img10;
        url = './OpenquizzDB/logiciel.json';

    break;
            case './OpenquizzDB/internet.json':
    console.log('./OpenquizzDB/internet.json');
        let img11 = './image/internet.png'
        console.log(img11);
        document.getElementById('imageBox').src = img11;
        url = './OpenquizzDB/internet.json';

    break;
  default:
    console.log('Sorry, we are out of' );
}
   var a = url;
   var b = difficulté;
; 
      </script>

   <?php
			include "./include/footer.inc.php";	
		?>
</body>
</html>
