window.onload = function(){

 $().ready(function(){
        $.getJSON(a, function(data) {
          console.log(data);
            var html = "";
            html += "<form action='correction_html_quizz.php'>";
            console.log(a);
                $.each(data.quizz.fr.débutant, function(i) {
                  html += "<div id='question"+ i + "'>";
                  html += data.quizz.fr.débutant[i].question;
                  html += "</br>";

        for(var k = 0; k<4; k++){
              html += "<input name= 'reponse"+ i + "' type='radio' value='" + data.quizz.fr.débutant[i].propositions[k] + "' id = '" + k + "'>";
              html +=  '<label for="contactChoice1">' + data.quizz.fr.débutant[i].propositions[k] + '</label>';
              html+= "  ";

              }
                      html+= "<div id='next"+i+"' style='width:80px; height:40px; background-color:white; cursor:pointer;display:block; margin-left:auto; margin-right:auto;'>Suivant</div>"

               html += "</div>";
                              html += "</div>";

            });
        
        html += "<input id='validation_button' style=' display:block; margin-left:auto;margin-right:auto;' type='submit'>";

                    html += "<input type='hidden' name='json_url' value='"+ a +"'/>";

        html += "</form>";
        $('.test').append(html);

     $("#validation_button").hide();
     $("#question1").hide();
     $("#question2").hide();
     $("#question3").hide();
     $("#question4").hide();
     $("#question5").hide();
     $("#question6").hide();
     $("#question7").hide();
     $("#question8").hide();
     $("#question9").hide();

       $("#next0").click(function(){
     $("#question1").show();
          $("#question0").hide();


});


     $("#next1").click(function(){
     $("#question2").show();
          $("#question1").hide();


});
   

     $("#next2").click(function(){
     $("#question3").show();
          $("#question2").hide();


});
      $("#next3").click(function(){
     $("#question4").show();
          $("#question3").hide();


});
      $("#next4").click(function(){
     $("#question5").show();
          $("#question4").hide();


});
    
    $("#next5").click(function(){
     $("#question6").show();
          $("#question5").hide();


});
    $("#next6").click(function(){
     $("#question7").show();
          $("#question6").hide();


});
    $("#next7").click(function(){
     $("#question8").show();
          $("#question7").hide();


});
    $("#next8").click(function(){
     $("#question9").show();
          $("#question8").hide();
        $("#next9").hide();
        $("#validation_button").show();



});
    
       

       });

  });        



}