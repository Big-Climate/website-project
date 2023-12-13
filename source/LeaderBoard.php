<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>
    <link rel="stylesheet" href="./css/colours.css" />
    <link rel="stylesheet" href="./css/LeaderBoard.css" />
  </head>

  <?php include "header.html"; ?>

  <body onload="podiumAnimation()">
    <div class="headerimage">
      <div class="textBorder">
        <h1>Leaderboard</h1>

        <div class="container podium">
          <div class="podium__item">
            <p id="secondScore" class="scoreText">...</p>
            <p id="second" class="podium__rank second">...</p>
          </div>

          <div class="podium__item">
            <p id="firstScore" class="scoreText">...</p>
            <p id="first" class="podium__rank first">...</p>
          </div>

          <div class="podium__item">
            <p id="thirdScore" class="scoreText">...</p>
            <p id="third" class="podium__rank third">...</p>
          </div>
        </div>

        <div class="containerButton">
          <p type="" class="buttonOption" id="fourth">...</p>
          <p type="" class="buttonOption" id="fifth">...</p>
          <p type="" class="buttonOption" id="sixth">...</p>
          <p type="" class="buttonOption" id="seventh">...</p>
          <p type="button" class="scoreDisplay" id="ScoreL">Score: 0</p>
        </div>
      </div>
    </div>
  </body>

  <script>
     let ids = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh"];
     let leaderboard = [
      <?php
        require_once("inc/leaderboard.php");
        $scores = CSVToArray();
        for($i = 0; $i < sizeof($scores); $i++) {
          echo '{name:"' . $scores[$i]->name . '", score:' . $scores[$i]->score . "},";
        }
      ?>
      ];
      for(let i = 0; i < leaderboard.length; i++) {
        document.getElementById(ids[i]).innerHTML = leaderboard[i].name;
        if(i < 3) {
          document.getElementById(ids[i] + "Score").innerHTML = leaderboard[i].score;
        }
      }
      // Get the value from localStorage
      var score = localStorage.getItem("score");
      var name = localStorage.getItem("name");
      // Display the value on the page
      var output = document.getElementById("ScoreL");
      output.innerText = "<?php echo $_SESSION['name']; ?>" + "'s Score: " + score;


    function podiumAnimation() {
      var myDiv = document.getElementById("first");     
      myDiv.style.height = 100 + "px";

      var myDiv = document.getElementById("second");     
      myDiv.style.height = 70 + "px";

      var myDiv = document.getElementById("third");     
      myDiv.style.height = 50 + "px";
      
    }
  </script>
</html>
