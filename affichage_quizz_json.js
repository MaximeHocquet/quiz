window.onload = function(){
 $().ready(function(){
        $.getJSON(a, function(data) {
          console.log(data);
            var html = "";
            html += "<form action='correction_html_quizz.php?>";
            console.log(a);
                $.each(data.quizz.fr.débutant, function(i) {
                  html += "</br>";
                  html += "<div id='question"+ i + "'>";
                  html += data.quizz.fr.débutant[i].question;
                  html += "</br>";

        for(var k = 0; k<4; k++){
              html += "<input name= 'reponse"+ i + "' type='radio' value='" + data.quizz.fr.débutant[i].propositions[k] + "' id = '" + k + "'>";
              html +=  '<label for="contactChoice1">' + data.quizz.fr.débutant[i].propositions[k] + '</label>';
              }
               html += "</div>";
            });
        
        html += "</br>";
        html += "<input style=' display:block; margin-left:auto;margin-right:auto;' type='submit'>";
                    html += "<input type='hidden' name='json_url' value='"+ a +"'/>";

        html += "</form>";
        $('.test').append(html);
  
       });
  });

}