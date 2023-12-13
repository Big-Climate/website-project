<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="./css/index.css">
  </head>
  <body>
    <?php include "header.html"; ?>
  </body>

    <!--title image + text-->
   <div class="title-image">
    <div class="fadeTitle">
        <img  src="./assets/earth.jpg" alt="View of Earth from Space" style="width:100%;height:50%">
        <div class="centered"> <h1>EcoWithYou</h1><br/><h2>Our Planet is Dying!<br/> Help us save it!</h2></div>    
   </div>
  </div>
  <div class="row">
    <!--image / text / image-->
    <div class="column left">
        <img src="./assets/ClimateChange1.png" alt="Image of a factory billowing smoke that forms an outline of the earth" style="width:80%;">
    </div>
    <div class="column middle">
        <p><h2>What is Climate Change?</h2>Climate change refers to long-term shifts in temperatures and weather patterns. Such shifts can be natural, due to changes in the sun’s activity or large volcanic eruptions. But since the 1800s, human activities have been the main driver of climate change, primarily due to the burning of fossil fuels like coal, oil and gas. Burning fossil fuels generates greenhouse gas emissions that act like a blanket wrapped around the Earth, trapping the sun’s heat and raising temperatures.</p>
    </div>
    <div class="column right">
        <img src="./assets/ClimateChange2.png" alt="Image of factory stacks billowing smoke into the sky" style="width:80%;">
    </div>   
  </div>

  <div class="row">
    <!--text / image / text-->
    <div class="column left">
      <p><h2>Why does it matter?</h2>Left unchecked, the impacts of climate change will spread and worsen, affecting our homes and cities, economies, food and water supplies as well as the species, ecosystems, and biodiversity of this planet we all call home.</p>
      <a href="whyact.html">
          <span class="button">
              <p>Learn more</p>     
          </span>
      </a>
    </div>

    <div class="column middle">
      <img src="./assets/ClimateChange3.png" alt="Image of a tree half dead and half green" style="width:80%;">
    </div>

    <div class="column right">
      <p class="centered"><h2>Biggest Threats</h2>Fossil fuels – coal, oil and gas – are by far the largest contributor to global climate change, accounting for over 75 per cent of global greenhouse gas emissions and nearly 90 per cent of all carbon dioxide emissions.</p>
      <a href="biggestthreats.html">
          <span class="button">
              <p>Learn more</p>     
          </span>
      </a>
    </div>

  </div>

  <div class="row">
    <!--image / text / image-->
    <div class="column left">
      <img src="./assets/ClimateChange4.png" alt="A vista of windturbines" style="width:80%;">
    </div>

    <div class="column middle">
      <p><h2>What can I do?</h2>Everyone can help limit climate change. From the way we travel, to the electricity we use and the food we eat, we can make a difference.</p>
      <a href="whatcanido.html">
          <span class="button">
              <p>Learn more</p>     
          </span>
      </a>
        <h2>Want to test your knowledge?</h2>
        <a href="quiz.html"><p class="button"> Why not try our QUIZ!</p></a>
    </div>

    <div class="column right">
        <img src="./assets/ClimateChange5.png" alt="Image of a village in the palm of someone's hand" style="width:80%;">
    </div>

  </div>


  <!-- Slideshow container -->
  <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">  
      <img src="./assets/earth.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="./assets/trees.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="./assets/reflection.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  </br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
  </script>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  </body>
</html>
 
