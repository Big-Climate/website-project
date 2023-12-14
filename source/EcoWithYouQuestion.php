<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/EcoWithYouQuestion.css">
    <title>Quiz</title>
  </head>
  <?php include "header.html"; ?>

  <link rel="stylesheet" href="colours.css" />

  <body onload="nextQuestion(0)">
    <main>
      <div class="textBorder">
        <label id="display-question"> </label>

        <div class="row">
          <div class="column">
            <p
              type="button"
              class="buttonOption"
              id="ButA"
              onclick="clicked(this.id)"
            ></p>

            <p
              type="button"
              class="buttonOption"
              id="ButB"
              onclick="clicked(this.id)"
            ></p>
            <p type="button" class="scoreDisplay" id="ScoreL">Score: 0</p>
          </div>
          <div class="column">
            <p
              type="button"
              class="buttonOption"
              id="ButC"
              onclick="clicked(this.id)"
            ></p>
            <p
              type="button"
              class="buttonOption"
              id="ButD"
              onclick="clicked(this.id)"
            ></p>

            <div class="time">
              <span class="minute">00</span>
              <span class="colon">:</span>
              <span class="second">00</span>
              <span class="colon ms-colon">:</span>
              <span class="millisecond">00</span>
            </div>
            <div class="">
              <button class="start"></button>
              <button class="stop"></button>
              <button class="reset"></button>

            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="waveAnimation">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none">
        <path
          class="w1 waveTop"
          d="M-8.74,71.55 C289.78,255.11 349.60,4.47 505.36,34.05 L500.00,150.00 L0.00,150.00 Z"
        />
        <path
          class="w2 waveMiddle"
          d="M-23.42,125.83 C187.63,45.89 299.38,57.73 526.80,123.86 L500.00,150.00 L0.00,150.00 Z"
        />
        <path
          class="w3 waveBottom"
          d="M-23.42,125.83 C172.96,-152.44 217.55,183.06 504.22,55.77 L500.00,150.00 L0.00,150.00 Z"
        />
      </svg>
    </div>
  </body>

  <script>


let  min = sec = ms = "0" + 0,
    startTimer;
  const startBtn = document.querySelector(".start"),
   stopBtn = document.querySelector(".stop"),
   resetBtn = document.querySelector(".reset");
  function start() {
   startBtn.classList.add("active");
   stopBtn.classList.remove("stopActive");
    startTimer = setInterval(()=>{
      ms++
      ms = ms < 10 ? "0" + ms : ms;
      if(ms == 100){
        sec++;
        sec = sec < 10 ? "0" + sec : sec;
        ms = "0" + 0;
      }
      if(sec == 60){
        min++;
        min = min < 10 ? "0" + min : min;
        sec = "0" + 0;
      }
      if(min == 60){
        hr++;
        hr = hr < 10 ? "0" + hr : hr;
        min = "0" + 0;
      }
      putValue();
    },10); //1000ms = 1s
  }
  function stop() {
    startBtn.classList.remove("active");
    stopBtn.classList.add("stopActive");
    clearInterval(startTimer);
  }
  function reset() {
    startBtn.classList.remove("active");
    stopBtn.classList.remove("stopActive");
    clearInterval(startTimer);
    hr = min = sec = ms = "0" + 0;
    putValue();
  }
  function putValue() {
    document.querySelector(".millisecond").innerText = ms;
    document.querySelector(".second").innerText = sec;
    document.querySelector(".minute").innerText = min;
    document.querySelector(".hour").innerText = hr;
  }

  function calcScore(score) {
    var score = score - (((min*60) + sec + (ms*0.001))* 1000)
  }

    const questionList = [
      {
        question: "What is the Most Abundant Gas in the Atmosphere?",
        optionA: "Oxygen",
        optionB: "Methane",
        optionC: "Argon",
        optionD: "Nitrogen",
        correctOption: "ButD",
      },

      {
        question: "How Long does a Plastic Bottle Take to Decompose?",
        optionA: "6 months",
        optionB: "40 years",
        optionC: "450 years",
        optionD: "200 years",
        correctOption: "ButC",
      },
      {
        question:
          "What is the Largest Desert on Earth?",
        optionA: "Sahara",
        optionB: "Icecream",
        optionC: "Karakum",
        optionD: "Antartica",
        correctOption: "ButD",
      },

          {
        question: "What  is the Leading Cause of Global Warming?",
        optionA: "Fossil Fuel",
        optionB: "Cow Farms",
        optionC: "Transport",
        optionD: "Deforestation",
        correctOption: "ButA",
      },

      {
        question:
          "In What Year Could the Effects of Global Warming Be Irreversible?",
        optionA: "2025",
        optionB: "2030",
        optionC: "2050",
        optionD: "3000",
        correctOption: "ButB",
      },

      {
        question: "Which Animals Is Not Extinct?",
        optionA: "Golden Toad",
        optionB: "Spix Macaw",
        optionC: "Amur Leopard",
        optionD: "Red Gazelle",
        correctOption: "ButC",
      },

      {
        question: "What Country is the Most Eco Friendly?",
        optionA: "Denmark",
        optionB: "Iceland",
        optionC: "Norway",
        optionD: "Sweden",
        correctOption: "ButA",
      },
    ];

    let questions = [];
    function handleQuestions() {
      while (questions.length <= 4) {
        const random =
          questionList[Math.floor(Math.random() * questionList.length)];
        if (!questions.includes(random)) {
          questions.push(random);
        }
      }
    }

    var score = 0;
    var index = 0;
    function clicked(currentID) {
      checkCorrect(currentID);
      index++;
      setTimeout(() => {
        if (index <= 4) {
          nextQuestion(index);
        } else {
          endGame();
        }
      }, 500);
    }

    function nextQuestion(index) {

      start();

      handleQuestions();

      var CurQ = questions[index];
      var DisplayQ = document.getElementById("display-question");
      var entered = CurQ.question;
      DisplayQ.innerText = entered;

      var CurQ = questions[index];
      var curA = document.getElementById("ButA");
      var entered = CurQ.optionA;
      curA.innerText = entered;

      var curB = document.getElementById("ButB");
      var entered = CurQ.optionB;
      curB.innerText = entered;

      var curC = document.getElementById("ButC");
      var entered = CurQ.optionC;
      curC.innerText = entered;

      var curD = document.getElementById("ButD");
      var entered = CurQ.optionD;
      curD.innerText = entered;
    }

    function checkCorrect(currentID) {
      var CurQ = questions[index];
      var curAns = CurQ.correctOption;
      if (currentID == curAns) {
        score+= 10000;
        var DisSc = document.getElementById("ScoreL");
        var entered = score;
        DisSc.innerText = "Score:" + entered;
      }
    }

    function post(path, params, method='post') {
      const form = document.createElement('form');
      form.method = method;
      form.action = path;

      for (const key in params) {
        if (params.hasOwnProperty(key)) {
          const hiddenField = document.createElement('input');
          hiddenField.type = 'hidden';
          hiddenField.name = key;
          hiddenField.value = params[key];

          form.appendChild(hiddenField);
        }
      }

      document.body.appendChild(form);
      form.submit();
    }

    function endGame() {
      calcScore(score)
      localStorage.setItem("score", score);
     
      var Name = localStorage.getItem("name");
      var Score = score;

      post("/inc/storescore.php", {score: Score, location: "LeaderBoard.php"});
    }
  </script>
</html>
