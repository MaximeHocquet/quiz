window.onload = function () {
  $().ready(function () {
   
      var html = "";
     
 $.getJSON(a, function (data) {
      console.log(data);
            console.log(a);

            if(b == 'débutant'){
              var niveau = data.quizz.fr.débutant;
              console.log("débutant");
            }
             else if(b == 'confirmé'){
              var niveau = data.quizz.fr.confirmé;
                            console.log("confirmé");

            }
             else if(b == 'expert'){
              var niveau = data.quizz.fr.expert;
                            console.log("expert");

            }
          
                    html += "<form action='correction_html_quizz.php'>";

      $.each(niveau, function (i) {
        html += "<div id='question" + i + "'>";
        html += niveau[i].question;
        html += "</br>";
                html += "<div class='radio'>";



        for (var k = 0; k < 4; k++) {
          html += "<input class='show_input col-xl-6 col-lg-5 col-md-5 mb-4' label='" +niveau[i].propositions[k] + "'  name= 'reponse" + i + "' type='radio' value='" + niveau[i].propositions[k] +
            "' id = '" + k + "'>";

        }


                html+= "</div>";

        html += "<div id='next" + i +
          "' style='width:80px; height:30px; font-size:16px; background-color:gray; color:white; cursor:pointer;display:block; margin-left:auto; margin-right:auto; border-radius: 20px; padding-top:2px;margin-top:25px; margin-bottom:10px;'>Suivant</div>";

        html += "</div>";
        html += "</div>";


      });

      html +=
        "<input id='validation_button' style=' display:block; margin-left:auto;margin-right:auto; margin-top:11px;' type='submit' value='Résultat'>";

      html += "<input type='hidden' name='json_url' value='" + a + "'/>";
      html += "<input type='hidden' name='difficulté' value='" + b + "'/>";


      html += "</form>";
      $(".test1").append(html);

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

      

    

      $("#next0").click(function () {
        $("#question1").show("slow");
  
        $("#question0").hide();
      });

      $("#next1").click(function () {
        $("#question2").show("slow");
    
        $("#question1").hide();
      });

      $("#next2").click(function () {
        $("#question3").show("slow");
     
        $("#question2").hide();
      });
      $("#next3").click(function () {
        $("#question4").show("slow");
      
        $("#question3").hide();
      });
      $("#next4").click(function () {
        $("#question5").show("slow");
    
        $("#question4").hide();
      });

      $("#next5").click(function () {
        $("#question6").show("slow");
     
        $("#question5").hide();
      });
      $("#next6").click(function () {
        $("#question7").show("slow");
  
        $("#question6").hide();
      });
      $("#next7").click(function () {
        $("#question8").show("slow");

        $("#question7").hide();
      });
      $("#next8").click(function () {
        $("#question9").show("slow");
 
        $("#question8").hide();
        $("#next9").hide();
        $("#validation_button").show("slow");
      });
    });
  });
};
