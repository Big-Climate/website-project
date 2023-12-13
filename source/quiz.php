<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>
    <link rel="stylesheet" href="./css/colours.css" />
    <link rel="stylesheet" href="./css/quiz.css" />
  </head>

  <?php include "header.html"; ?>

  <body>
    <div class="headerimage">
      <div class="textBorder">
        <b>Quiz Time!</b>
        <div class="userText">
          <input
            type="text"
            id="name"
            name="name"
            class="textBoxStyle"
            placeholder="Enter Name"
            onclick="wid"
            oninput="buttonAnimation()"
          />
          <div class="buttonPos">
            <button
              class="hide"
              id="goButton"
              style="
                border-radius: 5px;
                background-color: var(--nav-colour);
                border-color: var(--background-colour);
                display: none;
              "
              type="button"
              onclick="storeName()"
            >
              GO
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script>
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

    function storeName() {
      var nameStr = document.getElementById("name").value;
      post("/inc/storename.php", {name: nameStr, location: "EcoWithYouQuestion.php"});
      //window.location.href = "EcoWithYouQuestion.html";
    }

    function buttonAnimation() {
      var inputBox = document.getElementById("name");
      inputBox.style.width = 100 + "px";
      document.getElementById("goButton").style.display = "block";
    }
  </script>
</html>
